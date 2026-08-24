# ADR 0005: Stay within the PHP `^8.1` floor

- **Status**: Accepted
- **Codified**: 2026-08 (the constraint predates this record)

## Context

`composer.json` requires `"php": "^8.1"`. The coding-standard configuration
explicitly defers nicer rules until the floor moves — `.php-cs-fixer.php`
disables `get_class_to_class_keyword` and `modernize_strpos` with the comment
*"Can be removed once PHP requirement is upgraded"*.

This is a code *generator* library: syntax choices in `src/` shape both the
library itself and, indirectly, the environment assumptions of every generated
codebase. Jumping ahead of the declared floor breaks installs on supported PHP
versions and produces inconsistent style between old and new code.

## Decision

1. Code under `src/` must run on PHP 8.1: no syntax, API or constant
   introduced after 8.1 (readonly classes, DNF types, newer functions, …).
2. When bumping the `composer.json` floor, revisit the gated php-cs-fixer rules
   (`get_class_to_class_keyword`, `modernize_strpos`, …) in the same change
   and enable whatever becomes available.
3. Do not enable fixer rules that would rewrite pre-existing code en masse
   without that bump; keep the "Can be removed once PHP requirement is
   upgraded" comment as the tracking mechanism.

## Consequences

- Contributors working on newer runtimes must resist modern syntax in library
  code; CI runs against the supported matrix anyway.
- The floor bump is a deliberate event: one PR updates `composer.json`, the
  gated fixer rules, and any resulting reformat together.
- Generated-code templates must also avoid assuming anything newer than what
  user projects can run.

## Links

- Root `composer.json` (`require.php`)
- `.php-cs-fixer.php` ("Can be removed once PHP requirement is upgraded")
