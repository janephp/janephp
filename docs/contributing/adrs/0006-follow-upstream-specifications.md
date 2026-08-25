# ADR 0006: Follow upstream specifications faithfully

- **Status**: Accepted
- **Codified**: 2026-08, while adding the `x-namespace` feature ([#838](https://github.com/janephp/janephp/issues/838))

## Context

Jane parses specifications into its own generated models before guessing and
generating code. Anything the parser silently drops is invisible to every
downstream feature.

This bit us concretely with `x-namespace`: OAS 3.1 guarantees preservation of
`x-*` vendor extensions ([Specification
Extensions](https://spec.openapis.org/oas/v3.1.0#specification-extensions) — a
guarantee `version31.json` itself cites), yet Jane's 3.1 models dropped them:
the meta-schema declared extensions only through an indirection
(`"$ref": "#/$defs/specification-extensions"`), which the extensions detection
does not resolve, so every generated 3.1 model discarded `x-*` data at parse
time. The divergence from the specification was silent and only surfaced
because a feature needed the data.

## Decision

1. When an OpenAPI / JSON Schema specification defines a construct (fields,
   vendor extensions, semantics), Jane's parsers must preserve and expose it
   faithfully. A gap between what a specification guarantees and what Jane's
   parsed models expose is a bug, not a limitation.
2. Meta-schema updates (`version*.json`) must propagate to the internal models
   they generate (`src/Component/*/JsonSchema/`): parser parity is part of the
   work when specifications evolve.
3. Spec-guaranteed data may not be repurposed or overloaded for features:
   new capabilities are expressed with explicit annotations (e.g.
   `x-namespace` for sub-namespaces) rather than abusing unrelated fields,
   tags or comments.

## Consequences

- Parser-parity work becomes mandatory upkeep: when upstream specifications or
  their meta-schemas change, the internal models must be regenerated and the
  diff reviewed in the same effort.
- Features can rely on spec-guaranteed data being present in parsed models.
- Occasional regeneration churn inside internal model/normalizer trees is an
  accepted cost, kept reviewable by scoping each regeneration to its cause.

## Links

- [#838](https://github.com/janephp/janephp/issues/838) — the `x-namespace` feature that surfaced the 3.1 gap
- [OAS 3.1 §Specification Extensions](https://spec.openapis.org/oas/v3.1.0#specification-extensions)
- [ADR 0004](0004-fixtures-are-immutable.md) — how regeneration output stays reviewable
