<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\FromSourcePropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\FromTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\SourceTargetPropertiesMappingExtractor;

class MapperConfigurationFactory
{
    private $sourceTargetPropertiesMappingExtractor;
    private $fromSourcePropertiesMappingExtractor;
    private $fromTargetPropertiesMappingExtractor;
    private $classPrefix;

    public function __construct(
        SourceTargetPropertiesMappingExtractor $sourceTargetPropertiesMappingExtractor,
        FromSourcePropertiesMappingExtractor $fromSourcePropertiesMappingExtractor,
        FromTargetPropertiesMappingExtractor $fromTargetPropertiesMappingExtractor,
        string $classPrefix = 'Mapper_'
    ) {
        $this->sourceTargetPropertiesMappingExtractor = $sourceTargetPropertiesMappingExtractor;
        $this->fromSourcePropertiesMappingExtractor = $fromSourcePropertiesMappingExtractor;
        $this->fromTargetPropertiesMappingExtractor = $fromTargetPropertiesMappingExtractor;
        $this->classPrefix = $classPrefix;
    }

    public function create(AutoMapperRegisterInterface $autoMapperRegister, string $source, string $target): MapperConfiguration
    {
        $extractor = $this->sourceTargetPropertiesMappingExtractor;

        if ($source === 'array' || $source === 'stdClass') {
            $extractor = $this->fromTargetPropertiesMappingExtractor;
        }

        if ($target === 'array' || $target === 'stdClass') {
            $extractor = $this->fromSourcePropertiesMappingExtractor;
        }

        return new MapperConfiguration($autoMapperRegister, $extractor, $source, $target, $this->classPrefix);
    }
}
