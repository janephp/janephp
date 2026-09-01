<?php

namespace Jane\Component\OpenApiCommon\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApiCommon\Guesser\GuessClass;
use Jane\Component\OpenApiCommon\Naming\XNamespaceResolver;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

abstract class AbstractBodyContentGenerator implements RequestBodyContentGeneratorInterface
{
    protected GuessClass $guessClass;

    private readonly string $schemaClass;

    public const PHP_TYPE_MIXED = 'mixed';

    public function __construct(DenormalizerInterface $denormalizer, string $schemaClass)
    {
        $this->schemaClass = $schemaClass;
        $this->guessClass = new GuessClass($schemaClass, $denormalizer);
    }

    public function getTypes($content, string $reference, Context $context): array
    {
        $schema = ($content->schema ?? null);
        $classGuess = $this->guessClass->guessClass($schema, $reference . '/schema', $context->getRegistry(), $array);

        if ($classGuess === null) {
            [$type, $format] = $this->schemaTypeAndFormat($schema);
            $types = $this->schemaTypeToPHP($type, $format);

            if ($array) {
                $types = array_map(function ($type) {
                    return $type . '[]';
                }, $types);
            }

            return [$types, $array];
        }

        $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model' . XNamespaceResolver::subNamespaceSuffix($classGuess) . '\\' . $classGuess->getName();

        if ($array) {
            $class .= '[]';
        }

        return [['\\' . $class], $array];
    }

    public function getTypeCondition($content, string $reference, Context $context): Node
    {
        $schema = ($content->schema ?? null);
        $classGuess = $this->guessClass->guessClass($schema, $reference . '/schema', $context->getRegistry(), $array);

        if (null === $classGuess) {
            [$type, $format] = $this->schemaTypeAndFormat($schema);

            return $this->typeToCondition($type, $format, new Expr\PropertyFetch(new Expr\Variable('this'), 'body'));
        }

        $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model' . XNamespaceResolver::subNamespaceSuffix($classGuess) . '\\' . $classGuess->getName();

        if ($array) {
            return new Expr\BinaryOp\LogicalAnd(
                new Expr\BinaryOp\LogicalAnd(
                    new Expr\FuncCall(new Name('is_array'), [new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'))]),
                    new Expr\FuncCall(new Name('isset'), [new Arg(new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'body'),
                        new Expr\ConstFetch(new Name('0'))
                    ))])
                ),
                new Expr\Instanceof_(
                    new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'body'),
                        new Expr\ConstFetch(new Name('0'))
                    ),
                    new Name('\\' . $class)
                )
            );
        }

        return new Expr\Instanceof_(
            new Expr\PropertyFetch(new Expr\Variable('this'), 'body'),
            new Name('\\' . $class)
        );
    }

    /**
     * Read the (possibly union / array) type and format from a schema object.
     *
     * Works for the OpenAPI 3.0 Schema model (scalar type property) and the
     * JSON Schema based 3.1 model (type possibly returning an array).
     *
     * @return array{0: ?string, 1: ?string}
     */
    private function schemaTypeAndFormat($schema): array
    {
        if (!$schema instanceof $this->schemaClass) {
            return [null, null];
        }

        $type = ($schema->type ?? null);
        if (\is_array($type)) {
            $type = $type[0] ?? null;
        }

        $format = ($schema->format ?? null);

        return [$type, $format];
    }

    private function schemaTypeToPHP(?string $type, ?string $format = null): array
    {
        if (null === $format) {
            $format = 'default';
        }

        $convertArray = [
            'string' => [
                'default' => ['string'],
                'binary' => ['string', 'resource'],
            ],
            'number' => [
                'default' => ['float'],
            ],
            'boolean' => [
                'default' => ['bool'],
            ],
            'integer' => [
                'default' => ['int'],
            ],
            'array' => [
                'default' => ['array'],
            ],
            'object' => [
                'default' => ['\\stdClass'],
            ],
            'file' => [
                'default' => ['string', 'resource'],
            ],
        ];

        if ($type === null || !isset($convertArray[$type]) || !isset($convertArray[$type][$format])) {
            return [self::PHP_TYPE_MIXED];
        }

        return $convertArray[$type][$format];
    }

    private function typeToCondition(?string $type, ?string $format, Expr $fetch): Expr
    {
        if (null === $format) {
            $format = 'default';
        }

        $inputArg = new Arg($fetch);

        $convertArray = [
            'string' => [
                'default' => new Expr\FuncCall(new Name('is_string'), [$inputArg]),
                'binary' => new Expr\BinaryOp\LogicalOr(
                    new Expr\FuncCall(new Name('is_string'), [$inputArg]),
                    new Expr\FuncCall(new Name('is_resource'), [$inputArg])
                ),
            ],
            'number' => [
                'default' => new Expr\FuncCall(new Name('is_float'), [$inputArg]),
            ],
            'boolean' => [
                'default' => new Expr\FuncCall(new Name('is_bool'), [$inputArg]),
            ],
            'integer' => [
                'default' => new Expr\FuncCall(new Name('is_int'), [$inputArg]),
            ],
            'array' => [
                'default' => new Expr\FuncCall(new Name('is_array'), [$inputArg]),
            ],
            'object' => [
                'default' => new Expr\Instanceof_($fetch, new Name('\\stdClass')),
            ],
            'file' => [
                'default' => new Expr\BinaryOp\LogicalOr(
                    new Expr\FuncCall(new Name('is_string'), [$inputArg]),
                    new Expr\FuncCall(new Name('is_resource'), [$inputArg])
                ),
            ],
        ];

        if ($type === null || !isset($convertArray[$type]) || !isset($convertArray[$type][$format])) {
            return new Expr\FuncCall(new Name('isset'), [$inputArg]);
        }

        return $convertArray[$type][$format];
    }
}
