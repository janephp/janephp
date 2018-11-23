<?php

namespace Jane\AutoMapper\Bundle;

use Jane\AutoMapper\AbstractAutoMapper;
use Jane\AutoMapper\Bundle\Configuration\ConfigurationPassInterface;
use Jane\AutoMapper\MapperConfigurationInterface;

class AutoMapper extends AbstractAutoMapper
{
    /** @var ConfigurationPassInterface[] */
    private $configurationPass = [];

    public function addConfigurationPass(ConfigurationPassInterface $configurationPass)
    {
        $this->configurationPass[] = $configurationPass;
    }

    public function register(MapperConfigurationInterface $configuration): void
    {
        foreach ($this->configurationPass as $configurationPass) {
            $configurationPass->process($configuration);
        }

        parent::register($configuration);
    }
}
