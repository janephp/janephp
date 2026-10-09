---
name: jane-json-schema-models
description: >-
  Generate typed PHP DTO model classes and their normalizers from a JSON Schema
  specification (draft 2019-09 or 2020-12) with Jane (jane-php). Use whenever the user
  wants to build PHP POPOs, DTOs, serializers or validators from a JSON Schema file. For
  HTTP client generation from an OpenAPI document, use the jane-openapi-sdk skill
  instead.
---

# Jane: PHP models from a JSON Schema specification

Follow these steps in order. Trigger check: this skill is for **JSON Schema** documents
(top-level `type`, `properties`, `$schema: ".../draft-2019-09/schema"` or similar). If the
input is an OpenAPI/Swagger document (with `info`, `paths`), the task belongs to the
`jane-openapi-sdk` skill — stop and defer there.

In this document, **Jane** refers to the Jane PHP libraries (jane-php). Requires
**PHP >= 8.3** (check the `php` requirement of the installed `jane-php/*` package for the
final word).

## Step 1 — Confirm the schema

Locate the JSON Schema document. Local file or `https://` URL, JSON or YAML. Jane supports:

- Generation: drafts **2019-09** and **2020-12**
- Validation: draft **2020-12** semantics (opt-in `validation` option, step 5)

If several schema files reference each other via relative `$ref`, note the root document Jane
should be pointed at; split layouts may need the `allowed-local-ref-roots` option
(see Troubleshooting).

## Step 2 — Install the packages

The generation library is a **dev** dependency; the runtime package is a normal requirement
(the generated code depends on its tiny runtime classes):

```bash
composer require --dev jane-php/json-schema
composer require jane-php/json-schema-runtime
```

Generated code is not formatted by default. Recommended: also require
`friendsofphp/php-cs-fixer` as a dev dependency (or enable the `use-fixer` option, step 3).

**Symfony applications** — enable contrib recipes *before* installing; the recipe adds
`bin/json-schema-generate`, `config/jane/json-schema.php` and
`config/packages/json-schema.yaml` automatically:

```bash
composer config extra.symfony.allow-contrib true
```

## Step 3 — Write the configuration

The configuration is a plain PHP script returning an array. Default location: `.jane` in the
working directory (any name works if passed with `--config-file`).

```php
// .jane
return [
    'json-schema-file' => __DIR__ . '/json-schema.json',
    'root-class' => 'MyModel',
    'namespace' => 'Vendor\Library\Generated',
    'directory' => __DIR__ . '/generated',
];
```

- `json-schema-file`: path (local or remote URL) of the schema, JSON or YAML.
- `root-class`: class name for the *root object* of the schema; unused if the root object
  has no properties.
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

Full option list (dates, strict mode, enums-as-objects, fixer, validation...): see
`references/options.md`.

## Step 4 — Generate

```bash
php vendor/bin/jane generate
```

With another config file name:

```bash
php vendor/bin/jane generate --config-file=jane-configuration.php
```

With a Symfony recipe, run `bin/json-schema-generate` instead.

No other CLI options exist: everything lives in the config file so teams share the same
generation parameters. The console prints a per-type summary (models, normalizers,
validators, runtime).

**After generation, always verify** the composer autoload mapping matches `namespace` /
`directory` (step 3).

## Step 5 — Use the generated models

Jane generates plain old PHP objects (POPOs) with setters/getters, plus normalizers and the
scaffolding for Symfony Serializer:

- `Model\` namespace: model classes
- `Normalizer\` namespace: one normalizer per model + a `JaneObjectNormalizer`
  acting as a Symfony normalizer and lazy-loading the others

Building a serializer outside Symfony:

```php
$normalizers = [
    new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
    new \Vendor\Library\Generated\Normalizer\JaneObjectNormalizer(),
];

$serializer = new \Symfony\Component\Serializer\Serializer(
    $normalizers,
    [new \Symfony\Component\Serializer\Encoder\JsonEncoder()],
);
$serializer->deserialize('{"...": "..."}', MyModel::class, 'json');
```

In Symfony, the recipe's `config/packages/json-schema.yaml` wires this; models are
autowireable as usual.

Optional **JSON Schema validation** during (de)normalization is enabled with the
`validation` option (2020-12 semantics) — see `references/options.md`.

## Step 6 — Troubleshooting

| Symptom | Cause / fix |
|---|---|
| "Class not found" right after generation | Composer PSR-4 autoload missing or mismatched (step 3); run `composer dump-autoload` |
| Generation fails with SSRF / external reference error | Remote `$ref` are disabled by default. Enable `'allow-external-refs' => true` and restrict with `'external-ref-allowed-hosts' => [...]` |
| Local `$ref` to a sibling directory fails | Allow the common parent: `'allowed-local-ref-roots' => [__DIR__ . '/doc']` |
| Nullable properties rejected / too strict | `'strict' => false` |
| Enum values become plain string/int | Enable `'enums-as-objects' => true` to generate native PHP backed enums |
| Dates decode as strings | Check `date-format` / `full-date-format` / `date-prefer-interface` / `date-input-format` |
| Generated code style off | `'use-fixer' => true` (+ optional `fixer-config-file`), or run php-cs-fixer manually |

Never edit generated files to fix behavior: adjust the configuration and regenerate.

## References

- Progressively load this file when the task needs generation-option details:
  - `references/options.md` — generation options catalog
- For building an HTTP client from an OpenAPI document (not this skill): use the
  `jane-openapi-sdk` skill.
- Online docs: https://jane.jolicode.com/
