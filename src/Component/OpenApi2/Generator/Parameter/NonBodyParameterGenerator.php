<?php

namespace Jane\Component\OpenApi2\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Jane\Component\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use Jane\Component\OpenApiCommon\Generator\Traits\OpenApiNumberTypeResolverTrait;
use Jane\Component\OpenApiCommon\Generator\Traits\OptionResolverNormalizationTrait;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use Psr\Http\Message\StreamInterface;

class NonBodyParameterGenerator extends ParameterGenerator
{
    use OpenApiNumberTypeResolverTrait;
    use OptionResolverNormalizationTrait;

    /**
     * @param PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): Node\Param
    {
        $name = $this->getInflector()->camelize($parameter->getName());
        $methodParameter = new Node\Param(new Expr\Variable($name));

        if (!$parameter->getRequired() || null !== $parameter->getDefault()) {
            $methodParameter->default = $this->getDefaultAsExpr($parameter);
        }

        $types = $this->convertParameterType($parameter);

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
            $parameterName = $parameter->getName();
            if (str_contains($parameterName, '[]')) {
                $parameterName = substr($parameterName, 0, -2);
            }

            if (!\array_key_exists($parameterName, $defined)) {
                $defined[$parameterName] = new Expr\ArrayItem(new Scalar\String_($parameterName));
            }

            if ($parameter->getRequired() && null === $parameter->getDefault()) {
                $required[] = new Expr\ArrayItem(new Scalar\String_($parameterName));
            }

            $matchGenericResolver = null;
            if ($parameter->getType()) {
                $types = [];

                foreach ($this->convertParameterType($parameter) as $typeString) {
                    if (\in_array($typeString, $genericResolverKeys)) {
                        $matchGenericResolver = $typeString;
                    }

                    $types[] = new Expr\ArrayItem(new Scalar\String_($typeString));
                }

                $allowedTypes[] = new Stmt\Expression(new Expr\MethodCall($optionsResolverVariable, 'addAllowedTypes', [
                    new Node\Arg(new Scalar\String_($parameterName)),
                    new Node\Arg(new Expr\Array_($types)),
                ]));
            }

            if (!$parameter->getRequired() && null !== $parameter->getDefault()) {
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
     * @param PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        $type = implode('|', $this->convertParameterType($parameter));
        $description = array_map(rtrim(...), explode("\n", $parameter->getDescription() ?: ''));

        $param = [rtrim(\sprintf(' * @param %s $%s %s', $type, $this->getInflector()->camelize($parameter->getName()), array_shift($description)))];
        foreach ($description as $line) {
            $param[] = \sprintf(' * %s', $line);
        }

        return implode("\n", $param);
    }

    public function generateOptionDocParameter(PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter): string
    {
        $type = implode('|', $this->convertParameterType($parameter));
        $description = array_map(rtrim(...), explode("\n", $parameter->getDescription() ?: ''));

        $var = [rtrim(\sprintf(' *     @var %s $%s %s', $type, $parameter->getName(), array_shift($description)))];
        foreach ($description as $line) {
            $var[] = \sprintf(' *     %s', $line);
        }

        return implode("\n", $var);
    }

    /**
     * Generate a default value as an Expr.
     */
    private function getDefaultAsExpr(PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter): Expr
    {
        /** @var Expr|Stmt\Expression $expr */
        $expr = $this->parser->parse('<?php ' . var_export($parameter->getDefault(), true) . ';')[0];

        if ($expr instanceof Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
    }

    private function convertParameterType(PathParameterSubSchema|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema $parameter): array
    {
        $type = $parameter->getType();
        $convertArray = [
            'string' => ['string'],
            'number' => [$this->isNumberFloat(
                $parameter->getFormat(),
                $parameter->getDefault(),
                $parameter->getMinimum(),
                $parameter->getMaximum(),
                $parameter->getMultipleOf(),
                $parameter->getEnum()
            ) ? 'float' : 'int'],
            'boolean' => ['bool'],
            'integer' => ['int'],
            'array' => ['array'],
            'file' => ['string', 'resource', '\\' . StreamInterface::class],
        ];

        return $convertArray[$type];
    }
}
