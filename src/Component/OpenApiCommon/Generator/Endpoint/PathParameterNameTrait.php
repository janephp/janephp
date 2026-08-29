<?php

namespace Jane\Component\OpenApiCommon\Generator\Endpoint;

use Jane\Component\JsonSchema\Tools\InflectorTrait;
use PhpParser\Node\Arg;
use PhpParser\Node\ArrayItem;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;

trait PathParameterNameTrait
{
    use InflectorTrait;

    protected function normalizePathPropertyName(string $parameterName): string
    {
        $pathPropertyName = (string) preg_replace('/[^a-zA-Z0-9_\x80-\xff]/', '_', $parameterName);
        if (is_numeric(substr($pathPropertyName, 0, 1))) {
            $pathPropertyName = '_' . $pathPropertyName;
        }

        return $pathPropertyName;
    }

    /**
     * Path templates may constrain a parameter with a regex (e.g. "/cluster/{id:.+}"),
     * making the raw parameter name invalid as a PHP variable name.
     */
    protected function normalizePathVariableName(string $parameterName): string
    {
        return $this->getInflector()->camelize($this->normalizePathPropertyName($parameterName));
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
                return new ArrayItem(new Expr\FuncCall(new Name('rawurlencode'), [new Arg(new Expr\FuncCall(new Name('implode'), [new Arg(new Scalar\String_(',')), new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), $name))]))]));
            }

            return new ArrayItem(new Expr\FuncCall(new Name('rawurlencode'), [new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), $name))]));
        }, array_keys($propertyNames), $propertyNames);
    }
}
