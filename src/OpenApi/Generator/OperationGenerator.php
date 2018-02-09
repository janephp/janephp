<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Model\Response;
use Jane\OpenApi\Operation\Operation;
use PhpParser\Node\Arg;
use PhpParser\Node\Const_;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt;
use PhpParser\Comment;

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
            $endpointArgs[] = new Arg(new Expr\Variable($param->name));
        }

        $methodParams[] = new Param('fetch', new Expr\ClassConstFetch(new Name('self'), 'FETCH_OBJECT'), 'string');

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
