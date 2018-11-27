<?php

namespace Jane\AutoMapper\Compiler\Accessor;

interface WriteMutatorExtractorInterface
{
    public function getWriteMutator(string $class, string $property, bool $allowConstruct = true): ?WriteMutator;
}
