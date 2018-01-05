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
use Psr\Http\Message\StreamInterface;

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

        $types = $this->convertParameterType($parameter->getType());

        if (\count($types) === 1) {
            $methodParameter->type = $types[0];
        }

        return $methodParameter;
    }

    abstract public function generateInputParamStatements($parameter, Expr $inputParamVariable): array;

    /**
     * {@inheritdoc}
     *
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     */
    protected function generateInputParamArguments($parameter): array
    {
        $arguments = [
            new Node\Arg(new Scalar\String_($parameter->getName())),
        ];

        if ($parameter->getRequired() && null === $parameter->getDefault()) {
            $arguments[] = new Node\Arg(new Expr\ConstFetch(new Node\Name('true')));
        } else {
            $arguments[] = new Node\Arg(new Expr\ConstFetch(new Node\Name('false')));
        }

        if ($parameter->getType()) {
            $types = [];

            foreach ($this->convertParameterType($parameter->getType()) as $typeString) {
                $types[] = new Scalar\String_($typeString);
            }

            $arguments[] = new Node\Arg(new Expr\Array_($types));
        } else {
            $arguments[] = new Node\Arg(new Expr\Array_());
        }

        if (!$parameter->getRequired() && null !== $parameter->getDefault()) {
            $arguments[] = new Node\Arg($this->getDefaultAsExpr($parameter));
        }

        return $arguments;
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
        $type = implode('|', $this->convertParameterType($parameter->getType()));

        return sprintf('%s $%s %s', $type, Inflector::camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    /**
     * @param $parameter PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema
     *
     * @return string
     */
    public function generateInputDocParameter($parameter)
    {
        $type = implode('|', $this->convertParameterType($parameter->getType()));

        return sprintf('@var %s $%s %s', $type, $parameter->getName(), $parameter->getDescription() ?: '');
    }

    public function convertParameterType($type)
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
