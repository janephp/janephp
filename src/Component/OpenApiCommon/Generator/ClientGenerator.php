<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\GeneratorInterface;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\OpenApiCommon\Generator\Client\ClientGenerator as CommonClientGenerator;
use Jane\Component\OpenApiCommon\Generator\Client\HttpClientCreateGenerator;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Registry\Schema as OpenApiSchema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

abstract class ClientGenerator implements GeneratorInterface
{
    use CommonClientGenerator;
    use HttpClientCreateGenerator;

    public function __construct(
        private readonly OperationGenerator $operationGenerator,
        private readonly OperationNamingInterface $operationNaming,
    ) {
    }

    /**
     * @param OpenApiSchema $schema
     */
    public function generate(Schema $schema, string $className, Context $context): void
    {
        $statements = [];

        foreach ($schema->getOperations() as $operation) {
            $operationName = $this->operationNaming->getFunctionName($operation);
            $statements[] = $this->operationGenerator->createOperation($operationName, $operation, $context);
        }

        $client = $this->createResourceClass($schema, 'Client' . $this->getSuffix());
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
            'client'
        ));
    }
}
