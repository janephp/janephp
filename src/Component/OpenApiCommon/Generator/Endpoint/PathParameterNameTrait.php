<?php

namespace Jane\Component\OpenApiCommon\Generator\Endpoint;

use PhpParser\Node\Arg;
use PhpParser\Node\ArrayItem;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;

trait PathParameterNameTrait
{
    protected function normalizePathPropertyName(string $parameterName): string
    {
        $pathPropertyName = (string) preg_replace('/[^a-zA-Z0-9_\x80-\xff]/', '_', $parameterName);
        if (is_numeric(substr($pathPropertyName, 0, 1))) {
            $pathPropertyName = '_' . $pathPropertyName;
        }

        return $pathPropertyName;
    }

    /**
     * @param string[]          $propertyNames
     * @param array<int, mixed> $types
     *
     * @return ArrayItem[]
     */
    protected function buildPathPropertyFetchArrayItems(array $propertyNames, array $types = []): array
    {
        return array_map(function ($index, $name) use ($types) {
            $type = $types[$index] ?? null;

            if ('array' === $type) {
                return new ArrayItem(new Expr\FuncCall(new Name('implode'), [new Arg(new Scalar\String_(',')), new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), $name))]));
            }

            return new ArrayItem(new Expr\PropertyFetch(new Expr\Variable('this'), $name));
        }, array_keys($propertyNames), $propertyNames);
    }
}
