<?php

namespace Jane\Component\AutoMapper;

use Jane\Component\AutoMapper\Extractor\FromSourceMappingExtractor;
use Jane\Component\AutoMapper\Extractor\FromTargetMappingExtractor;
use Jane\Component\AutoMapper\Extractor\SourceTargetMappingExtractor;

/**
 * Metadata factory, used to autoregistering new mapping without creating them.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class MapperGeneratorMetadataFactory implements MapperGeneratorMetadataFactoryInterface
{
    private $sourceTargetPropertiesMappingExtractor;
    private $fromSourcePropertiesMappingExtractor;
    private $fromTargetPropertiesMappingExtractor;
    private $classPrefix;
    private $attributeChecking;
    private $dateTimeFormat;

    public function __construct(
        SourceTargetMappingExtractor $sourceTargetPropertiesMappingExtractor,
        FromSourceMappingExtractor $fromSourcePropertiesMappingExtractor,
        FromTargetMappingExtractor $fromTargetPropertiesMappingExtractor,
        string $classPrefix = 'Mapper_',
        bool $attributeChecking = true,
        string $dateTimeFormat = \DateTime::RFC3339
    ) {
        $this->sourceTargetPropertiesMappingExtractor = $sourceTargetPropertiesMappingExtractor;
        $this->fromSourcePropertiesMappingExtractor = $fromSourcePropertiesMappingExtractor;
        $this->fromTargetPropertiesMappingExtractor = $fromTargetPropertiesMappingExtractor;
        $this->classPrefix = $classPrefix;
        $this->attributeChecking = $attributeChecking;
        $this->dateTimeFormat = $dateTimeFormat;
    }

    /**
     * Create metadata for a source and target.
     */
    public function create(MapperGeneratorMetadataRegistryInterface $autoMapperRegister, string $source, string $target): MapperGeneratorMetadataInterface
    {
        $extractor = $this->sourceTargetPropertiesMappingExtractor;

        if ('array' === $source || 'stdClass' === $source) {
            $extractor = $this->fromTargetPropertiesMappingExtractor;
        }

        if ('array' === $target || 'stdClass' === $target) {
            $extractor = $this->fromSourcePropertiesMappingExtractor;
        }

        $mapperMetadata = new MapperMetadata($autoMapperRegister, $extractor, $source, $target, $this->classPrefix);
        $mapperMetadata->setAttributeChecking($this->attributeChecking);
        $mapperMetadata->setDateTimeFormat($this->dateTimeFormat);

        return $mapperMetadata;
    }
}
