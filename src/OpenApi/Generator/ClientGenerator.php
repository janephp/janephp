<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\JsonSchema\Schema;
use Jane\OpenApi\Model\OpenApi;
use Jane\OpenApi\Naming\OperationNamingInterface;
use Jane\OpenApi\Operation\OperationManager;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

abstract class ClientGenerator implements GeneratorInterface
{
    public const FILE_TYPE_CLIENT = 'client';
    public const FILE_TYPE_RESOURCE = 'resource';
    public const FILE_TYPE_RESOURCE_TRAIT = 'resource_trait';

    private $operationManager;

    private $operationGenerator;

    private $operationNaming;

    public function __construct(OperationManager $operationManager, OperationGenerator $operationGenerator, OperationNamingInterface $operationNaming)
    {
        $this->operationManager = $operationManager;
        $this->operationGenerator = $operationGenerator;
        $this->operationNaming = $operationNaming;
    }

    public function generate(Schema $schema, string $className, Context $context)
    {
        /** @var OpenApi $openApi */
        $openApi = $schema->getParsed();
        $operationsGrouped = $this->operationManager->buildOperationCollection($openApi, $schema->getOrigin() . '#');

        $traitsStatements = [];

        foreach ($operationsGrouped as $group => $operations) {
            $group = ucfirst($group);
            $traitName = $this->createResourceTrait($group, $schema, $operations, $context);
            $this->createResource($group, $traitName, $schema, $context);
            $traitsStatements[] = new Stmt\TraitUse([
                new Name('Resource\\' . $traitName),
            ]);
        }

        $client = $this->createResourceClass('Client' . $this->getSuffix());
        $client->stmts = array_merge(
            $client->stmts,
            $traitsStatements,
            [
                $this->getFactoryMethod($context),
            ]
        );

        $node = new Stmt\Namespace_(new Name($schema->getNamespace()), [
            $client,
        ]);

        $schema->addFile(new File(
            $schema->getDirectory() . DIRECTORY_SEPARATOR . 'Client' . $this->getSuffix() . '.php',
            $node,
            self::FILE_TYPE_CLIENT
        ));
    }

    protected function createResource(string $group, string $traitName, Schema $schema, Context $context)
    {
        $className = $group . $this->getSuffix() . 'Resource';
        $resource = $this->createResourceClass($className);
        $resource->stmts = array_merge(
            $resource->stmts,
            [
                new Stmt\TraitUse([
                    new Name($traitName),
                ]),
            ]
        );

        $node = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Resource'), [
            $resource,
        ]);

        $schema->addFile(new File(
            $schema->getDirectory() . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR . $className . '.php',
            $node,
            self::FILE_TYPE_RESOURCE
        ));
    }

    protected function createResourceTrait(string $group, Schema $schema, $operations, Context $context): string
    {
        $statements = [];

        foreach ($operations as $operation) {
            $operationName = $this->operationNaming->generateFunctionName($operation);
            $statements[] = $this->operationGenerator->createOperation($operationName, $operation, $context);
        }

        $traitName = $group . $this->getSuffix() . 'ResourceTrait';
        $trait = new Stmt\Trait_($traitName, [
            'stmts' => $statements,
        ]);

        $node = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Resource'), [
            new Stmt\Use_([new Stmt\UseUse(new Name('Jane\OpenApiRuntime\Client\QueryParam'))]),
            $trait,
        ]);

        $schema->addFile(new File(
            $schema->getDirectory() . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR . $traitName . '.php',
            $node,
            self::FILE_TYPE_RESOURCE_TRAIT
        ));

        return $traitName;
    }

    abstract protected function getSuffix(): string;

    abstract protected function createResourceClass(string $name): Stmt\Class_;

    abstract protected function getFactoryMethod(Context $context): Stmt;
}
