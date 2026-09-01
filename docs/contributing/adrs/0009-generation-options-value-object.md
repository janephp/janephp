# ADR 0009: Frozen generation `Options` value object as single source of defaults

- **Status**: Accepted
- **Codified**: 2026-09

## Context

Generation options were read directly from raw arrays at five or more sites —
`JsonSchema\Jane::build()`, `OpenApiCommon\JaneOpenApi::build()`, the OAI2/3/31
`JaneOpenApi` subclasses, the three guesser factories and the console
`ConfigLoader`s — each repeating its own defaults for the same keys. The
defaults drifted (e.g. `reference` defaulted to `false` for OAI and was a
*required* key for JsonSchema `build()`), and reading `$options['endpoint-generator'] ?:`
raised a notice when the key was absent programmatically.

## Decision

1. Introduce `Jane\Component\JsonSchema\Generator\Options`, an immutable value
   object (readonly promoted properties) with one canonical default per option
   and `fromArray()` / `toArray()` converters.
2. All array-based public entry points keep accepting plain arrays and hydrate
   the DTO (`fromArray()`), so a new option needs its default declared in one
   place.
3. The console `ConfigLoader` derives its defaults from the DTO, keeping its
   historical `reference => true` override (the console always generated with
   references on). OpenAPI-only keys are filtered out for the JsonSchema
   config vocabulary.
4. `reference` now defaults to `false` everywhere programmatically, removing
   the JsonSchema required-key trap; `endpoint-generator` uses `??` so an
   absent key no longer warns.

## Consequences

- Options and their defaults are discoverable in a single file.
- Programmatic callers that omitted `reference` see a behavior change (was
  fatal for JsonSchema, `false` for OAI) — now uniformly `false`.
- The console keeps producing identical output to before (its `reference`
  override and the full default set are preserved).

## Links

- `src/Component/JsonSchema/Generator/Options.php`
- `src/Component/JsonSchema/Console/Loader/ConfigLoader.php`
- `src/Component/OpenApiCommon/Console/Loader/ConfigLoader.php`
