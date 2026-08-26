# ADR 0003: No `\ArrayObject` — use dedicated value objects and `iterable` hints

- **Status**: Accepted
- **Decided**: by the maintainer when rejecting [PR #704](https://github.com/janephp/janephp/pull/704); the type-hint part was settled earlier, in commit [`155a5976e`](https://github.com/janephp/janephp/commit/155a5976e2653d0eab0d6a6c22dc8b6f57bec53c) ("Use iterable instead of ArrayObject type hint", 2020)
- **Related**: [ADR 0001](0001-json-object-for-complex-objects.md) records what to use instead for JSON objects & maps

## Context

`\ArrayObject` keeps resurfacing as a "natural" fit for object-shaped payloads and
collection-ish properties: it implements `\ArrayAccess`, is `iterable`, and Symfony
normalizers historically returned it. Each time it was tried, it caused problems:

- [PR #704](https://github.com/janephp/janephp/pull/704) wrapped every normalized
  payload in `\ArrayObject([], \ArrayObject::ARRAY_AS_PROPS)` to fix empty-object
  encoding ([#700](https://github.com/janephp/janephp/issues/700),
  [#680](https://github.com/janephp/janephp/issues/680)). The maintainer rejected
  it: ArrayObject has many flaws and caused issues in the past — surprising
  `(array)` casts and `json_encode` output, `==` comparisons that do not behave
  like arrays, magic property access (`ARRAY_AS_PROPS`) hiding typos, implicit
  shared mutable state.
- Model getters/setters typed against `\ArrayObject` leaked an implementation
  detail into every consumer; they were migrated to plain `iterable` hints in
  2020 and must not come back.
- Symfony's `NormalizerInterface::normalize()` declares its return type as
  `array|string|int|float|bool|\ArrayObject|null`. PHP forbids widening that union
  in implementations, so generated normalizers keep the literal signature — but
  that does **not** make returning `\ArrayObject` acceptable: it stays in the
  union only because the interface forces it.

## Decision

Do not introduce new `\ArrayObject` usage anywhere — neither in generators,
library code, nor generated code:

1. **Generated payloads**: never wrap or emit `\ArrayObject`. Free-form objects
   and maps use `<Ns>\Runtime\JsonObject`, lists use plain PHP arrays (see
   [ADR 0001](0001-json-object-for-complex-objects.md)).
2. **Type hints**: model getters/setters and public APIs take or return
   `iterable`, never `\ArrayObject`.
3. **Normalizers**: keep Symfony's frozen return-type union verbatim, but only
   ever return arrays/scalars; `JsonObject` appears exclusively *as values
   inside* the returned array.
4. **Library code**: internal accumulators and containers use plain arrays or a
   dedicated class, not `\ArrayObject`.

### Known debt (do not replicate)

Legacy usages still exist; they are accepted debt, not precedent:

- Retired: every entry once listed here was paid off by the document-models migration —
  Jane's own OpenAPI 2.0 / 3.0 / 3.1 & JsonSchema document models (and their
  `ARRAY_AS_PROPS` accumulators, previously excluded from phpstan / php-cs-fixer)
  plus the `instanceof \ArrayObject` check in `OperationUrlNaming` all moved onto the
  `<Namespace>\Runtime\AdditionalPropertiesInterface` +
  `<Namespace>\Runtime\AdditionalAndPatternProperties` trait pair.

A former entry of this list — extension-container models extending
`\ArrayObject` (`src/Component/OpenApiCommon/Generator/Model/ClassGenerator.php`)
— was paid off following [Korbeil's jane-v8 experiment](https://github.com/Korbeil/jane-v8/blob/main/src/Component/JsonSchemaGenerator/Runtime/AdditionalAndPatternProperties.php):
generated models carrying `additionalProperties` / `patternProperties` now use
the per-library `<Ns>\Runtime\AdditionalAndPatternProperties` trait paired with
the `<Ns>\Runtime\AdditionalPropertiesInterface` interface
([#867](https://github.com/janephp/janephp/issues/867)), so all their values are
reachable through `foreach`, `ArrayAccess`, `count()`, `toArray()` and
`json_encode`.

## Consequences

- New code must justify any container choice other than array / `JsonObject` /
  dedicated value object; "\ArrayObject" is not an option.
- Reviewers can reject ArrayObject reintroductions by linking this record.
- The legacy debt list above is the single source of truth for "where it is
  still allowed to exist" — update it when debt is paid off.

## Links

- Issue [#700](https://github.com/janephp/janephp/issues/700), [#680](https://github.com/janephp/janephp/issues/680) — the empty-object bugs behind PR #704
- PR [#704](https://github.com/janephp/janephp/pull/704) — rejected `\ArrayObject` approach and maintainer's rationale
- Commit [`155a5976e`](https://github.com/janephp/janephp/commit/155a5976e2653d0eab0d6a6c22dc8b6f57bec53c) — iterable hints replacing ArrayObject hints
- [ADR 0001](0001-json-object-for-complex-objects.md) — `JsonObject` as the payload container
