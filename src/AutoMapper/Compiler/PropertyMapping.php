<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use Jane\AutoMapper\Compiler\Transformer\TransformerInterface;

class PropertyMapping
{
    private $readAccessor;

    private $writeMutator;

    private $transformer;

    private $checkExists;

    private $property;

    private $sourceGroups;

    private $targetGroups;

    public function __construct(ReadAccessor $readAccessor, WriteMutator $writeMutator, TransformerInterface $transformer, string $property, bool $checkExists = false, array $sourceGroups = null, array $targetGroups = null)
    {
        $this->readAccessor = $readAccessor;
        $this->writeMutator = $writeMutator;
        $this->transformer = $transformer;
        $this->property = $property;
        $this->checkExists = $checkExists;
        $this->sourceGroups = $sourceGroups;
        $this->targetGroups = $targetGroups;
    }

    public function getReadAccessor(): ReadAccessor
    {
        return $this->readAccessor;
    }

    public function getWriteMutator(): WriteMutator
    {
        return $this->writeMutator;
    }

    public function getTransformer(): TransformerInterface
    {
        return $this->transformer;
    }

    public function getProperty(): string
    {
        return $this->property;
    }

    public function checkExists(): bool
    {
        return $this->checkExists;
    }

    public function getSourceGroups(): ?array
    {
        return $this->sourceGroups;
    }

    public function getTargetGroups(): ?array
    {
        return $this->targetGroups;
    }
}
