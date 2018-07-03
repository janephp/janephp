<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use SebastianBergmann\GlobalState\RuntimeException;

class FromTargetPropertiesMappingExtractor extends PropertiesMappingExtractor
{
    public function getPropertiesMapping(string $source, string $target, bool $allowConstruct = true): array
    {
        $targetProperties = $this->propertyInfoExtractor->getProperties($target);

        if (!\in_array($source, ['array', \stdClass::class])) {
            throw new RuntimeException('Only array or stdClass are accepted as a source');
        }

        if (null === $targetProperties) {
            return [];
        }

        $mapping = [];

        foreach ($targetProperties as $property) {
            if (!$this->propertyInfoExtractor->isWritable($target, $property)) {
                continue;
            }

            $targetTypes = $this->propertyInfoExtractor->getTypes($target, $property);
            $transformer = $this->transformerFactory->getTransformer($targetTypes, $targetTypes);

            if (null === $transformer) {
                continue;
            }

            $sourceAccessor = new ReadAccessor(ReadAccessor::TYPE_ARRAY_DIMENSION, $property);

            if ($source === \stdClass::class) {
                $sourceAccessor = new ReadAccessor(ReadAccessor::TYPE_PROPERTY, $property);
            }

            $targetMutator = $this->accessorExtractor->getWriteMutator($target, $property, $allowConstruct);

            $mapping[] = new PropertyMapping(
                $sourceAccessor,
                $targetMutator,
                $transformer,
                $property,
                true,
                $this->getGroups($source, $property),
                $this->getGroups($target, $property)
            );
        }

        return $mapping;
    }

    public function getReverseExtractor(): PropertiesMappingExtractorInterface
    {
        return new FromSourcePropertiesMappingExtractor($this->propertyInfoExtractor, $this->accessorExtractor, $this->transformerFactory);
    }
}
