<?php

namespace Jane\Component\AutoMapper\Extractor;

use Jane\Component\AutoMapper\MapperMetadataInterface;
use Symfony\Component\PropertyInfo\PropertyReadInfo;

/**
 * Extracts mapping between two objects, only gives properties that have the same name.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
class SourceTargetMappingExtractor extends MappingExtractor
{
    /**
     * {@inheritdoc}
     */
    public function getPropertiesMapping(MapperMetadataInterface $mapperMetadata): array
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($mapperMetadata->getSource());
        $targetProperties = $this->propertyInfoExtractor->getProperties($mapperMetadata->getTarget());

        if (null === $sourceProperties || null === $targetProperties) {
            return [];
        }

        $sourceProperties = array_unique($sourceProperties ?? []);
        $targetProperties = array_unique($targetProperties ?? []);

        $mapping = [];

        foreach ($sourceProperties as $property) {
            if (!$this->propertyInfoExtractor->isReadable($mapperMetadata->getSource(), $property)) {
                continue;
            }

            if (\in_array($property, $targetProperties, true)) {
                $targetMutatorConstruct = $this->getWriteMutator($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property, [
                    'enable_constructor_extraction' => true,
                ]);

                if ((null === $targetMutatorConstruct || null === $targetMutatorConstruct->getParameter()) && !$this->propertyInfoExtractor->isWritable($mapperMetadata->getTarget(), $property)) {
                    continue;
                }

                $sourceTypes = $this->propertyInfoExtractor->getTypes($mapperMetadata->getSource(), $property);
                $targetTypes = $this->propertyInfoExtractor->getTypes($mapperMetadata->getTarget(), $property);
                $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes, $mapperMetadata);

                if (null === $transformer) {
                    continue;
                }

                $sourceAccessor = $this->getReadAccessor($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property);
                $targetMutator = $this->getWriteMutator($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property, [
                    'enable_constructor_extraction' => false,
                ]);

                $maxDepthSource = $this->getMaxDepth($mapperMetadata->getSource(), $property);
                $maxDepthTarget = $this->getMaxDepth($mapperMetadata->getTarget(), $property);
                $maxDepth = null;

                if (null !== $maxDepthSource && null !== $maxDepthTarget) {
                    $maxDepth = min($maxDepthSource, $maxDepthTarget);
                } elseif (null !== $maxDepthSource) {
                    $maxDepth = $maxDepthSource;
                } elseif (null !== $maxDepthTarget) {
                    $maxDepth = $maxDepthTarget;
                }

                $mapping[] = new PropertyMapping(
                    $sourceAccessor,
                    $targetMutator,
                    WriteMutator::TYPE_CONSTRUCTOR === $targetMutatorConstruct->getType() ? $targetMutatorConstruct : null,
                    $transformer,
                    $property,
                    false,
                    $this->getGroups($mapperMetadata->getSource(), $property),
                    $this->getGroups($mapperMetadata->getTarget(), $property),
                    $maxDepth,
                    $this->isIgnoredProperty($mapperMetadata->getSource(), $property),
                    $this->isIgnoredProperty($mapperMetadata->getTarget(), $property),
                    PropertyReadInfo::VISIBILITY_PUBLIC === $this->readInfoExtractor->getReadInfo($mapperMetadata->getSource(), $property)?->getVisibility() ?? true,
                );
            }
        }

        return $mapping;
    }
}
