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
    private $mapPrivateProperties;

    public function __construct(
        SourceTargetMappingExtractor $sourceTargetPropertiesMappingExtractor,
        FromSourceMappingExtractor $fromSourcePropertiesMappingExtractor,
        FromTargetMappingExtractor $fromTargetPropertiesMappingExtractor,
        string $classPrefix = 'Mapper_',
        bool $attributeChecking = true,
        string $dateTimeFormat = \DateTime::RFC3339,
        bool $mapPrivateProperties = true
    ) {
        $this->sourceTargetPropertiesMappingExtractor = $sourceTargetPropertiesMappingExtractor;
        $this->fromSourcePropertiesMappingExtractor = $fromSourcePropertiesMappingExtractor;
        $this->fromTargetPropertiesMappingExtractor = $fromTargetPropertiesMappingExtractor;
        $this->classPrefix = $classPrefix;
        $this->attributeChecking = $attributeChecking;
        $this->dateTimeFormat = $dateTimeFormat;
        $this->mapPrivateProperties = $mapPrivateProperties;
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

        $mapperMetadata = new MapperMetadata($autoMapperRegister, $extractor, $source, $target, $this->isReadOnly($target), $this->classPrefix, $this->mapPrivateProperties);
        $mapperMetadata->setAttributeChecking($this->attributeChecking);
        $mapperMetadata->setDateTimeFormat($this->dateTimeFormat);

        return $mapperMetadata;
    }

    private function isReadOnly(string $mappedType): bool
    {
        try {
            $reflClass = new \ReflectionClass($mappedType);
        } catch (\ReflectionException $e) {
            $reflClass = null;
        }
        if (\PHP_VERSION_ID >= 80200 && null !== $reflClass && $reflClass->isReadOnly()) {
            return true;
        }

        return false;
    }
}
