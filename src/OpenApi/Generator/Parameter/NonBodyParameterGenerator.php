<?php

namespace Jane\OpenApi\Generator\Parameter;

use Doctrine\Common\Inflector\Inflector;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Model\FormDataParameterSubSchema;
use Jane\OpenApi\Model\HeaderParameterSubSchema;
use Jane\OpenApi\Model\PathParameterSubSchema;
use Jane\OpenApi\Model\QueryParameterSubSchema;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

abstract class NonBodyParameterGenerator extends ParameterGenerator
{
    /**
     * {@inheritdoc}
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     */
    public function generateMethodParameter($parameter, Context $context, $reference)
    {
        $name = Inflector::camelize($parameter->getName());
        $methodParameter = new Node\Param($name);

        if (!$parameter->getRequired() || null !== $parameter->getDefault()) {
            $methodParameter->default = $this->getDefaultAsExpr($parameter);
        }

        return $methodParameter;
    }

    /**
     * {@inheritdoc}
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     */
    public function generateQueryParamStatements($parameter, Expr $queryParamVariable)
    {
        $statements = [];

        if (!$parameter->getRequired() || null !== $parameter->getDefault()) {
            $statements[] = new Expr\MethodCall($queryParamVariable, 'setDefault', [
                new Node\Arg(new Scalar\String_($parameter->getName())),
                new Node\Arg($this->getDefaultAsExpr($parameter)),
            ]);
        }

        if ($parameter->getRequired() && null === $parameter->getDefault()) {
            $statements[] = new Expr\MethodCall($queryParamVariable, 'setRequired', [new Node\Arg(new Scalar\String_($parameter->getName()))]);
        }

        return $statements;
    }

    /**
     * Generate a default value as an Expr.
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     *
     * @return Expr
     */
    protected function getDefaultAsExpr($parameter)
    {
        return $this->parser->parse('<?php ' . var_export($parameter->getDefault(), true) . ';')[0];
    }

    /**
     * {@inheritdoc}
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     */
    public function generateDocParameter($parameter, Context $context, $reference)
    {
        return sprintf('%s $%s %s', $this->convertParameterType($parameter->getType()), Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    /**
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     *
     * @return string
     */
    public function generateQueryDocParameter($parameter)
    {
        return sprintf('@var %s $%s %s', $this->convertParameterType($parameter->getType()), $parameter->getName(), $parameter->getDescription() ?: '');
    }

    public function convertParameterType($type)
    {
        $convertArray = [
            'string' => 'string',
            'number' => 'float',
            'boolean' => 'bool',
            'integer' => 'int',
            'array' => 'array',
            'file' => '\Psr\Http\Message\StreamInterface',
        ];

        return $convertArray[$type];
    }
}
