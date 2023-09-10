<?php

namespace Jane\Component\AutoMapper\Extractor;

use Jane\Component\AutoMapper\Transformer\TransformerInterface;

/**
 * Property mapping.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class PropertyMapping
{
    private $readAccessor;

    private $writeMutator;

    private $writeMutatorConstructor;

    private $transformer;

    private $checkExists;

    private $property;

    private $sourceGroups;

    private $targetGroups;

    private $maxDepth;

    private $sourceIgnored;

    private $targetIgnored;

    private $isPublic;

    public function __construct(
        ReadAccessor $readAccessor,
        ?WriteMutator $writeMutator,
        ?WriteMutator $writeMutatorConstructor,
        TransformerInterface $transformer,
        string $property,
        bool $checkExists = false,
        array $sourceGroups = null,
        array $targetGroups = null,
        ?int $maxDepth = null,
        bool $sourceIgnored = false,
        bool $targetIgnored = false,
        bool $isPublic = false
    ) {
        $this->readAccessor = $readAccessor;
        $this->writeMutator = $writeMutator;
        $this->writeMutatorConstructor = $writeMutatorConstructor;
        $this->transformer = $transformer;
        $this->property = $property;
        $this->checkExists = $checkExists;
        $this->sourceGroups = $sourceGroups;
        $this->targetGroups = $targetGroups;
        $this->maxDepth = $maxDepth;
        $this->sourceIgnored = $sourceIgnored;
        $this->targetIgnored = $targetIgnored;
        $this->isPublic = $isPublic;
    }

    public function getReadAccessor(): ReadAccessor
    {
        return $this->readAccessor;
    }

    public function getWriteMutator(): ?WriteMutator
    {
        return $this->writeMutator;
    }

    public function getWriteMutatorConstructor(): ?WriteMutator
    {
        return $this->writeMutatorConstructor;
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

    public function getMaxDepth(): ?int
    {
        return $this->maxDepth;
    }

    public function shouldIgnoreProperty(bool $shouldMapPrivateProperties = true): bool
    {
        return $this->sourceIgnored
            || $this->targetIgnored
            || !($shouldMapPrivateProperties || $this->isPublic);
    }
}
