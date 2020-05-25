<?php

namespace Jane\OpenApi3\Generator\Parameter;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Generator\GeneratorResolveTrait;
use Jane\OpenApi3\JsonSchema\Model\Parameter;
use Jane\OpenApi3\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Parser;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class NonBodyParameterGenerator extends ParameterGenerator
{
    use GeneratorResolveTrait;

    public function __construct(DenormalizerInterface $denormalizer, Parser $parser)
    {
        parent::__construct($parser);
        $this->denormalizer = $denormalizer;
    }

    /**
     * {@inheritdoc}
     *
     * @param Parameter $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        $name = Inflector::camelize($parameter->getName());
        $methodParameter = new Node\Param(new Expr\Variable($name));

        if (!$parameter->getSchema()) {
            return $methodParameter;
        }

        if (!$parameter->getRequired() || null !== $parameter->getSchema()->getDefault()) {
            $methodParameter->default = $this->getDefaultAsExpr($parameter);
        }

        $types = $this->convertParameterType($parameter->getSchema()->getType(), $parameter->getSchema()->getAdditionalProperties());

        if (\count($types) === 1) {
            $methodParameter->type = new Node\Name($types[0]);
        }

        return $methodParameter;
    }

    /**
     * @param Parameter[] $parameters
     */
    public function generateOptionsResolverStatements(Expr\Variable $optionsResolverVariable, array $parameters): array
    {
        $required = [];
        $allowedTypes = [];
        $defined = [];
        $defaults = [];

        foreach ($parameters as $parameter) {
            $defined[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));
            $schema = $parameter->getSchema();

            if ($parameter->getRequired() && (null !== $schema && null === $schema->getDefault())) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));
            }

            if ($schema instanceof Reference) {
                [$_, $schema] = $this->resolve($schema, Schema::class);
            }

            if (null !== $schema && $schema->getType()) {
                $types = [];

                foreach ($this->convertParameterType($schema->getType(), $schema->getAdditionalProperties()) as $typeString) {
                    $types[] = new Expr\ArrayItem(new Scalar\String_($typeString));
                }

                if ($schema->getNullable()) {
                    $types[] = new Expr\ArrayItem(new Scalar\String_('null'));
                }

                $allowedTypes[] = new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setAllowedTypes', [
                    new Node\Arg(new Scalar\String_($parameter->getName())),
                    new Node\Arg(new Expr\Array_($types)),
                ]));
            }

            if (!$parameter->getRequired() && null !== $schema->getDefault()) {
                $defaults[] = new Expr\ArrayItem($this->getDefaultAsExpr($parameter), new Scalar\String_($parameter->getName()));
            }
        }

        return array_merge([
            new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setDefined', [
                new Node\Arg(new Expr\Array_($defined)),
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
            $type = implode('|', $this->convertParameterType($parameter->getSchema()->getType(), $parameter->getSchema()->getAdditionalProperties()));
        }

        return sprintf(' * @param %s $%s %s', $type, Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    public function generateOptionDocParameter(Parameter $parameter): string
    {
        $type = 'mixed';

        if ($parameter->getSchema() instanceof Schema) {
            $type = implode('|', $this->convertParameterType($parameter->getSchema()->getType(), $parameter->getSchema()->getAdditionalProperties()));
        }

        return sprintf(' *     @var %s $%s %s', $type, $parameter->getName(), $parameter->getDescription() ?: '');
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

    private function convertParameterType(string $type, $additionalProperties): array
    {
        if ($additionalProperties instanceof Schema &&
            'object' === $type &&
            'string' === $additionalProperties->getType()) {
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
