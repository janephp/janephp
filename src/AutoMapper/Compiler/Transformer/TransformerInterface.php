<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use Jane\AutoMapper\Compiler\MapperDependency;
use PhpParser\Node\Expr;

interface TransformerInterface
{
    /**
     * @return Expr[]
     */
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array;

    /**
     * @return MapperDependency[]
     */
    public function getDependencies();
}
