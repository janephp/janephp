<?php

namespace Jane\AutoMapper\Compiler;

class SourceTargetPropertiesMappingExtractor extends PropertiesMappingExtractor
{
    /**
     * @return PropertyMapping[]
     */
    public function getPropertiesMapping(string $source, string $target, bool $allowConstruct = true): array
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($source);
        $targetProperties = $this->propertyInfoExtractor->getProperties($target);

        if (null === $sourceProperties || null === $targetProperties) {
            return [];
        }

        $mapping = [];

        foreach ($sourceProperties as $property) {
            if (!$this->propertyInfoExtractor->isReadable($source, $property)) {
                continue;
            }

            if (\in_array($property, $targetProperties)) {
                if (!$this->propertyInfoExtractor->isWritable($target, $property)) {
                    continue;
                }

                $sourceTypes = $this->propertyInfoExtractor->getTypes($source, $property);
                $targetTypes = $this->propertyInfoExtractor->getTypes($target, $property);
                $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes);

                if (null === $transformer) {
                    continue;
                }

                $sourceAccessor = $this->accessorExtractor->getReadAccessor($source, $property);
                $targetMutator = $this->accessorExtractor->getWriteMutator($target, $property, $allowConstruct);

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
        }

        return $mapping;
    }

    public function getReverseExtractor(): PropertiesMappingExtractorInterface
    {
        return $this;
    }
}
