<?php

namespace Jane\Component\AutoMapper\Bundle\Configuration;

use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;

/**
 * @deprecated since 6.3, will be removed in 7.0. Please use `Jane\Component\AutoMapper\Bundle\Configuration\MapperConfigurationInterface` instead.
 */
interface ConfigurationPassInterface
{
    public function process(MapperGeneratorMetadataInterface $metadata): void;
}
