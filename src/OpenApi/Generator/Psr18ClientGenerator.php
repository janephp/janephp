<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\JsonSchema\Schema;
use Jane\OpenApi\Generator\Client\ServerPluginGenerator;
use Jane\OpenApiCommon\Generator\Client\HttpClientCreateGenerator;
use Jane\OpenApi\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\Generator\Client\Psr18ClientGenerator as CommonPsr18ClientGenerator;
use Jane\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\OpenApi\Operation\OperationManager;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class Psr18ClientGenerator implements GeneratorInterface
{
    use CommonPsr18ClientGenerator;
    use HttpClientCreateGenerator;
    use ServerPluginGenerator;

    public const FILE_TYPE_CLIENT = 'client';

    private $operationManager;

    private $operationGenerator;

    private $operationNaming;

    public function __construct(OperationManager $operationManager, OperationGenerator $operationGenerator, OperationNamingInterface $operationNaming)
    {
        $this->operationManager = $operationManager;
        $this->operationGenerator = $operationGenerator;
        $this->operationNaming = $operationNaming;
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        /** @var OpenApi $openApi */
        $openApi = $schema->getParsed();
        $operations = $this->operationManager->buildOperationCollection($openApi, $schema->getOrigin() . '#');
        $statements = [];

        foreach ($operations as $operation) {
            $operationName = $this->operationNaming->getFunctionName($operation);
            $statements[] = $this->operationGenerator->createOperation($operationName, $operation, $context);
        }

        $client = $this->createResourceClass('Client' . $this->getSuffix());
        $client->stmts = array_merge(
            $statements,
            [
                $this->getFactoryMethod($schema, $context),
            ]
        );

        $node = new Stmt\Namespace_(new Name($schema->getNamespace()), [
            $client,
        ]);

        $schema->addFile(new File(
            $schema->getDirectory() . \DIRECTORY_SEPARATOR . 'Client' . $this->getSuffix() . '.php',
            $node,
            self::FILE_TYPE_CLIENT
        ));
    }
}
