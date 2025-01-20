<?php

namespace Jane\Component\OpenApiCommon\Generator\Normalizer;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Normalizer\NormalizerGenerator as JsonSchemaNormalizerGenerator;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait NormalizerGenerator
{
    use JsonSchemaNormalizerGenerator {
        normalizeMethodStatements as jsonSchemaNormalizeMethodStatements;
    }

    protected function normalizeMethodStatements(Expr\Variable $dataVariable, ClassGuess $classGuess, Context $context): array
    {
        $statements = $this->jsonSchemaNormalizeMethodStatements($dataVariable, $classGuess, $context);

        if ($classGuess instanceof ParentClass) {
            foreach ($classGuess->getChildEntryKeys() as $discriminatorValue) {
                $objectVar = new Expr\Variable('data');
                $propertyVar = new Expr\MethodCall($objectVar, $this->getNaming()->getPrefixedMethodName('get', $classGuess->getDiscriminator()));

                $statements[] = new Stmt\If_(
                    new Expr\BinaryOp\LogicalAnd(
                        new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar),
                        new Expr\BinaryOp\Identical(new Scalar\String_($discriminatorValue), $propertyVar)
                    ),
                    [
                        'stmts' => [
                            new Stmt\Return_(new Expr\MethodCall(
                                new Expr\PropertyFetch(
                                    new Expr\Variable('this'),
                                    'normalizer'
                                ),
                                'normalize',
                                [
                                    new Arg($objectVar),
                                    new Arg(new Expr\Variable('format')),
                                    new Arg(new Expr\Variable('context')),
                                ]
                            )),
                        ],
                    ]
                );
            }
        }

        return $statements;
    }

    /**
     * We want stricly same class for OpenApi Normalizers since we can have inheritance and this could avoid
     * normalization to use child classes. This is why we use `get_class` and not `instanceof`.
     */
    protected function createSupportsNormalizationMethod(string $modelFqdn): Stmt\ClassMethod
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
            'stmts' => [
                new Stmt\Return_(
                    new Expr\BinaryOp\BooleanAnd(
                        new Expr\FuncCall(new Name('is_object'), [new Arg(new Expr\Variable('data'))]),
                        new Expr\BinaryOp\Identical(
                            new Expr\FuncCall(new Name('get_class'), [new Arg(new Expr\Variable('data'))]),
                            new Expr\ClassConstFetch(new Name\FullyQualified($modelFqdn), new Identifier('class'))
                        )
                    )
                ),
            ],
        ]);
    }
}
