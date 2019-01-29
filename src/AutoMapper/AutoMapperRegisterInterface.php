<?php

namespace Jane\AutoMapper;

interface AutoMapperRegisterInterface
{
    public function register(MapperConfigurationInterface $configuration): void;

    public function getConfiguration(string $source, string $target): ?MapperConfigurationInterface;
}
