<?php

namespace Jane\AutoMapper\Compiler\Accessor;

interface ReadAccessorExtractorInterface
{
    public function getReadAccessor(string $class, string $property): ReadAccessor;
}
