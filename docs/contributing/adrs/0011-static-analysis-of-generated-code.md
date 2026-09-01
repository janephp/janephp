# ADR 0011: Generated code is statically analysed with Mago

- **Status**: Accepted
- **Codified**: 2026-08, following [issue #1041](https://github.com/janephp/janephp/issues/1041)

## Context

Fixture tests compare generated output against a committed baseline, and the
syntax gate ([tests.md](../tests.md)) proves that output parses. Neither proves
it is *correct*: the root `phpstan.neon` excludes every `Tests/fixtures/*` and
`Tests/generated/*` path, so the code Jane actually ships to its users was
never type-checked. A generator change emitting type-invalid PHP passes the
suite as long as the baseline is refreshed alongside it.

Two analysers were measured over the full corpus — the committed `expected/`
trees of all 183 fixtures, ~20 200 files:

|                        | PHPStan 2.2 (level 5)      | Mago 1.47                  |
|------------------------|----------------------------|----------------------------|
| Wall time, full corpus | 638 s                      | **2 s**                    |
| Processes needed       | 5 (OOM-killed above ~4 000 files) | **1**               |
| Extra tooling          | group packing + verbatim NEON baseline merging | **none** |
| Findings               | 11 795                     | 39 369 (after `ignore` list) |

Both tools agree on the defect core — the clusters line up exactly where they
implement the same check (2 258 missing `return` statements, 270 invalid
parameter defaults) — but they cut off differently at the top. PHPStan has a
severity dial: level 5 is the highest level where every finding is a defect,
because 5 → 6 adds ~9 200 `missingType.*` findings on one real-world client
alone, and generated code conveys types through `@var` / `@param` docblocks by
design. Mago has no levels; the same line must be drawn as a per-code `ignore`
list instead. Measured over the corpus, 17 codes carry 89 096 of 128 465
default-config findings (69 %) and all of them flag the *shape* of generated
output rather than bugs in it: the `mixed-*` family (values moving through
`mixed`-typed normalizer plumbing into arguments and typed public properties —
territory PHPStan only enters at levels 8–9), `invalid-iterator` / `invalid-member-selector` (measured: every finding
in the corpus resolves to `mixed` or `nonnull`), the `less-specific-*`
covariance codes, generics-annotation requests, and dynamic
`$object->{$property}` access, which is how normalizers work.

## Decision

1. **Generated code is analysed with Mago**, configured in
   `mago-generated.toml`, run by `castor qa:mago:generated` and by its own CI
   job. The main `phpstan.neon` keeps excluding fixtures and keeps analysing
   `src/` at level 3 — this gate is *additional* and touches nothing in
   `src/`. Mago's two-second single-process run is the decisive argument: the
   PHPStan equivalent needs 638 seconds, five processes, group-packing tooling
   and hand-rolled baseline merging, purely because one PHPStan process cannot
   hold the corpus.
2. **Strictness-preference codes are switched off, not baselined.** The 17
   codes in the config's `ignore` list ask for differently shaped output
   (explicit generics, no `mixed` plumbing, no dynamic property access) — a
   redesign request, not a bug report. Baselining them would bury the ~39 000
   genuine findings under 89 000 entries nobody intends to burn down. Each
   entry in the list carries its justification; audit what is being suppressed
   with `mago analyze --skip-ignores`.
3. **Every remaining code marks a defect and is kept**, at every severity:
   `minimum-fail-level` is `note`, so a new finding of a help-level code (for
   example `redundant-comparison`) fails the gate exactly like an error.
4. **The analysis runs over committed `expected/` trees**, not `generated/`:
   they are the reviewed baseline, they need no prior test run (the CI job
   works from a clean checkout plus `composer update`), and the fixture tests
   already guarantee the two are identical. Fixtures holding deliberately
   partial trees (`runtime-boilerplate`) are excluded, since their missing
   runtime classes are false positives — those templates are already analysed
   as part of `src/`.
5. **Coverage is every fixture, not a sample.** A gate over a curated subset
   lets the rest regress silently. The config points at the components'
   `Tests/fixtures` roots, so a new fixture is analysed the moment its
   `expected/` tree is committed. The one structural exception: manifest-mode
   fixtures (`github`, `twitter`, `api-platform-demo` — see
   [ADR 0007](0007-tiered-fixture-baselines.md)) commit no `expected/` tree,
   so their output is invisible to this analysis; the per-test php-parser
   syntax gate is what keeps a validity floor under them. Extending the task
   to their freshly generated output would close that gap and is left as a
   follow-up.
6. **Every fixture generates into its own namespace** (its config appends a
   segment derived from the fixture directory name), guarded by
   `ExpectedNamespaceUniquenessTest`. An analyser resolves duplicate class
   names against an arbitrary declaration, which makes analysing colliding
   fixtures in one process meaningless — and the collision cannot be predicted
   from the directory layout: before namespaces were made unique, the OpenApi2
   `issue-770` fixture generated into the OpenApi3 test namespace. Unique
   namespaces fix that at the source instead of working around it in tooling.
7. **Pre-existing findings are frozen** in `mago-generated-baseline.toml`
   (12 483 entries covering 39 369 findings), so the gate blocks new
   regressions immediately instead of waiting on a cleanup. The baseline is
   regenerated (never hand-edited) as generator fixes shrink it:
   `castor qa:mago:generated --generate-baseline`. It uses Mago's `loose`
   variant — entries match on file, code and message, not line numbers, so
   unrelated edits do not churn it — and regeneration is byte-deterministic.
   `mago analyze --remove-outdated-baseline-entries` can drop fixed entries
   without re-hiding anything new.
8. **Versions are pinned**: the Mago release in `composer.json`
   (`carthage-software/mago`, pinned exactly — no `^`) and the analysed PHP
   version in `mago-generated.toml`. The committed baseline is only
   reproducible against those pins — bumping either is a deliberate change
   that regenerates the baseline in the same commit.

## Consequences

- New generator work cannot introduce type errors into shipped output without
  the CI job going red — at a cost of ~2 seconds, cheap enough to run locally
  before every push.
- The baseline is a work list, not a resting place: its entries collapse into
  a handful of systematic generator patterns, each fixable on its own (a
  single one — `??`-coalescing values whose left side can never be null —
  accounts for 20 029 findings).
- `ConstraintReferencesTest`, which hand-rolls a regex hunting for referenced
  but ungenerated `*Constraint` classes, is subsumed by the
  `non-existent-class-like` family — Mago reports that for *every* dangling
  reference, not only constraints. It can be retired now that every fixture is
  analysed.
- A new fixture whose config reuses an existing namespace is rejected by
  `ExpectedNamespaceUniquenessTest` before it can poison the analysis.
- Mago is a young tool (1.x, actively developed): minor releases may change
  what is reported, which the version pin turns from silent drift into an
  explicit, reviewable baseline diff. The defect/preference split lives in one
  committed config and can be revisited without re-measuring from scratch.

## Links

- [How our test suite works](../tests.md)
- [ADR 0004: fixtures are immutable](0004-fixtures-are-immutable.md)
- [ADR 0007: tiered fixture baselines](0007-tiered-fixture-baselines.md)
- [Mago analyzer documentation](https://mago.carthage.software/)
