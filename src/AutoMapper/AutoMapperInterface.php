<?php

namespace Jane\AutoMapper;

interface AutoMapperInterface
{
    public function getMapper(string $source, string $target): Mapper;

    public function hasMapper(string $source, string $target): bool;

    public function map($value, string $target, Context $context = null);
}
