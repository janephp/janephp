# ADR 0004: Test fixtures are immutable — regenerate, never hand-edit

- **Status**: Accepted
- **Codified**: 2026-08 (the practice predates this record; see the [test suite docs](../tests.md) and root `AGENTS.md`)

## Context

Jane's test suite asserts on *generated code*: each fixture folder under
`src/Component/*/Tests/fixtures/` holds a schema plus a committed `expected/`
tree; running the tests generates into `generated/` and compares both.

The committed `expected/` trees are the assertion baseline. Hand-editing them:

- makes the suite pass without the generator actually producing the reviewed
  output;
- hides regressions: a later generator change gets blamed for (or credited
  with) lines no code path ever produced;
- produces unmaintainable diffs across dozens of fixtures and components;
- bypasses tooling — these paths are excluded from phpstan and php-cs-fixer,
  so hand edits are not even style-checked.

## Decision

1. Never manually edit anything under `expected/` or `generated/` fixture
   folders.
2. The only sanctioned workflow is:
   change generator logic → run the component tests → review `generated/`
   output deliberately → refresh `expected/` from it once verified correct.
3. For a new fixture folder, run the tests then copy `generated/` to
   `expected/` after manual review. For many fixtures at once, use the
   dedicated helpers only when a fixture refresh is explicitly intended:
   - `castor jane:replace-all-expected-fixtures` (`./replace-all-expected-fixtures.sh`)
   - `castor jane:clear-all-generated-fixtures` (`./clear-all-generated-files.sh`)
4. In a pull request, any diff inside `expected/` must be explainable by a
   generation-logic change present in the same PR. Unrelated fixture churn is
   not acceptable.

## Consequences

- Fixture diffs become a review signal instead of noise: they always mean "the
  generated output changed on purpose".
- Contributors changing generators should expect and embrace large-but-scoped
  fixture updates in their PRs.
- AI agents must treat `expected/` as read-only and regenerate through the
  helpers rather than patching files to make tests pass.

## Links

- [How our test suite works](../tests.md)
- Root `AGENTS.md`, Working Rules ("Never touch the generated or expected folders in tests fixtures")
