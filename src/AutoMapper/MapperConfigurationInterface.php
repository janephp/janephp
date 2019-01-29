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

    public function createMapper(): Mapper;

    public function getModificationHash(): string;

    public function hasConstructor(): bool;

    public function isConstructorAllowed(): bool;

    public function isTargetCloneable(): bool;

    public function getDateTimeFormat(): string;

    public function canHaveCircularDependency(): bool;
}
