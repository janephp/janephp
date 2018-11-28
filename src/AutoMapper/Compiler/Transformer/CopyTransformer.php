<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Expr;

class CopyTransformer implements TransformerInterface
{
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
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
