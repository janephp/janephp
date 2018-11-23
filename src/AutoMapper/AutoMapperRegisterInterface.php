<?php

namespace Jane\AutoMapper;

interface AutoMapperRegisterInterface
{
    public function register(MapperConfigurationInterface $configuration): void;
}
