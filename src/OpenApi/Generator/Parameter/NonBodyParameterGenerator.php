<?php

namespace Jane\OpenApi\Generator\Parameter;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\FormDataParameterSubSchema;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExampleInHeader;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExampleInPath;
use Jane\OpenApi\JsonSchema\Version3\Model\ParameterWithSchemaWithExampleInQuery;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Psr\Http\Message\StreamInterface;

class NonBodyParameterGenerator extends ParameterGenerator
{
    /**
     * {@inheritdoc}
     *
     * @param $parameter ParameterWithSchemaWithExampleInPath|ParameterWithSchemaWithExampleInHeader|FormDataParameterSubSchema|ParameterWithSchemaWithExampleInQuery
     */
    public function generateMethodParameter($parameter, Context $context, $reference): Node\Param
    {
        $name = Inflector::camelize($parameter->getName());
        $methodParameter = new Node\Param($name);

        if (!$parameter->getSchema()) {
            return $methodParameter;
        }

        if (!$parameter->getRequired() || null !== $parameter->getSchema()->getDefault()) {
            $methodParameter->default = $this->getDefaultAsExpr($parameter);
        }

        $types = $this->convertParameterType($parameter->getSchema()->getType());

        if (\count($types) === 1) {
            $methodParameter->type = $types[0];
        }

        return $methodParameter;
    }

    /**
     * @param $parameters ParameterWithSchemaWithExampleInPath[]|ParameterWithSchemaWithExampleInHeader[]|FormDataParameterSubSchema[]|ParameterWithSchemaWithExampleInQuery[]
     *
     * @return array
     */
    public function generateOptionsResolverStatements(Expr\Variable $optionsResolverVariable, $parameters): array
    {
        $required = [];
        $allowedTypes = [];
        $defined = [];
        $defaults = [];

        foreach ($parameters as $parameter) {
            $defined[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));
            $schema = $parameter->getSchema();

            if ($parameter->getRequired() && null === $schema->getDefault()) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));
            }

            if ($schema->getType()) {
                $types = [];

                foreach ($this->convertParameterType($schema->getType()) as $typeString) {
                    $types[] = new Expr\ArrayItem(new Scalar\String_($typeString));
                }

                $allowedTypes[] = new Expr\MethodCall($optionsResolverVariable, 'setAllowedTypes', [
                    new Node\Arg(new Scalar\String_($parameter->getName())),
                    new Node\Arg(new Expr\Array_($types)),
                ]);
            }

            if (!$parameter->getRequired() && null !== $schema->getDefault()) {
                $defaults[] = new Expr\ArrayItem($this->getDefaultAsExpr($parameter), new Scalar\String_($parameter->getName()));
            }
        }

        return array_merge([
            new Expr\MethodCall($optionsResolverVariable, 'setDefined', [
                new Node\Arg(new Expr\Array_($defined)),
            ]),
            new Expr\MethodCall($optionsResolverVariable, 'setRequired', [
                new Node\Arg(new Expr\Array_($required)),
            ]),
            new Expr\MethodCall($optionsResolverVariable, 'setDefaults', [
                new Node\Arg(new Expr\Array_($defaults)),
            ]),
        ], $allowedTypes);
    }

    /**
     * {@inheritdoc}
     *
     * @param $parameter ParameterWithSchemaWithExampleInPath|ParameterWithSchemaWithExampleInHeader|FormDataParameterSubSchema|ParameterWithSchemaWithExampleInQuery
     */
    public function generateMethodDocParameter($parameter, Context $context, $reference)
    {
        $type = 'mixed';

        if ($parameter->getSchema()) {
            $type = implode('|', $this->convertParameterType($parameter->getSchema()->getType()));
        }

        return sprintf(' * @param %s $%s %s', $type, Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    /**
     * @param $parameter ParameterWithSchemaWithExampleInPath|ParameterWithSchemaWithExampleInHeader|FormDataParameterSubSchema|ParameterWithSchemaWithExampleInQuery
     *
     * @return string
     */
    public function generateOptionDocParameter($parameter)
    {
        $type = 'mixed';

        if ($parameter->getSchema()) {
            $type = implode('|', $this->convertParameterType($parameter->getSchema()->getType()));
        }

        return sprintf(' *     @var %s $%s %s', $type, $parameter->getName(), $parameter->getDescription() ?: '');
    }

    /**
     * Generate a default value as an Expr.
     *
     * @param $parameter ParameterWithSchemaWithExampleInPath|ParameterWithSchemaWithExampleInHeader|FormDataParameterSubSchema|ParameterWithSchemaWithExampleInQuery
     *
     * @return Expr
     */
    private function getDefaultAsExpr($parameter)
    {
        return $this->parser->parse('<?php ' . var_export($parameter->getSchema()->getDefault(), true) . ';')[0];
    }

    private function convertParameterType($type)
    {
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
