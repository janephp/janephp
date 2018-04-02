<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\AccessorExtractorInterface;
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
}
