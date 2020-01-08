<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\AccessorExtractorInterface;
use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactoryInterface;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;

abstract class PropertiesMappingExtractor implements PropertiesMappingExtractorInterface
{
    protected $propertyInfoExtractor;

    protected $transformerFactory;

    protected $accessorExtractor;

    protected $classMetadataFactory;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, AccessorExtractorInterface $accessorExtractor, TransformerFactoryInterface $transformerFactory, ClassMetadataFactoryInterface $classMetadataFactory = null)
    {
        $this->propertyInfoExtractor = $propertyInfoExtractor;
        $this->accessorExtractor = $accessorExtractor;
        $this->transformerFactory = $transformerFactory;
        $this->classMetadataFactory = $classMetadataFactory;
    }

    public function getReadAccessor(string $source, string $target, string $property): ?ReadAccessor
    {
        return $this->accessorExtractor->getReadAccessor($source, $property);
    }

    public function getWriteMutator(string $source, string $target, string $property): ?WriteMutator
    {
        return $this->accessorExtractor->getWriteMutator($target, $property);
    }

    protected function getMaxDepth(string $class, string $property): ?int
    {
        if ($class === 'array') {
            return null;
        }

        if (null === $this->classMetadataFactory) {
            return null;
        }

        if (!$this->classMetadataFactory->getMetadataFor($class)) {
            return null;
        }

        $serializerClassMetadata = $this->classMetadataFactory->getMetadataFor($class);
        $maxDepth = null;

        foreach ($serializerClassMetadata->getAttributesMetadata() as $serializerAttributeMetadata) {
            if ($serializerAttributeMetadata->getName() === $property) {
                $maxDepth = $serializerAttributeMetadata->getMaxDepth();
            }
        }

        return $maxDepth;
    }

    protected function getGroups(string $class, string $property): ?array
    {
        if ($class === 'array') {
            return null;
        }

        if (null === $this->classMetadataFactory) {
            return null;
        }

        if (!$this->classMetadataFactory->getMetadataFor($class)) {
            return null;
        }

        $serializerClassMetadata = $this->classMetadataFactory->getMetadataFor($class);
        $anyGroupFound = false;
        $groups = [];

        foreach ($serializerClassMetadata->getAttributesMetadata() as $serializerAttributeMetadata) {
            if (\count($serializerAttributeMetadata->getGroups()) > 0) {
                $anyGroupFound = true;
            }

            if ($serializerAttributeMetadata->getName() === $property) {
                $groups = $serializerAttributeMetadata->getGroups();
            }
        }

        if (!$anyGroupFound) {
            return null;
        }

        return $groups;
    }
}
