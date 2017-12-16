<?php

namespace Jane\OpenApi\Generator;

use Amp\Artax\DefaultClient;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApiRuntime\Client\AmpArtaxResource;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class AmpArtaxClientGenerator extends ClientGenerator
{
    protected function getSuffix(): string
    {
        return 'Async';
    }

    protected function createResourceClass(string $name): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'extends' => new Node\Name\FullyQualified(AmpArtaxResource::class)
        ]);
    }

    protected function getFactoryMethod(Context $context): Stmt
    {
        return new Stmt\ClassMethod(
            'create', [
                'flags' => Stmt\Class_::MODIFIER_STATIC | Stmt\Class_::MODIFIER_PUBLIC,
                'params' => [
                    new Node\Param('httpClient', new Expr\ConstFetch(new Name('null')))
                ],
                'stmts' => [
                    new Stmt\If_(
                        new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), new Expr\Variable('httpClient')),
                        [
                            'stmts' => [
                                new Expr\Assign(
                                    new Expr\Variable('httpClient'),
                                    new Expr\New_(new Name\FullyQualified(DefaultClient::class))
                                )
                            ]
                        ]
                    ),
                    new Expr\Assign(
                        new Expr\Variable('serializer'),
                        new Expr\New_(
                            new Name\FullyQualified(Serializer::class),
                            [
                                new Node\Arg(
                                    new Expr\StaticCall(
                                        new Name('\\' . $context->getCurrentSchema()->getNamespace() . '\\Normalizer\\NormalizerFactory'),
                                        'create'
                                    )
                                ),
                                new Node\Arg(
                                    new Expr\Array_([
                                        new Expr\ArrayItem(
                                            new Expr\New_(new Name\FullyQualified(JsonEncoder::class), [
                                                new Node\Arg(new Expr\New_(new Name\FullyQualified(JsonEncode::class))),
                                                new Node\Arg(new Expr\New_(new Name\FullyQualified(JsonDecode::class))),
                                            ])
                                        )
                                    ])
                                )
                            ]
                        )
                    ),
                    new Stmt\Return_(
                        new Expr\New_(
                            new Name('self'), [
                                new Node\Arg(new Expr\Variable('httpClient')),
                                new Node\Arg(new Expr\Variable('serializer')),
                            ]
                        )
                    ),
                ]
            ]
        );
    }
}
