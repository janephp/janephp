<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\AccessorExtractorInterface;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactory;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;

class MappingFactory
{
    private $propertyInfoExtractor;

    private $transformerFactory;

    private $accessorExtractor;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, AccessorExtractorInterface $accessorExtractor, TransformerFactory $transformerFactory)
    {
        $this->propertyInfoExtractor = $propertyInfoExtractor;
        $this->accessorExtractor = $accessorExtractor;
        $this->transformerFactory = $transformerFactory;
    }

    /**
     * @return PropertyMapping[]
     */
    public function getPropertiesMapping(string $source, string $target, array $options = []): array
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($source, $options);
        $targetProperties = $this->propertyInfoExtractor->getProperties($target, $options);

        if (null === $sourceProperties || null === $targetProperties) {
            throw new \RuntimeException('Cannot find properties to map');
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

                $mapping[] = new PropertyMapping($sourceAccessor, $targetMutator, $transformer);
            }
        }

        return $mapping;
    }
}