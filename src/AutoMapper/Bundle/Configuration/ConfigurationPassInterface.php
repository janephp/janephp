<?php

namespace Jane\AutoMapper\Bundle\Configuration;

use Jane\AutoMapper\MapperConfigurationInterface;

interface ConfigurationPassInterface
{
    public function process(MapperConfigurationInterface $configuration);
}
