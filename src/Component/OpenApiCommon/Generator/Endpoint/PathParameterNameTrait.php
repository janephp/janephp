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
     * @param string[]                             $propertyNames
     * @param array<int, string|list<string>|null> $types
     * @param array<int, string>|null              $styledParameterNames raw path parameter names of the parameters serialized by the runtime style encoder (collection shaped, untyped or explicitly styled); null keeps the legacy inline encoding (OpenAPI 2)
     *
     * @return ArrayItem[]
     */
    protected function buildPathPropertyFetchArrayItems(array $propertyNames, array $types = [], ?array $styledParameterNames = null): array
    {
        return array_map(function ($index, $name) use ($types, $styledParameterNames) {
            $propertyFetch = new Expr\PropertyFetch(new Expr\Variable('this'), $name);
            $type = $types[$index] ?? null;
            $typeList = \is_array($type)
                ? array_values(array_filter($type, fn ($t) => $t !== 'null'))
                : [$type];

            // OpenAPI 3 / 3.1: collection shaped and untyped parameters, and
            // parameters declaring an explicit style, are serialized by the
            // runtime encoder (issue #1165). It never fails on array or
            // object values and applies the declared style and explode.
            if (null !== $styledParameterNames && (isset($styledParameterNames[$index]) || \in_array($typeList[0] ?? null, ['array', 'object', null], true) && 1 === \count($typeList))) {
                return new ArrayItem(new Expr\MethodCall(new Expr\Variable('this'), 'encodePathStyledValue', [
                    new Arg(new Scalar\String_($styledParameterNames[$index] ?? $name)),
                    new Arg($propertyFetch),
                ]));
            }

            // A union-typed path value (OpenAPI 3.1 "type" list) cannot be
            // safely coerced, so it is URL-encoded as-is (issue #1166).
            if (\count($typeList) !== 1) {
                return new ArrayItem(new Expr\FuncCall(new Name('rawurlencode'), [new Arg($propertyFetch)]));
            }

            $type = $typeList[0];

            if (null === $type) {
                return new ArrayItem(new Expr\FuncCall(new Name('rawurlencode'), [new Arg($propertyFetch)]));
            }

            if ('array' === $type) {
                return new ArrayItem(new Expr\FuncCall(new Name('rawurlencode'), [new Arg(new Expr\FuncCall(new Name('implode'), [new Arg(new Scalar\String_(',')), new Arg($propertyFetch)]))]));
            }

            if ('boolean' === $type) {
                $propertyFetch = new Expr\Cast\String_(new Expr\Cast\Int_($propertyFetch));
            } elseif (\in_array($type, ['integer', 'number'], true)) {
                $propertyFetch = new Expr\Cast\String_($propertyFetch);
            }

            return new ArrayItem(new Expr\FuncCall(new Name('rawurlencode'), [new Arg($propertyFetch)]));
        }, array_keys($propertyNames), $propertyNames);
    }
}
