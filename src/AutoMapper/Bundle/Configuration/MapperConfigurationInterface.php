<?php

namespace Jane\AutoMapper\Bundle\Configuration;

use Jane\AutoMapper\MapperGeneratorMetadataInterface;

interface MapperConfigurationInterface
{
    public function process(MapperGeneratorMetadataInterface $metadata): void;

    public function getSource(): string;

    public function getTarget(): string;
}
