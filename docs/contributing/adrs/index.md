# Architecture Decision Records

This section records the significant technical decisions taken while developing
Jane's generators and runtimes. When generation behavior looks non-obvious — or
when you are about to change code touching one of these areas — read the
relevant record first so we do not relitigate (or accidentally revert) a
decision that was already made for good reasons.

Each record follows a lightweight ADR format:

- **Status**: where the decision stands (`Accepted`, `Deprecated`, `Superseded by ADR-XXXX`).
- **Context**: the problem, constraints and forces at play.
- **Decision**: what we decided and how it is implemented.
- **Consequences**: what becomes easier, harder, or impossible because of it.
- **Links**: issues, pull requests and related documentation.

## Index

| Record | Title | Status |
| ------ | ----- | ------ |
| [0001](0001-json-object-for-complex-objects.md) | Use `JsonObject` for complex objects & maps in generated payloads | Accepted |
| [0002](0002-pre-generation-schema-validation.md) | Validate schemas before generation for clean errors | Accepted |
| [0003](0003-no-arrayobject.md) | No `\ArrayObject` — dedicated value objects & `iterable` hints | Accepted |
| [0004](0004-fixtures-are-immutable.md) | Test fixtures are immutable — regenerate, never hand-edit | Accepted |
| [0005](0005-php-floor.md) | Stay within the PHP `^8.1` floor | Accepted |
| [0006](0006-follow-upstream-specifications.md) | Follow upstream specifications faithfully | Accepted |
| [0007](0007-tiered-fixture-baselines.md) | Tiered fixture baselines — content trees, manifests, centralized boilerplate | Accepted |
| [0008](0008-instance-owned-reference-resolution.md) | Instance-owned reference resolution instead of global static state | Accepted |
| [0009](0009-generation-options-value-object.md) | Frozen generation `Options` value object as single source of defaults | Accepted |
| [0010](0010-openapi-3-31-generator-consolidation.md) | Consolidate OpenAPI 3 / 3.1 generator duplication | Accepted |
| [0011](0011-static-analysis-of-generated-code.md) | Generated code is statically analysed with Mago | Accepted |

## Adding a new record

1. Copy an existing record as a template into `NNNN-short-title.md`, using the
   next free number.
2. Fill in Status / Context / Decision / Consequences / Links. Keep it factual:
   record why the losing options lost, not only why the winner won.
3. Add it to the index above and, if it changes user-facing behavior, to the
   root `CHANGELOG.md`.
