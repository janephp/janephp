<?php

namespace Jane\OpenApi\Generator\Normalizer;

use PhpParser\Node\Param;
use Jane\JsonSchema\Generator\Normalizer\NormalizerGenerator as JsonSchemaNormalizerGenerator;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\OpenApi\Guesser\Guess\MultipleClass;
use function Jane\parserVariable;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use Jane\JsonSchema\Generator\Context\Context;

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
                new Param(parserVariable('data')),
                new Param(parserVariable('format'), new Expr\ConstFetch(new Name('null'))),
            ],
            'stmts' => [
                new Stmt\Return_(new Expr\BinaryOp\Identical(
                    new Expr\ClassConstFetch(new Expr\Variable('data'), 'class'),
                    new Scalar\String_($modelFqdn)
                )),
            ],
        ]);
    }
}
