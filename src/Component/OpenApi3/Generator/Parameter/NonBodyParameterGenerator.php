<?php

namespace Jane\Component\OpenApi3\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Guesser\GuessClass;
use Jane\Component\OpenApi3\JsonSchema\Model\Parameter;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Generator\Parameter\ParameterGenerator;
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
    use OptionResolverNormalizationTrait;

    /** @var GuessClass */
    private $guessClass;

    public function __construct(DenormalizerInterface $denormalizer, Parser $parser)
    {
        parent::__construct($parser);
        $this->guessClass = new GuessClass(Schema::class, $denormalizer);
    }

    /**
     * {@inheritdoc}
     *
     * @param Parameter $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        $name = $this->getInflector()->camelize($parameter->getName());
        $methodParameter = new Node\Param(new Expr\Variable($name));

        if (!$parameter->getSchema()) {
            return $methodParameter;
        }

        if (!$parameter->getRequired() || null !== $parameter->getSchema()->getDefault()) {
            $methodParameter->default = $this->getDefaultAsExpr($parameter);
        }

        $types = $this->convertParameterType($parameter->getSchema());

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
                [$_, $schema] = $this->guessClass->resolve($schema, Schema::class);
            }

            if ($parameter->getRequired() && (null !== $schema && null === $schema->getDefault())) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameterName));
            }

            $matchGenericResolver = null;
            if (null !== $schema && $schema->getType()) {
                $types = [];

                foreach ($this->convertParameterType($schema) as $typeString) {
                    if (\in_array($typeString, $genericResolverKeys)) {
                        $matchGenericResolver = $typeString;
                    }

                    $types[] = new Expr\ArrayItem(new Scalar\String_($typeString));
                }

                if ($schema->getNullable()) {
                    $types[] = new Expr\ArrayItem(new Scalar\String_('null'));
                }

                $allowedTypes[] = new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'addAllowedTypes', [
                    new Node\Arg(new Scalar\String_($parameterName)),
                    new Node\Arg(new Expr\Array_($types)),
                ]));
            }

            if (!$parameter->getRequired() && null !== $schema && null !== $schema->getDefault()) {
                $defaults[] = new Expr\ArrayItem($this->getDefaultAsExpr($parameter), new Scalar\String_($parameterName));
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
     * {@inheritdoc}
     *
     * @param Parameter $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        $type = 'mixed';

        if ($parameter->getSchema()) {
            $type = implode('|', $this->convertParameterType($parameter->getSchema()));
        }

        return \sprintf(' * @param %s $%s %s', $type, $this->getInflector()->camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    public function generateOptionDocParameter(Parameter $parameter): string
    {
        $type = 'mixed';

        if ($parameter->getSchema() instanceof Schema) {
            $type = implode('|', $this->convertParameterType($parameter->getSchema()));
        }

        return \sprintf(' *     @var %s $%s %s', $type, $parameter->getName(), $parameter->getDescription() ?: '');
    }

    /**
     * Generate a default value as an Expr.
     */
    private function getDefaultAsExpr(Parameter $parameter): Expr
    {
        $expr = $this->parser->parse('<?php ' . var_export($parameter->getSchema()->getDefault(), true) . ';')[0];

        if ($expr instanceof Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
    }

    private function convertParameterType(Schema $schema): array
    {
        $type = $schema->getType();
        $additionalProperties = $schema->getAdditionalProperties();

        if (null === $type && null !== $schema->getEnum() && \count($schema->getEnum()) > 0) {
            $type = 'string';
        }

        if ($additionalProperties instanceof Schema
            && 'object' === $type
            && 'string' === $additionalProperties->getType()) {
            return ['string'];
        }

        $convertArray = [
            'string' => ['string'],
            'number' => ['float'],
            'boolean' => ['bool'],
            'integer' => ['int'],
            'array' => ['array'],
            'file' => ['string', 'resource', '\\' . StreamInterface::class],
        ];

        return $convertArray[$type];
    }
}
