<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\MapperConfigurationInterface;

interface MapperClassLoaderInterface
{
    public function load(MapperConfigurationInterface $mapperConfiguration): void;
}
