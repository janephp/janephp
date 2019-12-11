<?php

namespace Jane\OpenApi2\Generator\Normalizer;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Normalizer\NormalizerGenerator as JsonSchemaNormalizerGenerator;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\OpenApiCommon\Guesser\Guess\MultipleClass;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Node;

trait NormalizerGenerator
{
    use JsonSchemaNormalizerGenerator {
        normalizeMethodStatements as jsonSchemaNormalizeMethodStatements;
    }

    protected function normalizeMethodStatements(Expr\Variable $dataVariable, ClassGuess $classGuess, Context $context): array
    {
        $statements = $this->jsonSchemaNormalizeMethodStatements($dataVariable, $classGuess, $context);

        if ($classGuess instanceof MultipleClass) {
            foreach ($classGuess->getReferences() as $name => $reference) {
                $objectVar = new Expr\Variable('object');
                $propertyVar = new Expr\MethodCall($objectVar, $this->getNaming()->getPrefixedMethodName('get', $classGuess->getDiscriminator()));

                $statements[] = new Stmt\If_(
                    new Expr\BinaryOp\LogicalAnd(
                        new Expr\BinaryOp\NotIdentical(new Expr\ConstFetch(new Name('null')), $propertyVar),
                        new Expr\BinaryOp\Identical(new Scalar\String_($name), $propertyVar)
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
                                    $objectVar,
                                    new Expr\Variable('format'),
                                    new Expr\Variable('context'),
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
     * normalization to use child classes.
     */
    protected function createSupportsNormalizationMethod($modelFqdn)
    {
        return new Stmt\ClassMethod('supportsNormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Node\Expr\Variable('data')),
                new Param(new Node\Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
            ],
            'stmts' => [
                new Stmt\Return_(new Expr\BinaryOp\Identical(
                    new Expr\FuncCall(new Name('get_class'), [new Expr\Variable('data')]),
                    new Scalar\String_($modelFqdn)
                )),
            ],
        ]);
    }
}
