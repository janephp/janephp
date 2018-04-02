<?php

namespace Jane\AutoMapper;

interface MapperConfigurationInterface
{
    public function supports(string $source, string $target, array $options = []);

    public function getSource(): string;

    public function getTarget(): string;

    public function getPropertiesMapping(): array;

    public function getMapperClassName(): string;

    public function createMapper(AutoMapper $autoMapper): Mapper;
}
