<?php

namespace Jane\Component\JsonSchema\Generator\Normalizer;

use PhpParser\Comment\Doc;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;

trait JaneObjectNormalizerGenerator
{
    protected function createBaseNormalizerSupportsDenormalizationMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('supportsDenormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('data')),
                new Param(new Expr\Variable('type')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
            ],
            'stmts' => [new Stmt\Return_(new Expr\FuncCall(new Name('array_key_exists'), [
                new Arg(new Expr\Variable('type')),
                new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers')),
            ]))],
        ], [
            'comments' => [new Doc(<<<EOD
/**
 * @return bool
 */
EOD
            )],
        ]);
    }

    protected function createBaseNormalizerSupportsNormalizationMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('supportsNormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('data')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
            ],
            'stmts' => [new Stmt\Return_(
                new Expr\BinaryOp\BooleanAnd(
                    new Expr\FuncCall(new Name('is_object'), [new Arg(new Expr\Variable('data'))]),
                    new Expr\FuncCall(new Name('array_key_exists'), [
                        new Arg(new Expr\FuncCall(new Name('get_class'), [new Arg(new Expr\Variable('data'))])),
                        new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers')),
                    ])
                ))],
        ], [
            'comments' => [new Doc(<<<EOD
/**
 * @return bool
 */
EOD
            )],
        ]);
    }

    protected function createBaseNormalizerNormalizeMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('normalize', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('object')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
                new Param(new Expr\Variable('context'), new Expr\Array_(), 'array'),
            ],
            'stmts' => [
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('normalizerClass'),
                    new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers'),
                        new Expr\FuncCall(new Name('get_class'), [new Arg(new Expr\Variable('object'))])
                    )
                )),
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('normalizer'),
                    new Expr\MethodCall(new Expr\Variable('this'), 'getNormalizer', [
                        new Arg(new Expr\Variable('normalizerClass')),
                    ])
                )),
                new Stmt\Return_(new Expr\MethodCall(new Expr\Variable('normalizer'), 'normalize', [
                    new Arg(new Expr\Variable('object')),
                    new Arg(new Expr\Variable('format')),
                    new Arg(new Expr\Variable('context')),
                ])),
            ],
        ], [
            'comments' => [new Doc(<<<EOD
/**
 * @return array|string|int|float|bool|\ArrayObject|null
 */
EOD
            )],
        ]);
    }

    protected function createBaseNormalizerDenormalizeMethod(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('denormalize', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('data')),
                new Param(new Expr\Variable('class')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
                new Param(new Expr\Variable('context'), new Expr\Array_(), 'array'),
            ],
            'stmts' => [
                new Stmt\Expression(new Expr\Assign(
                    new Expr\Variable('denormalizerClass'),
                    new Expr\ArrayDimFetch(
                        new Expr\PropertyFetch(new Expr\Variable('this'), 'normalizers'),
                        new Expr\Variable('class')
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
                    new Arg(new Expr\Variable('class')),
                    new Arg(new Expr\Variable('format')),
                    new Arg(new Expr\Variable('context')),
                ])),
            ],
        ], [
            'comments' => [new Doc(<<<EOD
/**
 * @return mixed
 */
EOD
            )],
        ]);
    }

    protected function createBaseNormalizerGetNormalizer(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getNormalizer', [
            'type' => Stmt\Class_::MODIFIER_PRIVATE,
            'params' => [
                new Param(new Expr\Variable('normalizerClass'), null, 'string'),
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
                new Param(new Expr\Variable('normalizerClass'), null, 'string'),
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
