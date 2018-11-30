<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\MapperConfigurationInterface;

class SourceTargetPropertiesMappingExtractor extends PropertiesMappingExtractor
{
    /**
     * @return PropertyMapping[]
     */
    public function getPropertiesMapping(string $source, string $target, MapperConfigurationInterface $mapperConfiguration): array
    {
        $sourceProperties = array_unique($this->propertyInfoExtractor->getProperties($source));
        $targetProperties = array_unique($this->propertyInfoExtractor->getProperties($target));

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
                $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes, $mapperConfiguration);

                if (null === $transformer) {
                    continue;
                }

                $sourceAccessor = $this->accessorExtractor->getReadAccessor($source, $property);
                $targetMutator = $this->accessorExtractor->getWriteMutator($target, $property, false);

                $maxDepthSource = $this->getMaxDepth($source, $property);
                $maxDepthTarget = $this->getMaxDepth($target, $property);
                $maxDepth = null;

                if ($maxDepthSource !== null && $maxDepthTarget !== null) {
                    $maxDepth = min($maxDepthSource, $maxDepthTarget);
                } elseif ($maxDepthSource !== null) {
                    $maxDepth = $maxDepthSource;
                } elseif ($maxDepthTarget !== null) {
                    $maxDepth = $maxDepthTarget;
                }

                $mapping[] = new PropertyMapping(
                    $sourceAccessor,
                    $targetMutator,
                    $transformer,
                    $property,
                    false,
                    $this->getGroups($source, $property),
                    $this->getGroups($target, $property),
                    $maxDepth
                );
            }
        }

        return $mapping;
    }
}
