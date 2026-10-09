---
name: jane-openapi-sdk
description: >-
  Generate and use a typed PHP SDK / API client from an OpenAPI or Swagger specification
  with Jane (jane-php). Use whenever the user wants to build, configure, generate or debug
  a PHP client for a REST API described by an OpenAPI document (spec file or URL):
  installing the right Jane packages, writing the generation config, running the
  generator, using the generated Client, authentication, HTTP decorators or
  troubleshooting.
---

# Jane: PHP SDK from an OpenAPI specification

Follow these steps in order. Do not skip the composer autoload step (step 3) — it is the
most commonly forgotten and produces "class not found" errors right after a successful
generation.

In this document, **Jane** refers to the Jane PHP libraries (jane-php). Requires **PHP >= 8.3**
(check the `php` requirement of the installed `jane-php/*` package for the final word).

## Step 1 — Identify the specification

Find the OpenAPI document to generate from. It can be a local file or a URL, JSON or YAML.

Read the version field at the top of the document:

- `swagger: "2.0"` → OpenAPI 2 (Swagger)
- `openapi: "3.0.x"` → OpenAPI 3.0
- `openapi: "3.1.x"` → OpenAPI 3.1

If the user only has API docs (no spec file), search first for an existing OpenAPI document;
many APIs publish one (often at `/docs`, `/api-docs` or a swagger UI). Large public
specifications are common — mention the `whitelisted-paths` option (see Troubleshooting)
before generating hundreds of unused endpoints.

## Step 2 — Install the packages

Add the generation library matching the spec version as a **dev** dependency, plus the
runtime package as a normal requirement (always needed — the generated code depends on it):

```bash
# OpenAPI 2 (Swagger)
composer require --dev jane-php/open-api-2
composer require jane-php/open-api-runtime

# OpenAPI 3.0.x
composer require --dev jane-php/open-api-3
composer require jane-php/open-api-runtime

# OpenAPI 3.1.x
composer require --dev jane-php/open-api-3-1
composer require jane-php/open-api-runtime
```

Generated code is not formatted by default. Recommended: also require
`friendsofphp/php-cs-fixer` as a dev dependency (or enable the `use-fixer` option, step 3).

**Symfony applications** — enable contrib recipes *before* installing, and the recipe adds
everything automatically (`bin/jane-open-api-generate`, `config/jane/open-api.php`,
`config/packages/open-api.yaml`):

```bash
composer config extra.symfony.allow-contrib true
```

## Step 3 — Write the configuration

The configuration is a plain PHP script returning an array. Default location:
`.jane-openapi` in the working directory (any name works if passed with `--config-file`).

```php
// .jane-openapi
return [
    'openapi-file' => __DIR__ . '/openapi.json',
    'namespace' => 'Vendor\Library\Generated',
    'directory' => __DIR__ . '/generated',
];
```

- `openapi-file`: path (local or `https://` remote) or URL to the spec, JSON or YAML.
- `namespace`: root namespace of all generated code.
- `directory`: output directory for generated code.

**Required companion step**: register the generated directory in composer's PSR-4 autoload:

```json
"autoload": {
    "psr-4": {
        "Vendor\\Library\\Generated\\": "generated/"
    }
}
```

Then run `composer dump-autoload`.

Full option list (date formats, strict mode, whitelisted paths, enums, fixer, ...):
see `references/options.md`.

## Step 4 — Generate

```bash
php vendor/bin/jane-openapi generate
```

With another config file name:

```bash
php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php
```

With a Symfony recipe, run `bin/jane-open-api-generate` instead.

For very large specifications, disable the PHP garbage collector to speed generation up:

```bash
php -d zend.enable_gc=0 vendor/bin/jane-openapi generate
```

No other CLI options exist: everything is configured via the config file so the team shares
the same generation parameters.

**After generation, always verify** the composer autoload mapping matches `namespace` /
`directory` (step 3), then check the summary output: the console prints per-type counts
(models, normalizers, runtime, client, endpoints...).

## Step 5 — Use the generated client

The generator produces:

- `Client` — root class with a static `create()` factory, one method per operation
  (method names come from each `operationId`)
- `Endpoint\` — one class per API endpoint
- `Model\` / `Normalizer\` — schema models and their Symfony-Serializer normalizers
- `Authentication\` — one plugin per declared security scheme (apiKey in header/query,
  HTTP basic, HTTP bearer)

```php
$apiClient = Vendor\Library\Generated\Client::create();
$foos = $apiClient->listFoo(); // operationId: listFoo
```

Version notes (Jane 8+):

- The HTTP client is a **Symfony `HttpClientInterface`**. PSR-18 / PSR-7 and HTTPlug
  plugins are **not** supported; there is no trailing `$fetch` argument on endpoint methods.
- For a raw response, use `executeRawEndpoint(new Endpoint\ListFoo())`.
- The spec's server URL is applied automatically by a decorator; pass `false` as fourth
  `create()` argument to opt out.

Authentication:

```php
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

$authenticationRegistry = new AuthenticationRegistry([new ApiKeyAuthentication($apiKey)]);
$client = Client::create(null, [$authenticationRegistry]);
```

Authentication plugins live in the generated `Authentication\` namespace — read the classes
Jane generated from the spec's `securitySchemes` to know their constructors.

Custom HTTP decorators and more client usage details: see `references/authentication.md`.

## Step 6 — Troubleshooting

| Symptom | Cause / fix |
|---|---|
| "Class not found" right after generation | Composer PSR-4 autoload missing or mismatched (step 3); run `composer dump-autoload` |
| Generation fails with SSRF / external reference error | Remote `$ref` are disabled by default. Enable `'allow-external-refs' => true` and restrict with `'external-ref-allowed-hosts' => [...]` |
| Local `$ref` to a sibling directory fails | Allow the common parent: `'allowed-local-ref-roots' => [__DIR__ . '/doc']` |
| Too many endpoints / huge spec | Filter with `'whitelisted-paths' => ['\/foo$', ...]` (regex, optional HTTP method array) |
| Nullable fields rejected / too strict | `'strict' => false` generates a more permissive client |
| Dates come back as strings instead of objects | Check `date-format` / `full-date-format` / `date-prefer-interface` options |
| Generated code style off | `composer require --dev friendsofphp/php-cs-fixer` and/or `'use-fixer' => true` + `'fixer-config-file'` |

Never edit generated files to fix behavior: adjust the config and regenerate, or extend the
client/endpoints in hand-written subclasses (the generated `Client` constructor is `final`;
a subclass adds methods but cannot change construction).

## References

- Progressively load these files only when the task needs the detail:
  - `references/options.md` — generation options catalog
  - `references/authentication.md` — auth plugins and decorator factories
  - `references/fetch-modes.md` — lazy / eager / preload GET modes
- Online docs: https://jane.jolicode.com/
