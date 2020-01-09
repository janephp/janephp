<?php

namespace Jane\OpenApi\Generator\RequestBodyContent;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Generator\GeneratorResolveTrait;
use Jane\OpenApi\Generator\RequestBodyContentGeneratorInterface;
use Jane\OpenApi\JsonSchema\Model\MediaType;
use Jane\OpenApi\JsonSchema\Model\Schema;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

abstract class AbstractBodyContentGenerator implements RequestBodyContentGeneratorInterface
{
    use GeneratorResolveTrait;

    public const PHP_TYPE_MIXED = 'mixed';

    public function __construct(DenormalizerInterface $denormalizer)
    {
        $this->denormalizer = $denormalizer;
    }

    public function getTypes(MediaType $content, string $reference, Context $context): array
    {
        [$classGuess, $array, $schema] = $this->guessClass($content->getSchema(), $reference . '/schema', $context);

        if ($classGuess === null) {
            $types = $this->schemaTypeToPHP($schema->getType(), $schema->getFormat());

            if ($array) {
                $types = array_map(function ($type) {
                    return $type . '[]';
                }, $types);
            }

            return [$types, $array];
        }

        $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model\\' . $classGuess->getName();

        if ($array) {
            $class .= '[]';
        }

        return [['\\' . $class], $array];
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeCondition(MediaType $content, string $reference, Context $context): Node
    {
        [$classGuess, $array, $schema] = $this->guessClass($content->getSchema(), $reference . '/schema', $context);

        if ($classGuess === null) {
            if ($array) {
                return new Expr\BinaryOp\LogicalAnd(
                    new Expr\BinaryOp\LogicalAnd(
                        new Expr\FuncCall(new Name('is_array'), [new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'body'))]),
                        new Expr\FuncCall(new Name('isset'), [new Arg(new Expr\ArrayDimFetch(
                            new Expr\PropertyFetch(new Expr\Variable('this'), 'body'),
                            new Expr\ConstFetch(new Name('0'))
                        ))])
                    ),
                    $this->typeToCondition(
                        $schema->getType(),
                        $schema->getFormat(),
                        new Expr\ArrayDimFetch(
                            new Expr\PropertyFetch(new Expr\Variable('this'), 'body'),
                            new Expr\ConstFetch(new Name('0'))
                        )
                    )
                );
            }

            return $this->typeToCondition($schema->getType(), $schema->getFormat(), new Expr\PropertyFetch(new Expr\Variable('this'), 'body'));
        }

        $class = $context->getRegistry()->getSchema($classGuess->getReference())->getNamespace() . '\\Model\\' . $classGuess->getName();

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

    protected function guessClass($schema, string $reference, Context $context): array
    {
        $jsonReference = $reference;
        $array = false;

        if ($schema instanceof Reference) {
            [$jsonReference, $schema] = $this->resolve($schema, Schema::class);
        }

        if ($schema instanceof Schema && 'array' === $schema->getType()) {
            $array = true;
            $jsonReference .= '/items';
            $items = $schema->getItems();

            if ($items instanceof Reference) {
                [$jsonReference, $_] = $this->resolve($items, Schema::class);
            }
        }

        $classGuess = $context->getRegistry()->getClass($jsonReference);

        return [$classGuess, $array, $schema];
    }

    private function schemaTypeToPHP(?string $type, ?string $format = null): array
    {
        if (null === $format) {
            $format = 'default';
        }

        $convertArray = [
            'string' => [
                'default' => ['string'],
                'binary' => ['string', 'resource', '\\' . StreamInterface::class],
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
                'default' => ['string', 'resource', '\\' . StreamInterface::class],
            ],
        ];

        if (!isset($convertArray[$type]) || !isset($convertArray[$type][$format])) {
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
                    new Expr\BinaryOp\LogicalOr(
                        new Expr\FuncCall(new Name('is_string'), [$inputArg]),
                        new Expr\FuncCall(new Name('is_resource'), [$inputArg])
                    ),
                    new Expr\Instanceof_($fetch, new Name('\\' . StreamInterface::class))
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
                    new Expr\BinaryOp\LogicalOr(
                        new Expr\FuncCall(new Name('is_string'), [$inputArg]),
                        new Expr\FuncCall(new Name('is_resource'), [$inputArg])
                    ),
                    new Expr\Instanceof_($fetch, new Name('\\' . StreamInterface::class))
                ),
            ],
        ];

        if (!isset($convertArray[$type]) || !isset($convertArray[$type][$format])) {
            return new Expr\FuncCall(new Name('isset'), [$inputArg]);
        }

        return $convertArray[$type][$format];
    }
}
