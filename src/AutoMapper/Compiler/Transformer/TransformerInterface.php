<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\MapperDependency;
use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Expr;

interface TransformerInterface
{
    /**
     * @return Expr[]
     */
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope, PropertyMapping $propertyMapping): array;

    /**
     * @return MapperDependency[]
     */
    public function getDependencies();

    public function assignByRef(): bool;
}
