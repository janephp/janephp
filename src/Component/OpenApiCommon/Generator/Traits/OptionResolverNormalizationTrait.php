<?php

namespace Jane\Component\OpenApiCommon\Generator\Traits;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Registry\Registry;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

trait OptionResolverNormalizationTrait
{
    private function customOptionResolvers(OperationGuess $operation, Context $context): array
    {
        /** @var Registry $registry */
        $registry = $context->getRegistry();
        $customQueryResolver = $registry->getCustomQueryResolver();
        $genericCustomQueryResolver = $operationCustomQueryResolver = [];
        if (\array_key_exists('__type', $customQueryResolver)) {
            $genericCustomQueryResolver = $customQueryResolver['__type'];
        }
        if (\array_key_exists($operation->getPath(), $customQueryResolver)
            && \array_key_exists(mb_strtolower($operation->getMethod()), $customQueryResolver[$operation->getPath()])) {
            $operationCustomQueryResolver = $customQueryResolver[$operation->getPath()][mb_strtolower($operation->getMethod())];
        }

        return [$genericCustomQueryResolver, $operationCustomQueryResolver];
    }

    private function generateOptionResolverNormalizationStatement(string $optionName, string $class): Node\Stmt\Expression
    {
        return new Node\Stmt\Expression(
            new Expr\MethodCall(
                new Expr\Variable('optionsResolver'),
                'setNormalizer',
                [
                    new Node\Arg(new Scalar\String_($optionName)),
                    new Node\Arg(new Expr\StaticCall(new Node\Name('\\Closure'), 'fromCallable', [
                        new Node\Arg(new Expr\Array_([
                            new Expr\ArrayItem(new Expr\New_(new Node\Name($class))),
                            new Expr\ArrayItem(new Scalar\String_('__invoke')),
                        ])),
                    ])),
                ]
            )
        );
    }
}
