<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment;
use PhpParser\Modifiers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;

class OperationGenerator
{
    public function __construct(
        protected EndpointGeneratorInterface $endpointGenerator,
    ) {
    }

    protected function getReturnDoc(array $returnTypes, array $throwTypes): string
    {
        $objectTypes = implode('|', $returnTypes);

        return implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return ' . ('' !== $objectTypes ? $objectTypes : 'mixed')
        ;
    }

    public function createOperation(string $name, OperationGuess $operation, Context $context): Stmt\ClassMethod
    {
        /** @var Param[] $methodParams */
        [$endpointName, $methodParams, $methodDoc, $returnTypes, $throwTypes] = $this->endpointGenerator->createEndpointClass($operation, $context);
        $endpointArgs = [];

        foreach ($methodParams as $param) {
            $endpointArgs[] = new Arg($param->var);
        }

        if (str_ends_with($methodDoc, '*/')) {
            $methodDoc = substr($methodDoc, 0, -2); // remove trailing */ from base method docs
        }

        $methodDocSplit = explode("\n", $methodDoc);
        $methodDocSplit[] = $this->getReturnDoc($returnTypes, $throwTypes);
        $methodDocSplit[] = ' */';
        $documentation = implode("\n", $methodDocSplit);

        return new Stmt\ClassMethod($name, [
            'flags' => Modifiers::PUBLIC,
            'params' => $methodParams,
            'stmts' => [
                new Stmt\Return_(new Expr\MethodCall(new Expr\Variable('this'), 'executeEndpoint', [
                    new Arg(new Expr\New_(new Name\FullyQualified($endpointName), $endpointArgs)),
                ])),
            ],
        ], [
            'comments' => [new Comment\Doc($documentation)],
        ]);
    }
}
