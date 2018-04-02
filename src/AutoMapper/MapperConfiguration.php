<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\PropertiesMappingExtractorInterface;

class MapperConfiguration extends AbstractMapperConfiguration
{
    private $mappingExtractor;

    public function __construct(PropertiesMappingExtractorInterface $mappingExtractor, string $source, string $target, array $options = [])
    {
        $this->mappingExtractor = $mappingExtractor;
        $this->source = $source;
        $this->target = $target;

        parent::__construct($source, $target, $options);
    }

    public function getPropertiesMapping(): array
    {
        return $this->mappingExtractor->getPropertiesMapping($this->source, $this->target, $this->options);
    }
}
