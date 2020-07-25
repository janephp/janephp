<?php

namespace Jane\OpenApi2\Generator\Parameter;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Jane\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Psr\Http\Message\StreamInterface;

class NonBodyParameterGenerator extends ParameterGenerator
{
    /**
     * {@inheritdoc}
     *
     * @param PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): Node\Param
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
     * @param PathParameterSubSchema[]|HeaderParameterSubSchema[]|FormDataParameterSubSchema[]|QueryParameterSubSchema[] $parameters
     */
    public function generateOptionsResolverStatements(Expr\Variable $optionsResolverVariable, array $parameters, array $genericResolver = []): array
    {
        $required = $allowedTypes = $defined = $defaults = [];
        $genericResolverKeys = array_keys($genericResolver);

        foreach ($parameters as $parameter) {
            $defined[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));

            if ($parameter->getRequired() && null === $parameter->getDefault()) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameter->getName()));
            }

            $matchGenericResolver = null;
            if ($parameter->getType()) {
                $types = [];

                foreach ($this->convertParameterType($parameter->getType()) as $typeString) {
                    if (\in_array($typeString, $genericResolverKeys)) {
                        $matchGenericResolver = $typeString;
                    }

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

            if (null !== $matchGenericResolver) {
                $allowedTypes[] = $this->generateOptionResolverNormalizationStatement($parameter->getName(), $genericResolver[$matchGenericResolver]);
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

    private function generateOptionResolverNormalizationStatement(string $optionName, Expr $callback): Node\Stmt\Expression
    {
        return new Node\Stmt\Expression(
            new Expr\MethodCall(
                new Expr\Variable('optionsResolver'),
                'setNormalizer',
                [
                    new Node\Arg(new Scalar\String_($optionName)),
                    new Node\Arg($callback),
                ]
            )
        );
    }

    /**
     * {@inheritdoc}
     *
     * @param PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        $type = implode('|', $this->convertParameterType($parameter->getType()));

        return sprintf(' * @param %s $%s %s', $type, Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    /**
     * @param PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter
     */
    public function generateOptionDocParameter($parameter): string
    {
        $type = implode('|', $this->convertParameterType($parameter->getType()));

        return sprintf(' *     @var %s $%s %s', $type, $parameter->getName(), $parameter->getDescription() ?: '');
    }

    /**
     * Generate a default value as an Expr.
     *
     * @param PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter
     */
    private function getDefaultAsExpr($parameter): Expr
    {
        $expr = $this->parser->parse('<?php ' . var_export($parameter->getDefault(), true) . ';')[0];

        if ($expr instanceof Node\Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
    }

    private function convertParameterType(string $type): array
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
