<?php

namespace Jane\AutoMapper;

interface AutoMapperInterface
{
    public function getMapper(string $source, string $target): Mapper;

    public function map($value, string $target, array $context = []);
}
