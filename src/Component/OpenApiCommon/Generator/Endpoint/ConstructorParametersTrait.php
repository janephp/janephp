<?php

namespace Jane\Component\OpenApiCommon\Generator\Endpoint;

use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;

/**
 * Builds the endpoint constructor parameters that carry query, form and
 * header options.
 */
trait ConstructorParametersTrait
{
    /**
     * An options array stays optional as long as its resolver accepts an empty
     * one; once a key is required the caller has to pass the array, so the
     * signature says so instead of deferring the failure to the request.
     */
    protected function optionsArrayParameter(string $name, bool $required): Node\Param
    {
        return new Node\Param(new Expr\Variable($name), $required ? null : new Expr\Array_(), new Name('array'));
    }

    /**
     * PHP treats an optional parameter declared before a required one as
     * required and deprecates the declaration, so drop the defaults the
     * language would ignore anyway.
     *
     * @param Node\Param[] $params
     *
     * @return Node\Param[]
     */
    protected function dropDefaultsBeforeRequired(array $params): array
    {
        $required = false;
        foreach (array_reverse($params, true) as $index => $param) {
            if (null === $param->default) {
                $required = true;
            } elseif ($required) {
                $params[$index] = new Node\Param($param->var, null, $param->type, $param->byRef, $param->variadic, $param->getAttributes(), $param->flags, $param->attrGroups);
            }
        }

        return $params;
    }
}
