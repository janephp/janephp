<?php

namespace Jane\AutoMapper;

interface AutoMapperInterface
{
    /**
     * Map data from to target.
     *
     * @param array|object $source  Any data object, which may be an object or an array
     * @param string       $target
     * @param Context      $context Options mappers have access to
     *
     * @return array|object The mapped object
     */
    public function map($source, string $target, Context $context = null);
}
