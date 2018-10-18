<?php

namespace Jane\OpenApi\Generator\RequestBodyContent;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi\Generator\RequestBodyContentGeneratorInterface;
use Jane\OpenApi\JsonSchema\Version3\Model\Schema;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

abstract class AbstractBodyContentGenerator implements RequestBodyContentGeneratorInterface
{
    private $denormalizer;

    public function __construct(DenormalizerInterface $denormalizer)
    {
        $this->denormalizer = $denormalizer;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeCondition($content, $reference, Context $context)
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

    protected function guessClass($schema, string $reference, Context $context)
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

    /**
     * @param Reference $reference
     * @param $class
     *
     * @return mixed
     */
    private function resolve(Reference $reference, $class)
    {
        $result = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }

    private function typeToCondition($type, $format, $fetch)
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
