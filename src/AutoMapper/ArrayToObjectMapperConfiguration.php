<?php

namespace Jane\AutoMapper;

class ArrayToObjectMapperConfiguration extends AbstractMapperConfiguration
{
    public function __construct(string $target, array $options = [])
    {
        parent::__construct('array', $target, $options);
    }

    public function getSource(): string
    {
        return 'array';
    }

    public function getPropertiesMapping(): array
    {
        // TODO: Implement getPropertiesMapping() method.
    }
}