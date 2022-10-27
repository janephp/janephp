<?php

namespace Jane\Component\OpenApiCommon\Registry;

use Jane\Component\JsonSchema\Registry\Schema as BaseSchema;
use Jane\Component\JsonSchema\Registry\SchemaInterface;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;

class Schema extends BaseSchema implements SchemaInterface
{
    /** @var OperationGuess[] */
    private $operations = [];

    /** @var SecuritySchemeGuess[] List of SecuritySchemes associated to this schema */
    private $securitySchemes = [];

    public function __construct(string $origin, string $namespace, string $directory)
    {
        parent::__construct($origin, $namespace, $directory, '');
    }

    public function addSecurityScheme(string $reference, SecuritySchemeGuess $securityScheme)
    {
        $this->securitySchemes[urldecode($reference)] = $securityScheme;
    }

    public function getSecurityScheme($reference): ?SecuritySchemeGuess
    {
        $reference = urldecode($reference);

        if (\array_key_exists($reference, $this->securitySchemes)) {
            return $this->securitySchemes[$reference];
        }

        if (\array_key_exists($reference . '#', $this->securitySchemes)) {
            return $this->securitySchemes[$reference . '#'];
        }

        return null;
    }

    /**
     * @return SecuritySchemeGuess[]
     */
    public function getSecuritySchemes(): array
    {
        return $this->securitySchemes;
    }

    public function addOperation(string $reference, OperationGuess $operationGuess): void
    {
        $this->operations[urldecode($reference)] = $operationGuess;
    }

    /**
     * @return OperationGuess[]
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    private $neededModels = [];
    private $operationRelations = [];

    public function initOperationRelations(string $model): void
    {
        if (!\array_key_exists($model, $this->operationRelations)) {
            $this->operationRelations[$model] = [];
        }
    }

    public function addOperationRelation(string $model, string $needs): void
    {
        $this->initOperationRelations($model);

        if (!\in_array($needs, $this->operationRelations[$model])) {
            $this->operationRelations[$model][] = $needs;
        }
    }

    public function filterRelations(): void
    {
        foreach ($this->operationRelations as $operation => $operationRelations) {
            $this->neededModels[] = $operation;
            $this->fetchRelatedModels($operationRelations);
        }

        foreach ($this->getClasses() as $class) {
            if (!\in_array($class->getName(), $this->neededModels)) {
                $this->removeClass($class->getReference());
            }
        }
    }

    private function fetchRelatedModels(array $models): void
    {
        if (\count($models) === 0) {
            return;
        }

        foreach ($models as $model) {
            if (\in_array($model, $this->neededModels)) {
                continue;
            }

            $this->neededModels[] = $model;
            $this->fetchRelatedModels($this->relations[$model] ?? []);
        }
    }
}
