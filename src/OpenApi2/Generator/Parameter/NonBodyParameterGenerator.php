<?php

namespace Jane\OpenApi2\Generator\Parameter;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi2\Model\FormDataParameterSubSchema;
use Jane\OpenApi2\Model\HeaderParameterSubSchema;
use Jane\OpenApi2\Model\PathParameterSubSchema;
use Jane\OpenApi2\Model\QueryParameterSubSchema;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Psr\Http\Message\StreamInterface;

class NonBodyParameterGenerator extends ParameterGenerator
{
    /**
     * {@inheritdoc}
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     */
    public function generateMethodParameter($parameter, Context $context, $reference): Node\Param
    {
        $name = Inflector::camelize($parameter->getName());
        $methodParameter = new Node\Param(new Node\Expr\Variable($name));

        if (!$parameter->getRequired() || null !== $parameter->getDefault()) {
            $methodParameter->default = $this->getDefaultAsExpr($parameter);
        }

        $types = $this->convertParameterType($parameter->getType());

        if (\count($types) === 1) {
            $methodParameter->type = new Node\Name($types[0]);
        }

        return $methodParameter;
    }

    /**
     * @param $parameters PathParameterSubSchema[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[]
     */
    public function generateOptionsResolverStatements(Expr\Variable $optionsResolverVariable, $parameters): array
    {
        $required = [];
        $allowedTypes = [];
        $defined = [];
        $defaults = [];

        foreach ($parameters as $parameter) {
            $defined[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));

            if ($parameter->getRequired() && null === $parameter->getDefault()) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));
            }

            if ($parameter->getType()) {
                $types = [];

                foreach ($this->convertParameterType($parameter->getType()) as $typeString) {
                    $types[] = new Expr\ArrayItem(new Scalar\String_($typeString));
                }

                $allowedTypes[] = new Node\Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setAllowedTypes', [
                    new Node\Arg(new Scalar\String_($parameter->getName())),
                    new Node\Arg(new Expr\Array_($types)),
                ]));
            }

            if (!$parameter->getRequired() && null !== $parameter->getDefault()) {
                $defaults[] = new Expr\ArrayItem($this->getDefaultAsExpr($parameter), new Scalar\String_($parameter->getName()));
            }
        }

        return array_merge([
            new Node\Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setDefined', [
                new Node\Arg(new Expr\Array_($defined)),
            ])),
            new Node\Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setRequired', [
                new Node\Arg(new Expr\Array_($required)),
            ])),
            new Node\Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'setDefaults', [
                new Node\Arg(new Expr\Array_($defaults)),
            ])),
        ], $allowedTypes);
    }

    /**
     * {@inheritdoc}
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     */
    public function generateMethodDocParameter($parameter, Context $context, $reference)
    {
        $type = implode('|', $this->convertParameterType($parameter->getType()));

        return sprintf(' * @param %s $%s %s', $type, Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    /**
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     *
     * @return string
     */
    public function generateOptionDocParameter($parameter)
    {
        $type = implode('|', $this->convertParameterType($parameter->getType()));

        return sprintf(' *     @var %s $%s %s', $type, $parameter->getName(), $parameter->getDescription() ?: '');
    }

    /**
     * Generate a default value as an Expr.
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     *
     * @return Expr
     */
    private function getDefaultAsExpr($parameter)
    {
        $expr = $this->parser->parse('<?php ' . var_export($parameter->getDefault(), true) . ';')[0];

        if ($expr instanceof Node\Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
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
