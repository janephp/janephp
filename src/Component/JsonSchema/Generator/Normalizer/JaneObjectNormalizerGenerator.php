<?php

namespace Jane\Component\JsonSchema\Generator\Normalizer;

use PhpParser\Modifiers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\MatchArm;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Node\UnionType;

trait JaneObjectNormalizerGenerator
{
    protected function createBaseNormalizerSupportsDenormalizationMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('supportsDenormalization', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('bool'),
            'params' => [
                new Param(new Expr\Variable('data'), type: new Identifier('mixed')),
                new Param(new Expr\Variable('type'), type: new Identifier('string')),
                new Param(
                    new Expr\Variable('format'),
                    new Expr\ConstFetch(new Name('null')),
                    new Identifier('?string')
                ),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => [new Stmt\Return_(new Expr\FuncCall(new Name('array_key_exists'), [
                new Arg(new Expr\Variable('type')),
                new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers')),
            ]))],
        ]);
    }

    protected function createBaseNormalizerSupportsNormalizationMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('supportsNormalization', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('bool'),
            'params' => [
                new Param(new Expr\Variable('data'), type: new Identifier('mixed')),
                new Param(
                    new Expr\Variable('format'),
                    new Expr\ConstFetch(new Name('null')),
                    new Identifier('?string')
                ),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => [new Stmt\Return_(
                new Expr\BinaryOp\BooleanAnd(
                    new Expr\FuncCall(new Name('is_object'), [new Arg(new Expr\Variable('data'))]),
                    new Expr\FuncCall(new Name('array_key_exists'), [
                        new Arg(new Expr\FuncCall(new Name('get_class'), [new Arg(new Expr\Variable('data'))])),
                        new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers')),
                    ])
                ))],
        ]);
    }

    protected function createBaseNormalizerNormalizeMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('normalize', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new UnionType([
                new Identifier('array'), new Identifier('string'), new Identifier('int'), new Identifier('float'), new Identifier('bool'), new Name('\ArrayObject'), new Identifier('null'), ]),
            'params' => [
                new Param(new Expr\Variable('data'), type: new Identifier('mixed')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new Identifier('?string')),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => [
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('normalizerClass'),
                    new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers'),
                        new Expr\FuncCall(new Name('get_class'), [new Arg(new Expr\Variable('data'))])
                    )
                )),
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('normalizer'),
                    new Expr\MethodCall(new Expr\Variable('this'), 'getNormalizer', [
                        new Arg(new Expr\Variable('normalizerClass')),
                    ])
                )),
                new Stmt\Return_(new Expr\MethodCall(new Expr\Variable('normalizer'), 'normalize', [
                    new Arg(new Expr\Variable('data')),
                    new Arg(new Expr\Variable('format')),
                    new Arg(new Expr\Variable('context')),
                ])),
            ],
        ], [
            'comments' => [],
        ]);
    }

    protected function createBaseNormalizerDenormalizeMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('denormalize', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('mixed'),
            'params' => [
                new Param(new Expr\Variable('data'), type: new Identifier('mixed')),
                new Param(new Expr\Variable('type'), type: new Identifier('string')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new Identifier('?string')),
                new Param(new Expr\Variable('context'), new Expr\Array_(), new Identifier('array')),
            ],
            'stmts' => [
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('denormalizerClass'),
                    new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers'),
                        new Expr\Variable('type')
                    )
                )),
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('denormalizer'),
                    new Expr\MethodCall(new Expr\Variable('this'), 'getNormalizer', [
                        new Arg(new Expr\Variable('denormalizerClass')),
                    ])
                )),
                new Stmt\Return_(new Expr\MethodCall(new Expr\Variable('denormalizer'), 'denormalize', [
                    new Arg(new Expr\Variable('data')),
                    new Arg(new Expr\Variable('type')),
                    new Arg(new Expr\Variable('format')),
                    new Arg(new Expr\Variable('context')),
                ])),
            ],
        ], [
            'comments' => [],
        ]);
    }

    protected function createBaseNormalizerGetNormalizer(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getNormalizer', [
            'flags' => Modifiers::PRIVATE,
            'params' => [
                new Param(new Expr\Variable('normalizerClass'), null, new Identifier('string')),
            ],
            'stmts' => [
                new Stmt\Return_(new Expr\BinaryOp\Coalesce(
                    new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizersCache'),
                        new Expr\Variable('normalizerClass')
                    ),
                    new Expr\MethodCall(new Expr\Variable('this'), 'initNormalizer', [
                        new Arg(new Expr\Variable('normalizerClass')),
                    ])
                )),
            ],
        ]);
    }

    protected function createBaseNormalizerInitNormalizerMethod(array $normalizers): Stmt\ClassMethod
    {
        $normalizerClasses = array_values(array_unique($normalizers));
        $statements = [
            new Stmt\Expression(new Expr\Assign(
                new Expr\Variable('normalizer'),
                new Expr\Match_(new Expr\Variable('normalizerClass'), array_merge(
                    array_map(
                        function (string $normalizerFqcn): MatchArm {
                            return new MatchArm(
                                [new Expr\ClassConstFetch(new Name\FullyQualified($normalizerFqcn), new Identifier('class'))],
                                new Expr\New_(new Name\FullyQualified($normalizerFqcn))
                            );
                        },
                        $normalizerClasses
                    ),
                    [
                        new MatchArm(
                            null,
                            new Expr\Throw_(new Expr\New_(new Name\FullyQualified('InvalidArgumentException'), [
                                new Arg(new Expr\BinaryOp\Concat(
                                    new Scalar\String_('Unknown normalizer class: '),
                                    new Expr\Variable('normalizerClass')
                                )),
                            ]))
                        ),
                    ]
                ))
            )
            ),
        ];
        if ($this->useReference) {
            $statements[] = new Stmt\If_(new Expr\Instanceof_(
                new Expr\Variable('normalizer'),
                new Name\FullyQualified('Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface')
            ), ['stmts' => [
                new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('normalizer'), 'setNormalizer', [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizer')),
                ])),
            ]]);
            $statements[] = new Stmt\If_(new Expr\Instanceof_(
                new Expr\Variable('normalizer'),
                new Name\FullyQualified('Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface')
            ), ['stmts' => [
                new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('normalizer'), 'setDenormalizer', [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'denormalizer')),
                ])),
            ]]);
        } else {
            $statements[] = new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('normalizer'), 'setNormalizer', [
                new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizer')),
            ]));
            $statements[] = new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('normalizer'), 'setDenormalizer', [
                new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'denormalizer')),
            ]));
        }
        $statements[] = new Stmt\Expression(new Expr\Assign(
            new Expr\ArrayDimFetch(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizersCache'),
                new Expr\Variable('normalizerClass')
            ),
            new Expr\Variable('normalizer')
        ));
        $statements[] = new Stmt\Return_(new Expr\Variable('normalizer'));

        return new Stmt\ClassMethod('initNormalizer', [
            'flags' => Modifiers::PRIVATE,
            'params' => [
                new Param(new Expr\Variable('normalizerClass'), null, new Identifier('string')),
            ],
            'stmts' => $statements,
        ]);
    }
}
