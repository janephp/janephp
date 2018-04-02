<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use SebastianBergmann\GlobalState\RuntimeException;

class FromSourcePropertiesMappingExtractor extends PropertiesMappingExtractor
{
    public function getPropertiesMapping(string $source, string $target): array
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($source);

        if (!\in_array($target, ['array', \stdClass::class])) {
            throw new RuntimeException('Only array or stdClass are accepted as a target');
        }

        if (null === $sourceProperties) {
            return [];
        }

        $mapping = [];

        foreach ($sourceProperties as $property) {
            if (!$this->propertyInfoExtractor->isReadable($source, $property)) {
                continue;
            }

            $sourceTypes = $this->propertyInfoExtractor->getTypes($source, $property);
            $transformer = $this->transformerFactory->getTransformer($sourceTypes, $sourceTypes);

            if (null === $transformer) {
                continue;
            }

            $targetMutator = $this->getWriteMutator($target, $property);
            $sourceAccessor = $this->accessorExtractor->getReadAccessor($source, $property);
            $mapping[] = new PropertyMapping(
                $sourceAccessor,
                $targetMutator,
                $transformer,
                $property,
                false,
                $this->getGroups($source, $property),
                $this->getGroups($target, $property)
            );
        }

        return $mapping;
    }

    public function getWriteMutator(string $target, string $property): WriteMutator
    {
        $targetMutator = new WriteMutator(WriteMutator::TYPE_ARRAY_DIMENSION, $property, false);

        if ($target === \stdClass::class) {
            $targetMutator = new WriteMutator(WriteMutator::TYPE_PROPERTY, $property, false);
        }

        return $targetMutator;
    }

    public function getReverseExtractor(): PropertiesMappingExtractorInterface
    {
        return new FromTargetPropertiesMappingExtractor($this->propertyInfoExtractor, $this->accessorExtractor, $this->transformerFactory);
    }
}
