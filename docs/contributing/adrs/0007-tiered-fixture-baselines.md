# ADR 0007: Tiered fixture baselines — content trees, hash manifests, centralized runtime boilerplate

- **Status**: Accepted
- **Codified**: 2026-08

## Context

Fixture-based tests compare generated output against a committed baseline. With
~24k committed `expected/` files — 85% of them concentrated in ten oversized
fixtures — every change to a shared generator template rippled into hundreds or
thousands of fixture files. Concurrent PRs touching the same generators then
collided on merge, and reviewers had to wade through mechanically repeated
diffs.

## Decision

1. **Runtime boilerplate is asserted once per component**, not per fixture.
   Files under any `Runtime/` folder of generated output are verbatim copies of
   templates from `Generator/Runtime/data`. The comparison harness
   (`FixtureComparisonTrait`) skips them everywhere; each component ships a
   `runtime-boilerplate` fixture that opts back into full comparison through a
   `.full-compare` marker file.
2. **Large showcase fixtures use hash manifests** (`expected.manifest.json`,
   sha256 per file) instead of committed `expected/` trees. Manifests are
   rebuilt with `castor jane:snapshot-manifest <component> <fixture>` after
   reviewing the generated output; the replace-all script skips them.
3. **Fixtures executed by functional tests are exempt**: their full
   `expected/` trees (including `Runtime/` copies) stay committed, because
   tests like `MultiNamespaceDenormalizationTest` load these classes at runtime.
4. Fixture immutability rules from [ADR 0004](0004-fixtures-are-immutable.md)
   still apply: baselines are regenerated from verified output, never
   hand-edited.

## Consequences

- PRs changing shared templates touch one boilerplate fixture (plus manifests,
  if applicable) instead of every fixture in the repository.
- Showcase fixture updates collapse to a few manifest lines; the diff tool for
  content review is `castor jane:snapshot-manifest` plus inspecting `generated/`.
- New fixtures default to directory mode; only genuinely large fixtures should
  opt into manifest mode.
- Functional tests must keep their execution dependencies in committed
  `expected/` trees — check the list in `docs/contributing/tests.md` before
  pruning or converting a fixture.

## Links

- [How our test suite works](../tests.md)
- [ADR 0004: fixtures are immutable](0004-fixtures-are-immutable.md)
