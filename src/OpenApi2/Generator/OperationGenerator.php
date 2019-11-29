<?php

namespace Jane\OpenApi2\Generator;

use function Jane\isPhpParser4;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi2\Operation\Operation;
use function Jane\parserVariable;
use PhpParser\Comment;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;

abstract class OperationGenerator
{
    protected $endpointGenerator;

    public function __construct(EndpointGenerator $endpointGenerator)
    {
        $this->endpointGenerator = $endpointGenerator;
    }

    abstract protected function getEndpointCallName(): string;

    abstract protected function getResponseClass(): string;

    abstract protected function getReturnDoc($returnTypes, $throwTypes): string;

    public function createOperation($name, Operation $operation, Context $context): Stmt\ClassMethod
    {
        [$endpointName, $methodParams, $methodDoc, $returnTypes, $throwTypes] = $this->endpointGenerator->createEndpointClass($operation, $context);
        $endpointArgs = [];

        $documentation =
            $methodDoc .
            "\n * @param string \$fetch Fetch mode to use (can be OBJECT or RESPONSE)\n" .
            $this->getReturnDoc(array_merge($returnTypes, ['\\' . $this->getResponseClass()]), $throwTypes) . "\n" .
            ' */'
        ;

        /** @var Param $param */
        foreach ($methodParams as $param) {
            $endpointArgs[] = new Arg(isPhpParser4() ? $param->var : new Expr\Variable($param->name));
        }

        $methodParams[] = new Param(parserVariable('fetch'), new Expr\ClassConstFetch(new Name('self'), 'FETCH_OBJECT'), new Name('string'));

        return new Stmt\ClassMethod($name, [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => $methodParams,
            'stmts' => [
                new Stmt\Return_(new Expr\MethodCall(new Expr\Variable('this'), $this->getEndpointCallName(), [
                    new Arg(new Expr\New_(new Name\FullyQualified($endpointName), $endpointArgs)),
                    new Arg(new Expr\Variable('fetch')),
                ])),
            ],
        ], [
            'comments' => [new Comment\Doc($documentation)],
        ]);
    }
}
