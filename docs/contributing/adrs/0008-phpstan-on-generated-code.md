# ADR 0008: Static analysis of generated code targets PHPStan level 5

- **Status**: Accepted
- **Codified**: 2026-08, following [issue #1041](https://github.com/janephp/janephp/issues/1041)

## Context

Fixture tests compare generated output against a committed baseline, and the
syntax gate ([tests.md](../tests.md)) proves that output parses. Neither proves
it is *correct*: the root `phpstan.neon` excludes every `Tests/fixtures/*` and
`Tests/generated/*` path, so the code Jane actually ships to its users was
never type-checked. A generator change emitting type-invalid PHP passes the
suite as long as the baseline is refreshed alongside it.

Choosing a level needed data, so every level was measured over generated
output — a 3 535-file client generated from the GitHub API specification, and a
small JSON Schema validator fixture:

| Level | validator (13 files) | github (3 535 files) |
|------:|---------------------:|---------------------:|
| 0–1   | 0                    | 1                    |
| 2–3   | 0                    | 671                  |
| 4     | 3                    | 1 480                |
| **5** | **4**                | **1 560**            |
| 6     | 23                   | 10 800               |
| 7     | 27                   | 11 928               |
| 8     | 27                   | 12 004               |
| 9     | 127                  | 28 576               |

Everything up to level 5 describes a defect: an `int` passed where Symfony's
`NotBlank::$allowNull` expects `bool|null`, `@param array{…}` docblocks
containing `//` comments (invalid PHPDoc, which breaks IDEs and static analysis
for *users* of generated clients), a `SerializerInterface` property whose
`normalize()` call is not on that interface, default values contradicting their
own declared array shape, missing `return` statements, and dead branches.

Level 6 is a different kind of finding: the 5 → 6 step adds ~9 200 errors on a
real-world client, essentially all `missingType.*` — missing iterable value
types, generics and typehints. Generated code conveys types through `@var` /
`@param` docblocks by design, so that is a request to redesign the output, not
a bug report. Levels 7 and 8 add almost nothing on top of 6 (+1 128, +76), and
level 9 doubles the count again with `method.nonObject` on `mixed`, which
normalizers are by construction.

## Decision

1. **Generated code is analysed at level 5**, through a dedicated
   `phpstan-generated.neon`, run by `castor qa:phpstan:generated` and by its own
   CI job. The main `phpstan.neon` keeps excluding fixtures and keeps analysing
   `src/` at level 3.
2. **Level 6 and above are out of scope.** They trade an order of magnitude
   more findings for documentation style, not correctness.
3. **The analysis runs over committed `expected/` trees**, not `generated/`:
   they are the reviewed baseline, they need no prior test run, and the fixture
   tests already guarantee the two are identical. Fixtures are chosen so that
   each uses a distinct namespace, letting one run cover all of them; fixtures
   holding deliberately partial trees (`runtime-boilerplate`) are excluded,
   since their missing runtime classes are false positives — those templates are
   already analysed as part of `src/`.
4. **Pre-existing findings are frozen** in `phpstan-generated-baseline.neon`, so
   the gate blocks new regressions immediately instead of waiting on a cleanup.
   The baseline is regenerated (never hand-edited) as generator fixes shrink it.

## Consequences

- New generator work cannot introduce type errors into shipped output without
  the CI job going red.
- The baseline is a work list, not a resting place: its ~480 entries collapse
  into a handful of systematic generator patterns, each fixable on its own.
- `ConstraintReferencesTest`, which hand-rolls a regex hunting for referenced
  but ungenerated `*Constraint` classes, is subsumed by level 0 — PHPStan
  reports that for *every* class reference, not only constraints. It can be
  retired once the analysed fixture set covers the validator artifacts it guards.
- Adding a fixture does not automatically extend coverage: the fixture set in
  `phpstan-generated.neon` is curated and has to be extended deliberately.

## Links

- [How our test suite works](../tests.md)
- [ADR 0004: fixtures are immutable](0004-fixtures-are-immutable.md)
- [ADR 0007: tiered fixture baselines](0007-tiered-fixture-baselines.md)
