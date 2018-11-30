<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Expr;

class CopyTransformer implements TransformerInterface
{
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope, PropertyMapping $propertyMapping): array
    {
        return [$input, []];
    }

    public function getDependencies()
    {
        return [];
    }

    public function assignByRef(): bool
    {
        return false;
    }
}
