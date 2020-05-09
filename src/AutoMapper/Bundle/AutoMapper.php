<?php

namespace Jane\AutoMapper\Bundle;

use Jane\AutoMapper\AutoMapper as BaseAutoMapper;
use Jane\AutoMapper\Bundle\Configuration\ConfigurationPassInterface;
use Jane\AutoMapper\MapperGeneratorMetadataInterface;

class AutoMapper extends BaseAutoMapper
{
    /** @var ConfigurationPassInterface[] */
    private $configurationPass = [];

    public function addConfigurationPass(ConfigurationPassInterface $configurationPass): void
    {
        $this->configurationPass[] = $configurationPass;
    }

    public function register(MapperGeneratorMetadataInterface $metadata): void
    {
        foreach ($this->configurationPass as $configurationPass) {
            $configurationPass->process($metadata);
        }

        parent::register($metadata);
    }
}
