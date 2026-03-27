# AGENTS Guide

This file gives coding agents the minimum project context needed to work safely in this repository.

## Project Snapshot

- Monorepo: Jane libraries for JsonSchema and OpenAPI code generation.
- Main language: PHP (minimum version `^8.1`).
- Autoload root namespace: `Jane\\` mapped to `src/`.
- Key docs: `README.md`, `CONTRIBUTING.md`, `CHANGELOG.md`.

## Repository Layout

- `src/Component/*`: core generators, runtimes, and component-specific tests.
- `src/Bundle/*`: Symfony bundles.
- `docs/`: documentation sources.
- `castor.php`: QA and documentation helper tasks.
- `phpunit.xml`: test configuration.
- `phpstan.neon`: static analysis configuration.

## Working Rules

- Follow existing coding style and conventions in touched files.
- Keep changes scoped: avoid unrelated refactors.
- Update or add tests when behavior changes.
- Never commit generated fixture churn unless it is part of the requested change.
- Prefer small, reviewable commits with clear intent.
- Never touch the generated or expected folders in tests fixtures

## Useful Commands

- Install dependencies:
  - `composer install`
- Run tests:
  - `vendor/bin/phpunit`
- Run static analysis:
  - `castor qa:phpstan`
- Run coding standards (dry run):
  - `castor qa:cs:check`
- Fix coding standards:
  - `castor qa:cs:fix`

## Notes for OpenAPI / Fixture Work

- Many tests rely on fixtures under component test directories.
- If generation logic changes expected outputs, regenerate fixtures consistently and keep the diff focused.
- Use provided helper scripts only when fixture refresh is explicitly needed:
  - `castor jane:replace-all-expected-fixtures`
  - `castor jane:clear-all-generated-fixtures`

