<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\PropertiesMappingExtractorInterface;
use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\Transformer\CallbackTransformer;

class MapperConfiguration extends AbstractMapperConfiguration
{
    private $mappingExtractor;

    private $customMapping = [];

    public function __construct(PropertiesMappingExtractorInterface $mappingExtractor, string $source, string $target)
    {
        $this->mappingExtractor = $mappingExtractor;

        parent::__construct($source, $target);
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertiesMapping(): array
    {
        $mappings = $this->mappingExtractor->getPropertiesMapping($this->source, $this->target, $this);

        foreach ($this->customMapping as $property => $callback) {
            $mappings[] = new PropertyMapping(
                new ReadAccessor(ReadAccessor::TYPE_SOURCE, $property),
                $this->mappingExtractor->getWriteMutator($this->target, $property),
                new CallbackTransformer($property),
                $property,
                false
            );
        }

        return $mappings;
    }

    public function createMapper(): Mapper
    {
        $mapper = parent::createMapper();

        foreach ($this->customMapping as $property => $callback) {
            $mapper->addCallback($property, $callback);
        }

        return $mapper;
    }

    public function forMember(string $property, callable $callback)
    {
        $this->customMapping[$property] = $callback;
    }

    public function getReverseConfiguration()
    {
        return new self($this->mappingExtractor->getReverseExtractor(), $this->target, $this->source);
    }

    public function hasConstructor(): bool
    {
        if (!$this->isConstructorAllowed()) {
            return false;
        }

        if (\in_array($this->target, ['array', \stdClass::class], true)) {
            return false;
        }

        $reflection = new \ReflectionClass($this->getTarget());
        $constructor = $reflection->getConstructor();

        if ($constructor === null) {
            return false;
        }

        $parameters = $constructor->getParameters();
        $mandatoryParameters = [];

        foreach ($parameters as $parameter) {
            if (!$parameter->isOptional()) {
                $mandatoryParameters[] = $parameter;
            }
        }

        if (\count($mandatoryParameters) === 0) {
            return true;
        }

        foreach ($mandatoryParameters as $mandatoryParameter) {
            $readAccessor = $this->mappingExtractor->getReadAccessor($this->source, $mandatoryParameter->getName());

            if ($readAccessor === null) {
                return false;
            }
        }

        return true;
    }

    public function isTargetCloneable(): bool
    {
        $reflection = new \ReflectionClass($this->getTarget());

        return $reflection->isCloneable() && !$reflection->hasMethod('__clone');
    }
}
