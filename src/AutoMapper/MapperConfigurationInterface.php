<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\PropertyMapping;

interface MapperConfigurationInterface
{
    public function getSource(): string;

    public function getTarget(): string;

    /**
     * @return PropertyMapping[]
     */
    public function getPropertiesMapping(): array;

    public function getMapperClassName(): string;

    public function createMapper(AutoMapperInterface $autoMapper): Mapper;

    public function getModificationHash(): string;

    public function shouldDisabledTargetConstructor(): bool;

    public function isTargetCloneable(): bool;
}
