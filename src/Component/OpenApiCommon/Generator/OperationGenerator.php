<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\Comment;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use Psr\Http\Message\ResponseInterface;

class OperationGenerator
{
    protected $endpointGenerator;

    public function __construct(EndpointGeneratorInterface $endpointGenerator)
    {
        $this->endpointGenerator = $endpointGenerator;
    }

    public function createOperation(string $name, OperationGuess $operation, Context $context): Stmt\ClassMethod
    {
        /** @var Param[] $methodParams */
        [$endpointName, $methodParams, $methodDoc, $returnTypes, $throwTypes] = $this->endpointGenerator->createEndpointClass($operation, $context);
        $endpointArgs = [];

        $documentation =
            $methodDoc .
            "\n * @param string \$fetch Fetch mode to use (can be OBJECT or RESPONSE)\n" .
            $this->getReturnDoc(array_merge($returnTypes, ['\\' . ResponseInterface::class]), $throwTypes) . "\n" .
            ' */'
        ;

        foreach ($methodParams as $param) {
            $endpointArgs[] = new Arg($param->var);
        }

        $methodParams[] = new Param(new Node\Expr\Variable('fetch'), new Expr\ClassConstFetch(new Name('self'), 'FETCH_OBJECT'), new Name('string'));

        return new Stmt\ClassMethod($name, [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => $methodParams,
            'stmts' => [
                new Stmt\Return_(new Expr\MethodCall(new Expr\Variable('this'), 'executeEndpoint', [
                    new Arg(new Expr\New_(new Name\FullyQualified($endpointName), $endpointArgs)),
                    new Arg(new Expr\Variable('fetch')),
                ])),
            ],
        ], [
            'comments' => [new Comment\Doc($documentation)],
        ]);
    }

    protected function getReturnDoc(array $returnTypes, array $throwTypes): string
    {
        return implode('', array_map(function ($value) {
            return ' * @throws ' . $value . "\n";
        }, $throwTypes))
            . " *\n"
            . ' * @return ' . implode('|', $returnTypes)
            ;
    }
}
