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

    public function __construct(PropertiesMappingExtractorInterface $mappingExtractor, string $source, string $target, array $options = [])
    {
        $this->mappingExtractor = $mappingExtractor;
        $this->source = $source;
        $this->target = $target;

        parent::__construct($source, $target, $options);
    }

    public function getPropertiesMapping(): array
    {
        $mappings = $this->mappingExtractor->getPropertiesMapping($this->source, $this->target, $this->options);

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

    public function createMapper(AutoMapper $autoMapper): Mapper
    {
        $mapper = parent::createMapper($autoMapper);

        foreach ($this->customMapping as $property => $callback) {
            $mapper->addCallback($property, $callback);
        }

        return $mapper;
    }

    public function forMember(string $property, callable $callback)
    {
        $this->customMapping[$property] = $callback;
    }
}
