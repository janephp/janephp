<?php

namespace Jane\AutoMapper\Bundle\Configuration;

use Jane\AutoMapper\MapperConfigurationInterface;

class RestrictConfigurationPass implements ConfigurationPassInterface
{
    private $source;

    private $target;

    private $configurationPass;

    public function __construct($source, $target, ConfigurationPassInterface $configurationPass)
    {
        $this->source = $source;
        $this->target = $target;
        $this->configurationPass = $configurationPass;
    }

    public function process(MapperConfigurationInterface $configuration)
    {
        if ($configuration->getSource() !== $this->source || $configuration->getTarget() !== $this->target) {
            return;
        }

        $this->configurationPass->process($configuration);
    }
}
