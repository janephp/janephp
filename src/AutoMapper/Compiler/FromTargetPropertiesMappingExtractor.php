<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use SebastianBergmann\GlobalState\RuntimeException;

class FromTargetPropertiesMappingExtractor extends PropertiesMappingExtractor
{
    public function getPropertiesMapping(string $source, string $target, array $options = []): array
    {
        $targetProperties = $this->propertyInfoExtractor->getProperties($target, $options);

        if (!\in_array($source, ['array', \stdClass::class])) {
            throw new RuntimeException('Only array or stdClass are accepted as a source');
        }

        if (null === $targetProperties) {
            return [];
        }

        $mapping = [];

        foreach ($targetProperties as $property) {
            if (!$this->propertyInfoExtractor->isWritable($target, $property, $options)) {
                continue;
            }

            $targetTypes = $this->propertyInfoExtractor->getTypes($target, $property, $options);
            $transformer = $this->transformerFactory->getTransformer($targetTypes, $targetTypes);

            if (null === $transformer) {
                continue;
            }

            $sourceAccessor = new ReadAccessor(ReadAccessor::TYPE_ARRAY_DIMENSION, $property, false);

            if ($source === \stdClass::class) {
                $sourceAccessor = new ReadAccessor(ReadAccessor::TYPE_PROPERTY, $property, false);
            }

            $targetMutator = $this->accessorExtractor->getWriteMutator($target, $property);

            $mapping[] = new PropertyMapping($sourceAccessor, $targetMutator, $transformer, $property, true);
        }

        return $mapping;
    }
}
