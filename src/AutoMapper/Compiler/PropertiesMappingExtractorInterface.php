<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use Jane\AutoMapper\MapperConfigurationInterface;

interface PropertiesMappingExtractorInterface
{
    /**
     * @return PropertyMapping[]
     */
    public function getPropertiesMapping(string $source, string $target, MapperConfigurationInterface $mapperConfiguration): array;

    public function getReadAccessor(string $source, string $target, string $property): ?ReadAccessor;

    public function getWriteMutator(string $source, string $target, string $property): ?WriteMutator;
}
