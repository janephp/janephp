<?php

namespace Jane\AutoMapper\Compiler;

class SourceTargetPropertiesMappingExtractor extends PropertiesMappingExtractor
{
    /**
     * @return PropertyMapping[]
     */
    public function getPropertiesMapping(string $source, string $target, array $options = []): array
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($source, $options);
        $targetProperties = $this->propertyInfoExtractor->getProperties($target, $options);

        if (null === $sourceProperties || null === $targetProperties) {
            return [];
        }

        $mapping = [];

        foreach ($sourceProperties as $property) {
            if (!$this->propertyInfoExtractor->isReadable($source, $property, $options)) {
                continue;
            }

            if (\in_array($property, $targetProperties)) {
                if (!$this->propertyInfoExtractor->isWritable($target, $property, $options)) {
                    continue;
                }

                $sourceTypes = $this->propertyInfoExtractor->getTypes($source, $property, $options);
                $targetTypes = $this->propertyInfoExtractor->getTypes($target, $property, $options);
                $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes);

                if (null === $transformer) {
                    continue;
                }

                $sourceAccessor = $this->accessorExtractor->getReadAccessor($source, $property);
                $targetMutator = $this->accessorExtractor->getWriteMutator($target, $property);

                $mapping[] = new PropertyMapping($sourceAccessor, $targetMutator, $transformer, $property);
            }
        }

        return $mapping;
    }

    public function getReverseExtractor(): PropertiesMappingExtractorInterface
    {
        return $this;
    }
}
