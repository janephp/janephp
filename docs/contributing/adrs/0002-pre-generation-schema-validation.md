# ADR 0002: Validate schemas before generation for clean errors

- **Status**: Accepted
- **Decided**: 2026-08, implemented in [PR #983](https://github.com/janephp/janephp/pull/983)
- **Origin**: issue [#759](https://github.com/janephp/janephp/issues/759)

## Context

Feeding an OpenAPI document that uses features outside a component's supported
feature set (e.g. JSON-Schema-style type arrays `type: [string, 'null']`, valid
in OAS 3.1, to `jane-php/open-api-3`) crashed deep inside denormalization with
a raw PHP `TypeError` pointing at generated model internals. Users had no way
to know the *document* was the problem, where the offending fragment was, or
what to do about it.

Requirements gathered from the failure mode:

1. Detect unsupported constructs **before** any generation work happens.
2. Report **every** violation in one run, each with an exact location and an
   actionable hint (which component to use, or how to rewrite the fragment).
3. Provide a generic mechanism so future checks do not need a second
   error-reporting path.
4. Never let an escaping raw PHP error reach the console.

## Decision

Generation is preceded by a validation pass against the selected component's
supported feature set:

1. **Error taxonomy**: `Jane\Component\JsonSchema\Exception\JaneExceptionInterface`
   marks all user-facing Jane errors; `InvalidSchemaException` carries one
   human-readable entry per violation. Existing exceptions
   (`CouldNotParseException`, `OpenApiVersionSupportException`) were retrofitted
   with the marker.
2. **Hook**: `SchemaParser::validateSchema()` runs right after the version
   guard in OpenApiCommon. The default implementation is a no-op, so components
   without extra rules are unaffected. New validators only need to plug into
   this hook.
3. **Component validators**: e.g. `TypeArrayValidator` (OpenApi3) recursively
   walks the decoded document, collecting every `type` array occurrence with its
   RFC 6901 JSON pointer. It skips vendor extensions (`x-*`) and data keys
   (`enum`, `examples`, …), stays context-aware inside `properties` maps, and
   uses `array_is_list()` so schemas declaring a property literally named
   `type` are not flagged.
4. **Safety net**: `SchemaParser::parseSchema()` catches escaping
   `\TypeError` and rethrows it as `CouldNotParseException`; structural
   violations short-circuit the JSON→YAML retry.
5. **Rendering**: both `GenerateCommand`s catch `JaneExceptionInterface` and
   render a styled `[ERROR]` block listing every violation with exit code
   `FAILURE`. Symfony bundle commands propagate the inner command's return code
   instead of always printing "Generation done.".

## Consequences

- Unsupported schema features fail fast, once, with every violation, its JSON
  pointer location, and fix hints (use `jane-php/open-api-3-1`, or rewrite with
  `nullable: true` / `oneOf`).
- Adding support-detection for a new construct is a small, local change: one
  validator class + registration on the existing hook — no new error path.
- Raw PHP errors can no longer leak to the console during parsing/generation.
- Behavior changes are limited to error reporting: no supported syntax or
  generated-code output changed.

## Links

- Issue [#759](https://github.com/janephp/janephp/issues/759) — OAS 3.1 type arrays crashing open-api-3
- PR [#983](https://github.com/janephp/janephp/pull/983) — implementation
- Follow-up: [PR #987](https://github.com/janephp/janephp/pull/987) — clean errors for non-body parameter types
- User-facing behavior documented in [Compatibility guide](../../guides/compatibility.md)
