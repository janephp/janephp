<?php

namespace Jane\OpenApi2\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\JsonSchema\Schema;
use Jane\OpenApi2\Generator\Client\ServerPluginGenerator;
use Jane\OpenApiCommon\Generator\Client\HttpClientCreateGenerator;
use Jane\OpenApiCommon\Generator\Client\Psr18ClientGenerator as CommonPsr18ClientGenerator;
use Jane\OpenApiCommon\Naming\OperationNamingInterface;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class Psr18ClientGenerator implements GeneratorInterface
{
    use CommonPsr18ClientGenerator;
    use HttpClientCreateGenerator;
    use ServerPluginGenerator;

    public const FILE_TYPE_CLIENT = 'client';

    private $operationGenerator;

    private $operationNaming;

    public function __construct(OperationGenerator $operationGenerator, OperationNamingInterface $operationNaming)
    {
        $this->operationGenerator = $operationGenerator;
        $this->operationNaming = $operationNaming;
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $statements = [];

        foreach ($schema->getOperations() as $operation) {
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
