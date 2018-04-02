<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\AccessorExtractorInterface;
use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactory;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;

abstract class PropertiesMappingExtractor implements PropertiesMappingExtractorInterface
{
    protected $propertyInfoExtractor;

    protected $transformerFactory;

    protected $accessorExtractor;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, AccessorExtractorInterface $accessorExtractor, TransformerFactory $transformerFactory)
    {
        $this->propertyInfoExtractor = $propertyInfoExtractor;
        $this->accessorExtractor = $accessorExtractor;
        $this->transformerFactory = $transformerFactory;
    }

    public function getReadAccessor(string $source, string $property): ReadAccessor
    {
        return $this->accessorExtractor->getReadAccessor($source, $property);
    }

    public function getWriteMutator(string $target, string $property): WriteMutator
    {
        return $this->accessorExtractor->getWriteMutator($target, $property);
    }
}
