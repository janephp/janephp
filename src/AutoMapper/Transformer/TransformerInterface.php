<?php

namespace Jane\AutoMapper\Transformer;

use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;
use Jane\AutoMapper\Extractor\PropertyMapping;
use Jane\AutoMapper\Generator\UniqueVariableScope;

/**
 * Transformer tell how to transform a property mapping.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
interface TransformerInterface
{
    /**
     * Get AST output and expressions for transforming a property mapping given an input.
     *
     * @return [Expr, Stmt[]] First value is the output expression, second value is an array of stmt needed to get the output
     */
    public function transform(Expr $input, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array;

    /**
     * Get dependencies for this transformer.
     *
     * @return MapperDependency[]
     */
    public function getDependencies(): array;

    /**
     * Should the resulting output be assigned by ref.
     */
    public function assignByRef(): bool;
}
