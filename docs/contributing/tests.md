# How our test suite works

This documentation describes how our test suite works and how you can interact with it.
It is mainly oriented for people wanting to contribute to theses libraries.

We test each components with a global composer configuration.
On repository root you can find a `composer.json` file that contains all components dependencies, in our CI we install
theses dependencies then we tests all components.

If you want to run it locally, you can do:

```php
composer update
vendor/bin/phpunit
```

You can also test a single component by using its named test suite (running phpunit with a path argument would
bypass the fixture excludes and fatal on generated classes, so use `--testsuite` instead):

```bash
vendor/bin/phpunit --testsuite JsonSchema
```

You can list all available suite names with `vendor/bin/phpunit --list-suites`.

## Fixture based tests

We mainly use JsonSchema / OpenAPI fixtures for our tests. When we add a feature, we create a new folder in related
component tests folder with a schema related to the added feature. That way when we run tests, it will generate a
`generated/` folder (gitignored) that will be compared with a baseline: either a committed `expected/` folder or an
`expected.manifest.json` snapshot file (see below).

### Baseline modes

- **Directory mode** (default): the fixture holds a committed `expected/` tree which is compared file by file with the
  fresh `generated/` output.
- **Manifest mode**: if the fixture contains an `expected.manifest.json` instead, generated files are hashed (sha256)
  and compared against the manifest. This is used for large "showcase" fixtures where committing thousands of expected
  files would create huge PR diffs and merge conflicts. On failure, the test lists exactly which files are missing,
  unexpected or changed.

In both modes, the *contents* of everything under a `Runtime/` folder of the generated output are skipped: those files
are verbatim copies of the templates shipped in `Generator/Runtime/data` and are identical for every fixture of a
component. They are asserted once per component, by the dedicated `runtime-boilerplate` fixture (which opts back into
full comparison via a `.full-compare` marker file). This keeps template changes from rippling into every fixture diff.
In directory mode the *set* of Runtime files is still compared per fixture: runtime classes are only generated when
required, so which files a fixture gets is fixture-specific — a mismatch means the committed `expected/` tree drifted
from what the generator produces and needs a refresh.

### Syntax gate

Before any baseline comparison, every generated `*.php` file is parsed with nikic/php-parser: matching a baseline only
proves the output did not change, not that it is valid PHP. A fixture that reproduces a known generator bug emitting
invalid PHP carries a `.known-invalid-php` marker file (its content links to the tracking issue). For those fixtures the
gate asserts the output still *fails* to parse — once the bug is fixed, the marker file must be deleted along with
refreshing the baseline.

### Static analysis of generated code

The syntax gate proves generated code *parses*; [Mago](https://mago.carthage.software/) proves more of it is
*correct*. The root `phpstan.neon` deliberately excludes fixture trees, so `mago-generated.toml` analyses the
committed `expected/` tree of **every** fixture in one two-second process (`runtime-boilerplate` excepted — its
deliberately partial trees would report their own missing runtime classes). This only works because every fixture
generates into its own namespace (`ExpectedNamespaceUniquenessTest` guards this; see
[ADR 0011](adrs/0011-static-analysis-of-generated-code.md)):

```bash
castor qa:mago:generated
```

Mago comes in as a composer dev dependency pinned to an exact release (the committed baseline is only reproducible
against that release), so `composer update` is all the setup the task needs. Issue codes that merely dislike the *shape* of generated output — values moving through `mixed`-typed normalizer
plumbing, docblock-conveyed types — are switched off in `mago-generated.toml`'s `ignore` list, each with its
justification; every remaining code marks a defect (see [ADR 0011](adrs/0011-static-analysis-of-generated-code.md)).
Findings that predate the gate are frozen in `mago-generated-baseline.toml`, so the check is green today and fails
on anything *new*. Fixing a generator bug shrinks the baseline; regenerate it with:

```bash
castor qa:mago:generated --generate-baseline
```

Never add an entry to the baseline by hand to silence a new finding — fix the generator, or the baseline stops
meaning anything.

> **Important:** a few fixtures are *executed* by functional tests (their classes are loaded at runtime, through the
> composer classmap or explicit `require_once`). Those fixtures keep their full `expected/` trees, including `Runtime/`
> copies: currently `multi-namespace` (JsonSchema), `docker-api`, `issue-793`, `bad-response-exception`,
> `multipart-boolean`, `multipart-nested-object` and `issue-680` (OpenAPI 2 / 3).

### Creating / refreshing baselines

A new fixture's config must generate into a namespace no other fixture uses — the convention is the component's
`…\Tests\Expected\` followed by the fixture directory name in StudlyCase (`all-of-merge` →
`…\Tests\Expected\AllOfMerge`). `ExpectedNamespaceUniquenessTest` fails if two fixtures declare the same class.

If you just created a fixture folder and don't have `expected/` folder, just run tests and check manually
`generated/` files and if everything is ok, you can copy the folder and name it `expected/`. If you have to do this
on multiple fixtures, you can use the `./replace-all-expected-fixtures.sh` script (optionally filtered by component,
e.g. `./replace-all-expected-fixtures.sh OpenApi3`). So please be sure that everything is okay before running this
script.

For manifest-mode fixtures, generate the output then rebuild the manifest:

```bash
castor jane:snapshot-manifest OpenApi3 github
```

Fixtures holding a manifest are skipped by the replace-all script; use the task above to refresh them.

By default, we don't run generated client related tests locally, because you need to run
[stoplightio/prism](https://github.com/stoplightio/prism) with configuration as following:

- `nohup prism mock -p 4010 -m src/Component/OpenApi3/Tests/client/openapi.yaml &`
- `nohup prism mock -p 4011 -m src/Component/OpenApi2/Tests/client/swagger.yaml &`
- `nohup prism mock -p 4012 -m src/Component/OpenApi31/Tests/client/openapi.yaml &`

Both theses will run a "fake" API based on the given OpenApi scheme. If you want to see logs, you can remove `nohup`
and `&` keywords on given commands.
With theses servers running you can now run generated client tests with `vendor/bin/phpunit --exclude-group none`
command.
Even if we don't run theses tests locally, they will always run on CI.
