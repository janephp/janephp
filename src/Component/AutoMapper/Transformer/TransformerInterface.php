<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;

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
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array;
}
