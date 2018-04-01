<?php

namespace Jane\AutoMapper;

abstract class Mapper
{
    protected $autoMapper;

    public function setAutoMapper(AutoMapper $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    abstract public function map($value, array $options = []);
}