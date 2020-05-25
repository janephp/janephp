<?php

namespace Jane\AutoMapper\Bundle\Configuration;

use Jane\AutoMapper\MapperGeneratorMetadataInterface;

interface ConfigurationPassInterface
{
    public function process(MapperGeneratorMetadataInterface $metadata): void;
}
