<?php

namespace Jane\OpenApi\Generator\Normalizer;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Normalizer\DenormalizerGenerator as JsonSchemaDenormalizerGenerator;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\OpenApi\Guesser\Guess\MultipleClass;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

trait DenormalizerGenerator
{
    use JsonSchemaDenormalizerGenerator {
        denormalizeMethodStatements as jsonSchemaDenormalizeMethodStatements;
    }

    protected function denormalizeMethodStatements(ClassGuess $classGuess, Context $context): array
    {
        $statements = $this->jsonSchemaDenormalizeMethodStatements($classGuess, $context);

        if ($classGuess instanceof MultipleClass) {
            foreach ($classGuess->getReferences() as $name => $reference) {
                $statements[] = new Stmt\If_(
                    new Expr\BinaryOp\LogicalAnd(
                        new Expr\FuncCall(new Name('property_exists'), [
                            new Arg(new Expr\Variable('data')),
                            new Arg(new Scalar\String_($classGuess->getDiscriminator())),
                        ]),
                        new Expr\BinaryOp\Identical(
                            new Scalar\String_($name),
                            new Expr\PropertyFetch(new Expr\Variable('data'), sprintf("{'%s'}", $classGuess->getDiscriminator()))
                        )
                    ),
                    [
                        'stmts' => [
                            new Stmt\Return_(new Expr\MethodCall(
                                new Expr\PropertyFetch(
                                    new Expr\Variable('this'),
                                    'denormalizer'
                                ),
                                'denormalize',
                                [
                                    new Expr\Variable('data'),
                                    new Scalar\String_(sprintf('%s\\Model\\%s', $context->getCurrentSchema()->getNamespace(), $name)),
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
}
