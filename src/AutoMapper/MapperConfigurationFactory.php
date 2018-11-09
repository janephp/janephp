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

    public function __construct(
        SourceTargetPropertiesMappingExtractor $sourceTargetPropertiesMappingExtractor,
        FromSourcePropertiesMappingExtractor $fromSourcePropertiesMappingExtractor,
        FromTargetPropertiesMappingExtractor $fromTargetPropertiesMappingExtractor
    ) {
        $this->sourceTargetPropertiesMappingExtractor = $sourceTargetPropertiesMappingExtractor;
        $this->fromSourcePropertiesMappingExtractor = $fromSourcePropertiesMappingExtractor;
        $this->fromTargetPropertiesMappingExtractor = $fromTargetPropertiesMappingExtractor;
    }

    public function create($source, $target): MapperConfigurationInterface
    {
        $extractor = $this->sourceTargetPropertiesMappingExtractor;

        if ($source === 'array' || $source === 'stdClass') {
            $extractor = $this->fromTargetPropertiesMappingExtractor;
        }

        if ($target === 'array' || $target === 'stdClass') {
            $extractor = $this->fromSourcePropertiesMappingExtractor;
        }

        return new MapperConfiguration($extractor, $source, $target);
    }
}
