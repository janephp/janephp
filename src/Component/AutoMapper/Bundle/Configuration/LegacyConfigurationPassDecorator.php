<?php

namespace Jane\Component\AutoMapper\Bundle\Configuration;

use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;

/**
 * @deprecated since 6.3, will be removed in 7.0. Please use `Jane\Component\AutoMapper\Bundle\Configuration\MapperConfigurationInterface` instead.
 */
class LegacyConfigurationPassDecorator implements MapperConfigurationInterface
{
    private $configurationPass;
    private $source;
    private $target;

    public function __construct(ConfigurationPassInterface $configurationPass, string $source, string $target)
    {
        $this->configurationPass = $configurationPass;
        $this->source = $source;
        $this->target = $target;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function process(MapperGeneratorMetadataInterface $metadata): void
    {
        $this->configurationPass->process($metadata);
    }
}
