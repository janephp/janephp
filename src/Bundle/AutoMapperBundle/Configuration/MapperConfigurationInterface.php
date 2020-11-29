<?php

namespace Jane\Bundle\AutoMapperBundle\Configuration;

use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;

interface MapperConfigurationInterface
{
    public function process(MapperGeneratorMetadataInterface $metadata): void;

    public function getSource(): string;

    public function getTarget(): string;
}
