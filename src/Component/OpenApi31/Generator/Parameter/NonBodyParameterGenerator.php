<?php

namespace Jane\Component\OpenApi31\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
use Jane\Component\OpenApiCommon\Generator\Endpoint\PathParameterNameTrait;
use Jane\Component\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use Jane\Component\OpenApiCommon\Generator\Traits\OpenApiNumberTypeResolverTrait;
use Jane\Component\OpenApiCommon\Generator\Traits\OptionResolverNormalizationTrait;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Parser;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class NonBodyParameterGenerator extends ParameterGenerator
{
    use OpenApiNumberTypeResolverTrait;
    use OptionResolverNormalizationTrait;
    use PathParameterNameTrait;

    private GuessClass $guessClass;

    public function __construct(DenormalizerInterface $denormalizer, Parser $parser)
    {
        parent::__construct($parser);
        $this->guessClass = new GuessClass(JsonSchema::class, $denormalizer);
    }

    /**
     * @param Parameter $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        $name = $this->normalizePathVariableName(($parameter->name ?? null) ?? null);
        $methodParameter = new Node\Param(new Expr\Variable($name));

        $schema = ($parameter->schema ?? null);
        if (!$schema instanceof JsonSchema) {
            return $methodParameter;
        }

        if (!$parameter->required || null !== ($schema->default ?? null)) {
            $methodParameter->default = $this->getDefaultAsExpr($schema);
        }

        if (null !== ($schema->anyOf ?? null) && \count($schema->anyOf ?? null) > 0) {
            return $methodParameter;
        }

        $types = $this->convertParameterType($schema);

        if (\count($types) === 1) {
            $methodParameter->type = new Node\Name($types[0]);
        }

        return $methodParameter;
    }

    /**
     * @param Parameter[] $parameters
     */
    public function generateOptionsResolverStatements(Expr\Variable $optionsResolverVariable, array $parameters, array $genericResolver = []): array
    {
        $required = $allowedTypes = $defined = $defaults = [];
        $genericResolverKeys = array_keys($genericResolver);

        foreach ($parameters as $parameter) {
            $parameterName = (($parameter->name ?? null) ?? null);
            if (str_contains($parameterName, '[]')) {
                $parameterName = substr($parameterName, 0, -2);
            }

            if (!\array_key_exists($parameterName, $defined)) {
                $defined[$parameterName] = new Expr\ArrayItem(new Scalar\String_($parameterName));
            }

            $schema = ($parameter->schema ?? null);

            if ($schema instanceof Reference) {
                [, $schema] = $this->guessClass->resolve($schema, JsonSchema::class);
            }

            if ($parameter->required && (null !== $schema && null === ($schema->default ?? null))) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameterName));
            }

            $matchGenericResolver = null;
            if ($schema instanceof JsonSchema && ($schema->type ?? null)) {
                $types = [];

                foreach ($this->convertParameterType($schema) as $typeString) {
                    if (\in_array($typeString, $genericResolverKeys)) {
                        $matchGenericResolver = $typeString;
                    }

                    $types[] = new Expr\ArrayItem(new Scalar\String_($typeString));
                }

                if (\is_array($schema->type ?? null) && \in_array('null', $schema->type ?? null)) {
                    $types[] = new Expr\ArrayItem(new Scalar\String_('null'));
                }

                $allowedTypes[] = new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'addAllowedTypes', [
                    new Node\Arg(new Scalar\String_($parameterName)),
                    new Node\Arg(new Expr\Array_($types)),
                ]));
            }

            if (!$parameter->required && null !== $schema && null !== ($schema->default ?? null)) {
                $defaults[] = new Expr\ArrayItem($this->getDefaultAsExpr($schema), new Scalar\String_($parameterName));
            }

            if (null !== $matchGenericResolver) {
                $allowedTypes[] = $this->generateOptionResolverNormalizationStatement($parameterName, $genericResolver[$matchGenericResolver]);
            }
        }

        return array_merge([
            new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setDefined', [
                new Node\Arg(new Expr\Array_(array_values($defined))),
            ])),
            new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setRequired', [
                new Node\Arg(new Expr\Array_($required)),
            ])),
            new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setDefaults', [
                new Node\Arg(new Expr\Array_($defaults)),
            ])),
        ], $allowedTypes);
    }

    /**
     * @param Parameter $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        $type = 'mixed';
        $schema = ($parameter->schema ?? null);

        if ($schema instanceof JsonSchema && (null === ($schema->anyOf ?? null) || \count($schema->anyOf ?? null) === 0)) {
            $type = implode('|', $this->convertParameterType($schema));
        }

        return rtrim(\sprintf(' * @param %s $%s %s', $type, str_replace('*/', '*\\/', $this->normalizePathVariableName(($parameter->name ?? null) ?? null)), str_replace('*/', '*\\/', (($parameter->description ?? null) ?? null) ?: '')));
    }

    public function generateOptionDocParameter(Parameter $parameter): string
    {
        $type = 'mixed';
        $schema = ($parameter->schema ?? null);

        if ($schema instanceof JsonSchema) {
            $type = implode('|', $this->convertParameterType($schema));
        }

        $description = implode("\n", array_map(fn (string $line): string => str_replace('*/', '*\\/', rtrim($line)), explode("\n", (($parameter->description ?? null) ?? null) ?: '')));

        return rtrim(
            \sprintf(
                ' *    "%s"%s: %s%s',
                str_replace('*/', '*\\/', ($parameter->name ?? null) ?? null),
                $parameter->required ? '' : '?',
                $type,
                $description !== '' ? ', //' . $description : ','
            )
        );
    }

    private function getDefaultAsExpr(JsonSchema $schema): Expr
    {
        /** @var Expr|Stmt\Expression $expr */
        $expr = $this->parser->parse('<?php ' . var_export($schema->default ?? null, true) . ';')[0];

        if ($expr instanceof Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
    }

    private function convertParameterType(JsonSchema $schema): array
    {
        $type = ($schema->type ?? null);
        if (\is_array($type)) {
            $type = array_filter($type, fn ($t) => $t !== 'null');
            $type = reset($type) ?: null;
        }

        $additionalProperties = $schema->additionalProperties;

        if (null === $type && null !== ($schema->enum ?? null) && \count($schema->enum ?? null) > 0) {
            $type = 'string';
        }

        if ($additionalProperties instanceof JsonSchema
            && 'object' === $type
            && 'string' === (\is_array($additionalProperties->type ?? null) ? (($additionalProperties->type ?? null)[0] ?? null) : ($additionalProperties->type ?? null))) {
            return ['string'];
        }

        $convertArray = [
            'string' => ['string'],
            'number' => [$this->isNumberFloat(
                $schema->format ?? null,
                $schema->default ?? null,
                $schema->minimum ?? null,
                $schema->maximum ?? null,
                $schema->multipleOf ?? null,
                $schema->enum ?? null
            ) ? 'float' : 'int'],
            'boolean' => ['bool'],
            'integer' => ['int'],
            'array' => ['array'],
            'object' => ['array'],
            'file' => ['string', 'resource'],
        ];

        if (!isset($convertArray[$type])) {
            return ['mixed'];
        }

        return $convertArray[$type];
    }
}
