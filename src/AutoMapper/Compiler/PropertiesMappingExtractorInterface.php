<?php

namespace Jane\AutoMapper\Compiler;

interface PropertiesMappingExtractorInterface
{
    /**
     * @return PropertyMapping[]
     */
    public function getPropertiesMapping(string $source, string $target, array $options = []): array;
}
