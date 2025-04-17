<?php

namespace Jane\Component\JsonSchema\Generator\Normalizer;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\UnionType;

trait JaneObjectNormalizerGenerator
{
    protected function createBaseNormalizerSupportsDenormalizationMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('supportsDenormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
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
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
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
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
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
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
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
            'type' => Stmt\Class_::MODIFIER_PRIVATE,
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

    protected function createBaseNormalizerInitNormalizerMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('initNormalizer', [
            'type' => Stmt\Class_::MODIFIER_PRIVATE,
            'params' => [
                new Param(new Expr\Variable('normalizerClass'), null, new Identifier('string')),
            ],
            'stmts' => [
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('normalizer'),
                    new Expr\New_(new Expr\Variable('normalizerClass'))
                )),
                new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('normalizer'), 'setNormalizer', [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizer')),
                ])),
                new Stmt\Expression(new Expr\MethodCall(new Expr\Variable('normalizer'), 'setDenormalizer', [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'denormalizer')),
                ])),
                new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizersCache'),
                        new Expr\Variable('normalizerClass')
                    ),
                    new Expr\Variable('normalizer')
                )),
                new Stmt\Return_(new Expr\Variable('normalizer')),
            ],
        ]);
    }
}
