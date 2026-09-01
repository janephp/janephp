# ADR 0010: Consolidate OpenAPI 3 / 3.1 generator duplication

- **Status**: Accepted
- **Codified**: 2026-09

## Context

The OpenAPI 3 and 3.1 components were ~95% copy-paste forks: a set of
generators, guessers and factories existed twice with only namespace-level
differences. 100% identical clones included `RequestBodyContentGeneratorInterface`,
`DefaultBodyContentGenerator`, `JsonBodyContentGenerator`, `GuessClass` and
`GeneratorFactory`; `GetTransformResponseBodyTrait` was ~480 lines differing
only in the version schema model. The OpenAPI 3.1 models were also born as a
fork, later re-based onto the JSON Schema 2020-12 model.

The spec models themselves necessarily diverge (OpenAPI 3.1 uses the JSON
Schema 2020-12 vocabulary), so those stay version-local — this ADR only covers
the *shared* generator/guesser machinery.

## Decision

1. Move behaviour-identical clones into `OpenApiCommon\Generator` /
   `OpenApiCommon\Guesser` and delete the version-local copies (no BC aliases
   in the 8.x major).
2. Parameterize where a version differs only by model class:
   - `RequestBodyContent\AbstractBodyContentGenerator` takes the version
     `$schemaClass` constructor argument.
   - `GetTransformResponseBodyTrait` declares abstract hooks
     (`schemaClassName`, `responseClassName`, `responseNormalizerClassName`)
     implemented by each version's `EndpointGenerator`.
3. Keep version-local anything with real behavioural drift:
   `FormBodyContentGenerator`, `RequestBodyGenerator`, `OpenApiGuesser`,
   `SchemaGuesser`, `NonBodyParameterGenerator`, `GeneratorFactory`,
   `GuessClass` (they parameterize version-specific generators/models).
4. Consolidate the mis-spelled anyOf/oneOf reference guessers
   (`AnyOfReferencefGuesser`, `OneOfReferencefGuesser`) into a parameterized
   `OpenApiCommon\Guesser\OpenApiSchema\AbstractXOfReferenceGuesser` with
   hooks for the 3.1 allOf-wrapped-reference support and richer has-content
   detection, behind correctly-named version-local subclasses.

## Consequences

- Roughly 900 lines of identical code removed; fixes land in one place.
- Version behaviour is preserved: the full fixture suites for OpenApi2/3/31
  still pass byte-for-byte (except the intentional emitted-code modernizations
  in ADR-covered exception generation).
- Contributors touch shared machinery in `OpenApiCommon` and only wire
  version-specific hooks in the 3/3.1 subclasses.

## Links

- `src/Component/OpenApiCommon/Generator/RequestBodyContent/`
- `src/Component/OpenApiCommon/Generator/Endpoint/GetTransformResponseBodyTrait.php`
- `src/Component/OpenApiCommon/Guesser/OpenApiSchema/AbstractXOfReferenceGuesser.php`
