<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Event\FileGeneratedEvent;
use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\GeneratorInterface;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\OpenApiCommon\Exception\InvalidPaginationConfigurationException;
use Jane\Component\OpenApiCommon\Generator\Client\ClientGenerator as CommonClientGenerator;
use Jane\Component\OpenApiCommon\Generator\Client\HttpClientCreateGenerator;
use Jane\Component\OpenApiCommon\Generator\Pagination\PaginationConfiguration;
use Jane\Component\OpenApiCommon\Naming\OperationNamingInterface;
use Jane\Component\OpenApiCommon\Registry\Registry as OpenApiRegistry;
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
        $naming = new Naming();
        $schema->addRequiredRuntimeFile($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'Client'));
        $schema->addRequiredRuntimeFile($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'FormEncoder'));
        $schema->addRequiredRuntimeFile($naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'JsonPayload'));

        $statements = [];
        $registry = $context->getRegistry();
        $pagination = new PaginationConfiguration($registry instanceof OpenApiRegistry ? $registry->getPagination() : []);

        if ($pagination->isEmpty()) {
            foreach ($schema->getOperations() as $operation) {
                $operationName = $this->operationNaming->getFunctionName($operation);
                $statements[] = $this->operationGenerator->createOperation($operationName, $operation, $context);
            }
        } else {
            $statements = $this->createOperationsWithPagination($schema, $pagination, $context);
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

        $file = new File(
            $schema->getDirectory() . \DIRECTORY_SEPARATOR . 'Client' . $this->getSuffix() . '.php',
            $node,
            'client'
        );
        $schema->addFile($file);
        $context->dispatch(new FileGeneratedEvent($schema, $file));
    }

    /**
     * Every problem of the pagination configuration, against the whole
     * registry, is collected before failing so they are reported together.
     *
     * @return list<Stmt\ClassMethod>
     *
     * @throws InvalidPaginationConfigurationException
     */
    private function createOperationsWithPagination(OpenApiSchema $schema, PaginationConfiguration $pagination, Context $context): array
    {
        $errors = $pagination->getErrors();
        $statements = $paginatedNames = [];

        foreach ($schema->getOperations() as $operation) {
            $operationName = $this->operationNaming->getFunctionName($operation);
            $match = $pagination->match($operation);

            if (null === $match) {
                $statements[] = $this->operationGenerator->createOperation($operationName, $operation, $context);
                continue;
            }

            try {
                $statements = array_merge($statements, $this->operationGenerator->createOperations($operationName, $operation, $context, $match['config'], $pagination->describeEntry($match['index'])));
                $paginatedNames[$operationName . 'Paginated'] = $pagination->describeEntry($match['index']);
            } catch (InvalidPaginationConfigurationException $exception) {
                $errors = array_merge($errors, $exception->getErrors());
            }
        }

        // an entry matching no operation of the registry is most likely a typo
        $matchedEntries = [];
        foreach ($context->getRegistry()->getSchemas() as $registrySchema) {
            if (!$registrySchema instanceof OpenApiSchema) {
                continue;
            }

            foreach ($registrySchema->getOperations() as $operation) {
                if (null !== ($match = $pagination->match($operation))) {
                    $matchedEntries[$match['index']] = true;
                }
            }
        }

        foreach ($pagination->getEntryIndexes() as $index) {
            if (!isset($matchedEntries[$index])) {
                $errors[] = \sprintf('%s: matches no GET operation of the specification.', $pagination->describeEntry($index));
            }
        }

        $methodNames = array_count_values(array_map(static fn (Stmt\ClassMethod $method): string => $method->name->toString(), $statements));
        foreach ($paginatedNames as $paginatedName => $entry) {
            if (($methodNames[$paginatedName] ?? 0) > 1) {
                $errors[] = \sprintf('%s: the generated "%s()" method conflicts with the client method of another operation.', $entry, $paginatedName);
            }
        }

        if ([] !== $errors) {
            throw new InvalidPaginationConfigurationException($errors);
        }

        return $statements;
    }
}
