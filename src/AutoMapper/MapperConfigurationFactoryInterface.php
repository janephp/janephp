<?php

namespace Jane\AutoMapper;

interface MapperConfigurationFactoryInterface
{
    public function create(string $source, string $target, array $options = []): MapperConfigurationInterface;
}
