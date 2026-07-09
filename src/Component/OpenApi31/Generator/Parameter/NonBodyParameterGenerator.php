<?php

namespace Jane\Component\OpenApi31\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Guesser\GuessClass;
use Jane\Component\OpenApi31\JsonSchema\Model\Parameter;
use Jane\Component\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use Jane\Component\OpenApiCommon\Generator\Traits\OpenApiNumberTypeResolverTrait;
use Jane\Component\OpenApiCommon\Generator\Traits\OptionResolverNormalizationTrait;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Parser;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class NonBodyParameterGenerator extends ParameterGenerator
{
    use OpenApiNumberTypeResolverTrait;
    use OptionResolverNormalizationTrait;

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
        $name = $this->getInflector()->camelize($parameter->getName());
        $methodParameter = new Node\Param(new Expr\Variable($name));

        $schema = $parameter->getSchema();
        if (!$schema instanceof JsonSchema) {
            return $methodParameter;
        }

        if (!$parameter->getRequired() || null !== $schema->getDefault()) {
            $methodParameter->default = $this->getDefaultAsExpr($schema);
        }

        if (null !== $schema->getAnyOf() && \count($schema->getAnyOf()) > 0) {
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
            $parameterName = $parameter->getName();
            if (str_contains($parameterName, '[]')) {
                $parameterName = substr($parameterName, 0, -2);
            }

            if (!\array_key_exists($parameterName, $defined)) {
                $defined[$parameterName] = new Expr\ArrayItem(new Scalar\String_($parameterName));
            }

            $schema = $parameter->getSchema();

            if ($schema instanceof Reference) {
                [, $schema] = $this->guessClass->resolve($schema, JsonSchema::class);
            }

            if ($parameter->getRequired() && (null !== $schema && null === $schema->getDefault())) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameterName));
            }

            $matchGenericResolver = null;
            if ($schema instanceof JsonSchema && $schema->getType()) {
                $types = [];

                foreach ($this->convertParameterType($schema) as $typeString) {
                    if (\in_array($typeString, $genericResolverKeys)) {
                        $matchGenericResolver = $typeString;
                    }

                    $types[] = new Expr\ArrayItem(new Scalar\String_($typeString));
                }

                if (\is_array($schema->getType()) && \in_array('null', $schema->getType())) {
                    $types[] = new Expr\ArrayItem(new Scalar\String_('null'));
                }

                $allowedTypes[] = new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'addAllowedTypes', [
                    new Node\Arg(new Scalar\String_($parameterName)),
                    new Node\Arg(new Expr\Array_($types)),
                ]));
            }

            if (!$parameter->getRequired() && null !== $schema && null !== $schema->getDefault()) {
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
        $schema = $parameter->getSchema();

        if ($schema instanceof JsonSchema && (null === $schema->getAnyOf() || \count($schema->getAnyOf()) === 0)) {
            $type = implode('|', $this->convertParameterType($schema));
        }

        return rtrim(\sprintf(' * @param %s $%s %s', $type, str_replace('*/', '*\\/', $this->getInflector()->camelize($parameter->getName())), str_replace('*/', '*\\/', $parameter->getDescription() ?: '')));
    }

    public function generateOptionDocParameter(Parameter $parameter): string
    {
        $type = 'mixed';
        $schema = $parameter->getSchema();

        if ($schema instanceof JsonSchema) {
            $type = implode('|', $this->convertParameterType($schema));
        }

        $description = implode("\n", array_map(fn (string $line): string => str_replace('*/', '*\\/', rtrim($line)), explode("\n", $parameter->getDescription() ?: '')));

        return rtrim(
            \sprintf(
                ' *    "%s"%s: %s%s',
                str_replace('*/', '*\\/', $parameter->getName()),
                $parameter->getRequired() ? '' : '?',
                $type,
                $description !== '' ? ', //' . $description : ','
            )
        );
    }

    private function getDefaultAsExpr(JsonSchema $schema): Expr
    {
        /** @var Expr|Stmt\Expression $expr */
        $expr = $this->parser->parse('<?php ' . var_export($schema->getDefault(), true) . ';')[0];

        if ($expr instanceof Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
    }

    private function convertParameterType(JsonSchema $schema): array
    {
        $type = $schema->getType();
        if (\is_array($type)) {
            $type = array_filter($type, fn ($t) => $t !== 'null');
            $type = reset($type) ?: null;
        }

        $additionalProperties = $schema->getAdditionalProperties();

        if (null === $type && null !== $schema->getEnum() && \count($schema->getEnum()) > 0) {
            $type = 'string';
        }

        if ($additionalProperties instanceof JsonSchema
            && 'object' === $type
            && 'string' === (\is_array($additionalProperties->getType()) ? ($additionalProperties->getType()[0] ?? null) : $additionalProperties->getType())) {
            return ['string'];
        }

        $convertArray = [
            'string' => ['string'],
            'number' => [$this->isNumberFloat(
                $schema->getFormat(),
                $schema->getDefault(),
                $schema->getMinimum(),
                $schema->getMaximum(),
                $schema->getMultipleOf(),
                $schema->getEnum()
            ) ? 'float' : 'int'],
            'boolean' => ['bool'],
            'integer' => ['int'],
            'array' => ['array'],
            'object' => ['array'],
            'file' => ['string', 'resource', '\\' . StreamInterface::class],
        ];

        if (!isset($convertArray[$type])) {
            return ['mixed'];
        }

        return $convertArray[$type];
    }
}
