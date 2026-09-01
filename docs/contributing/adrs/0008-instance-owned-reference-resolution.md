# ADR 0008: Instance-owned reference resolution instead of global static state

- **Status**: Accepted
- **Codified**: 2026-09

## Context

`Jane\Component\JsonSchemaRuntime\Reference` historically kept all of its
configuration and fetch caches in static properties: `$allowExternalRefs`,
`$allowedExternalHosts`, `$followRedirects`, `$allowedLocalRefRoots`, and the
`$fileCache` / `$pointerCache` / `$arrayCache` maps. Generation entry points
configured these through static setters (`Reference::allowExternalRefs()`,
…), which made every `Reference` in a process share one configuration and one
cache — impossible to run two builds with different reference policies in the
same process, and a source of cross-build cache pollution.

`new Reference($ref, $origin)` is emitted by the committed document-model
normalizers and by generated runtime code without any configuration argument,
so removing the static surface entirely would break that generated-code
contract.

## Decision

1. Extract all resolver state into `Jane\Component\JsonSchemaRuntime\ReferenceResolver`,
   an instance holding the five configuration values and the three caches.
2. `Reference::__construct(string $reference, string $origin, ?ReferenceResolver $resolver = null)`
   falls back to a shared `ReferenceResolver::default()` when none is passed,
   keeping the generated-code `new Reference($ref, $origin)` contract intact.
3. The generation entry points (`Jane::build()`,
   `OpenApiCommon\JaneOpenApi::build()`) apply their reference-related options
   to a resolver via `applyOptions()` and thread it through the pipeline.
4. The historical static setters and `resetConfig()` are removed (8.x major).

## Consequences

- Two builds in one process no longer share reference caches or policy.
- Generated code keeps working unmodified (default resolver fallback).
- The default resolver is a documented process-wide singleton only for
  generated-code compatibility; in-repo generation paths pass an explicit
  resolver.

## Links

- `src/Component/JsonSchemaRuntime/ReferenceResolver.php`
- `src/Component/JsonSchemaRuntime/Reference.php`
- `src/Component/JsonSchema/Jane.php`
- `src/Component/OpenApiCommon/JaneOpenApi.php`
