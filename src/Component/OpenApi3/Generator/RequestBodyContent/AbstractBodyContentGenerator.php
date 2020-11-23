<?php

namespace Jane\Component\OpenApi3\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApi3\Generator\RequestBodyContentGeneratorInterface;
use Jane\Component\OpenApi3\Guesser\GuessClass;
use Jane\Component\OpenApi3\JsonSchema\Model\MediaType;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

abstract class AbstractBodyContentGenerator implements RequestBodyContentGeneratorInterface
{
    /** @var GuessClass */
    protected $guessClass;

    public const PHP_TYPE_MIXED = 'mixed';

    public function __construct(DenormalizerInterface $denormalizer)
    {
        $this->guessClass = new GuessClass(Schema::class, $denormalizer);
    }

    public function getTypes(MediaType $content, string $reference, Context $context): array
    {
        $schema = $content->getSchema();
        $classGuess = $this->guessClass->guessClass($schema, $reference . '/schema', $context->getRegistry(), $array);

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
        $schema = $content->getSchema();
        $classGuess = $this->guessClass->guessClass($schema, $reference . '/schema', $context->getRegistry(), $array);

        if (null === $classGuess) {
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
