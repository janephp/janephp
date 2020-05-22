<?php

namespace Jane\OpenApiCommon\Registry;

use Jane\JsonSchema\Registry\Schema as BaseSchema;
use Jane\JsonSchema\Registry\SchemaInterface;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;

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

    public function addRelation(string $model, string $needs): void
    {
        parent::addRelation($model, $needs);

        if (\in_array($model, $this->neededModels)) {
            return;
        }

        $this->neededModels[] = $model;
    }

    public function relationExists($model): bool
    {
        return parent::relationExists($model) && \in_array($model, $this->neededModels);
    }

    public function needsRelation(string $reference): bool
    {
        $passed = [];
        foreach ($this->neededModels as $neededModel) {
            if (\array_key_exists($neededModel, $this->relations) && \count($this->relations[$neededModel]) > 0) {
                $passed[] = $neededModel;
                if ($this->reccNeedsRelation($this->relations[$neededModel], $reference, $passed)) {
                    return true;
                }
            }
        }

        return false;
    }

    private function reccNeedsRelation(array $neededModels, string $reference, array &$passed): bool
    {
        if (\count($neededModels) > 0) {
            if (\in_array($reference, $neededModels)) {
                return true;
            }

            foreach ($neededModels as $neededModel) {
                if (\in_array($neededModel, $passed)) {
                    return false;
                }

                if (\array_key_exists($neededModel, $this->relations)) {
                    $passed[] = $neededModel;
                    if ($this->reccNeedsRelation($this->relations[$neededModel], $reference, $passed)) {
                        return true;
                    }
                }
            }
        }

        return false;
    }
}
