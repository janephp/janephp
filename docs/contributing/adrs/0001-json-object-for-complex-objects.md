# ADR 0001: Use `JsonObject` for complex objects & maps in generated payloads

- **Status**: Accepted
- **Decided**: 2026-08, while fixing [#700](https://github.com/janephp/janephp/issues/700) and [#680](https://github.com/janephp/janephp/issues/680)
- **Supersedes**: the approach of [PR #704](https://github.com/janephp/janephp/pull/704) (`\ArrayObject` for objects), which was never merged

## Context

Jane generated normalizers that built object-shaped payloads with plain PHP
arrays:

- a schema declaring `type: object` + `additionalProperties` (a map, guessed as
  `MapType`) initialized its normalization accumulator with `$values = [];`
- `patternProperties` maps (`PatternMultipleType`) had the same asymmetry;
- nested named-object properties delegated to `$this->normalizer->normalize(...)`,
  which returns an array — empty when all sub-properties were skipped.

Because PHP encodes an empty array as `[]` and not `{}`, any **empty** JSON
object produced by these paths was serialized as an empty JSON *array*. APIs
that require real objects (Docker's `ExposedPorts`, free-form metadata fields,
nullable dictionaries explicitly set to `null`, …) rejected such payloads.
Worse, normalizing an explicit `null` into a nullable map iterated over `null`
and still emitted `"field": []`.

The historical fix attempt (PR #704) wrapped every payload in
`\ArrayObject([], \ArrayObject::ARRAY_AS_PROPS)`. It worked but was rejected by
the maintainer: ArrayObject has many flaws and caused issues in the past. A
custom lightweight class was preferred instead.

A hard constraint discovered along the way: generated model normalizers
implement Symfony's `NormalizerInterface`, whose `normalize()` return type is
declared as `array|string|int|float|bool|\ArrayObject|null`. PHP forbids
widening that union in implementations — so **no new class may ever be returned
by `normalize()` itself**, and a `\stdClass`-based value would be a runtime
`TypeError` if it were.

## Decision

Every generated library ships a dedicated container class,
`<Namespace>\Runtime\JsonObject`:

```php
class JsonObject extends \stdClass implements \ArrayAccess, \Countable, \IteratorAggregate
```

Storage is the inherited dynamic public properties of `\stdClass`. This single
choice gives us everything we need with zero magic:

- `json_encode(new JsonObject())` → `{}`, and filled instances encode as proper
  JSON objects (public dynamic properties);
- `$object['key'] = …` keeps working in generated loops (`ArrayAccess`);
- `$object->key` mirrors the old `ARRAY_AS_PROPS` ergonomics;
- it is `iterable`, satisfying the `iterable` type hints on model getters and
  setters;
- it passes `(array)` casts cleanly, which matters for multipart form bodies.

Where each JSON shape is represented in normalized payloads:

| JSON shape | Schema source | Normalized representation |
| ---------- | ------------- | -------------------------- |
| Named object | `type: object` with `properties`, referenced models | Generated model class |
| Free-form object / map | `additionalProperties` (`MapType`) | `<Ns>\Runtime\JsonObject` |
| Pattern-keyed map | `patternProperties` (`PatternMultipleType`) | `<Ns>\Runtime\JsonObject` |
| Array | `type: array` items | Plain PHP list array |
| Scalar / mixed | `string`, `int`, … , unconstrained | Passthrough scalar |

Implementation rules baked into the generators:

1. Both the denormalization and normalization map accumulators instantiate
   `JsonObject` (`MapType` / `PatternMultipleType` value statements).
2. Nested named-object properties wrap the inner `normalize()` result:
   `$value === null ? null : new JsonObject($this->normalizer->normalize(...))`.
   The null guard also fixes fatal errors on nullable object properties.
3. Nullable non-required properties get an explicit `null !== $object->getX()`
   guard next to `isInitialized()`, so an initialized-but-null property emits
   `null` (or is omitted under `skip-null-values`) instead of an empty collection.
4. `JsonObject` only ever appears **as values inside** the array returned by
   `normalize()` — never as the return value itself (see constraint above).
5. Multipart form endpoints serialize form values with
   `$serializer->serialize((array) $value, 'json')` when the value is an array
   or a `\stdClass` instance; `(array)` is a no-op on arrays and converts
   `JsonObject` back to its assoc array, preserving the wire format exactly.

## Consequences

- Empty objects/maps now serialize as `{}` everywhere; normalize and
  denormalize are symmetric.
- **BC break**: consumers post-processing raw normalized arrays now encounter
  `JsonObject` instances instead of plain arrays/`\ArrayObject` where maps and
  objects live. Code calling `getArrayCopy()` or relying on `==` comparisons
  against arrays must adapt (use `->toArray()`, `iterator_to_array()` or casts).
- `mixed`-typed values remain passthrough: an empty associative array stored in
  an unconstrained field still encodes as `[]` — statically undecidable.
- Models that represent extension containers still extend `\ArrayObject`
  (`Model/ClassGenerator.php`); replacing that with a trait-based approach is a
  candidate follow-up (see Korbeil's jane-v8 experiment).
- The class ships via the per-library runtime copy mechanism
  (`JsonSchema/Generator/Runtime/data/JsonObject.php`), so every generated
  library owns its own copy namespaced under its own `Runtime\` namespace — no
  cross-library coupling.

## Links

- Issue [#700](https://github.com/janephp/janephp/issues/700) — empty `additionalProperties` object generated as an array
- Issue [#680](https://github.com/janephp/janephp/issues/680) — empty objects in general
- PR [#704](https://github.com/janephp/janephp/pull/704) — the `\ArrayObject` approach and the maintainer's rationale for rejecting it
- [Korbeil's jane-v8 experiment](https://github.com/Korbeil/jane-v8/blob/main/src/Component/JsonSchemaGenerator/Runtime/AdditionalAndPatternProperties.php)
