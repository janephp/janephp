<?php

namespace Jane\Component\AutoMapper\Transformer;

use PhpParser\Node\Expr;

/**
 * Transformer array decorator.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */

/**
 * Transformer array decorator.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class ArrayTransformer extends AbstractArrayTransformer
{
    protected function getAssignExpr(Expr $valuesVar, Expr $outputVar, Expr $loopKeyVar, bool $assignByRef): Expr
    {
        if ($assignByRef) {
            return new Expr\AssignRef(new Expr\ArrayDimFetch($valuesVar), $outputVar);
        }

        return new Expr\Assign(new Expr\ArrayDimFetch($valuesVar), $outputVar);
    }
}
