<?php

namespace Jane\OpenApi\Generator;

use Jane\Generator\Context\Context;
use Jane\OpenApi\Model\OpenApi;
use Jane\OpenApi\Naming\OperationNamingInterface;
use Jane\OpenApi\Operation\OperationManager;

use PhpParser\BuilderFactory;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;

class ClientGenerator
{
    /**
     * @var \Jane\OpenApi\Operation\OperationManager
     */
    private $operationManager;

    /**
     * @var OperationGenerator
     */
    private $operationGenerator;

    /**
     * @var OperationNamingInterface
     */
    private $operationNaming;

    public function __construct(OperationManager $operationManager, OperationGenerator $operationGenerator, OperationNamingInterface $operationNaming)
    {
        $this->operationManager   = $operationManager;
        $this->operationGenerator = $operationGenerator;
        $this->operationNaming    = $operationNaming;
    }

    /**
     * Generate an ast node (which correspond to a class) for a OpenApi spec
     *
     * @param OpenApi $openApi
     * @param string  $namespace
     * @param Context $context
     * @param string  $reference
     * @param string  $suffix
     *
     * @return Node[]
     */
    public function generate(OpenApi $openApi, $namespace, Context $context, $reference, $suffix = 'Resource')
    {
        $operationsGrouped = $this->operationManager->buildOperationCollection($openApi, $reference);
        $nodes             = [];

        foreach ($operationsGrouped as $group => $operations) {
            $nodes[] = $this->generateClass($group, $operations, $namespace, $context, $suffix);
        }

        return $nodes;
    }

    protected function generateClass($group, $operations, $namespace, Context $context, $suffix = 'Resource')
    {
        $factory = new BuilderFactory();
        $trait = $factory->trait($group . $suffix . 'Trait');
        $class = $factory->class($group . $suffix);
        $class->extend('Resource');

        foreach ($operations as $operation) {
            $trait->addStmt($this->operationGenerator->generate($this->operationNaming->generateFunctionName($operation), $operation, $context));
        }

        $class->addStmt(new Stmt\TraitUse([
            new Node\Name($group . $suffix . 'Trait'),
        ]));

        return [
            'class' => $factory->namespace($namespace . "\\Resource")
                ->addStmt($factory->use('Jane\OpenApi\Runtime\Client\Resource'))
                ->addStmt($class)
                ->getNode()
            ,
            'trait' => $factory->namespace($namespace . "\\Resource")
                ->addStmt($factory->use('Jane\OpenApi\Runtime\Client\QueryParam'))
                ->addStmt($trait)
                ->getNode()
        ];
    }
}
