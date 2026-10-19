<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\OpenApiCommon\Exception\InvalidPaginationConfigurationException;
use Jane\Component\OpenApiCommon\Generator\Pagination\PaginatedOperationGenerator;
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
        protected PaginatedOperationGenerator $paginatedOperationGenerator = new PaginatedOperationGenerator(),
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
        return $this->createOperationMethod($name, $this->endpointGenerator->createEndpointClass($operation, $context));
    }

    /**
     * The client method of the operation, followed by its `<name>Paginated()`
     * sibling when a pagination config applies to the operation.
     *
     * @param array<string, mixed>|null $pagination a normalized entry config of the `pagination` option
     *
     * @return non-empty-list<Stmt\ClassMethod>
     *
     * @throws InvalidPaginationConfigurationException when the pagination config does not fit the operation
     */
    public function createOperations(string $name, OperationGuess $operation, Context $context, ?array $pagination = null, string $paginationEntry = 'pagination'): array
    {
        $endpoint = $this->endpointGenerator->createEndpointClass($operation, $context);
        $methods = [$this->createOperationMethod($name, $endpoint)];

        if (null !== $pagination) {
            $methods[] = $this->paginatedOperationGenerator->createPaginatedOperation($name . 'Paginated', $name, $operation, $endpoint, $pagination, $paginationEntry, $context);
        }

        return $methods;
    }

    /**
     * @param array<mixed> $endpoint the result of EndpointGeneratorInterface::createEndpointClass()
     */
    private function createOperationMethod(string $name, array $endpoint): Stmt\ClassMethod
    {
        /** @var Param[] $methodParams */
        [$endpointName, $methodParams, $methodDoc, $returnTypes, $throwTypes] = $endpoint;
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
