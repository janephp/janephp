<?php

namespace Jane\AutoMapper;

interface MapperConfigurationInterface
{
    public function getSource(): string;

    public function getTarget(): string;

    public function getPropertiesMapping(): array;

    public function getMapperClassName(): string;

    public function createMapper(AutoMapperInterface $autoMapper): Mapper;

    public function getModificationHash(): string;
}
