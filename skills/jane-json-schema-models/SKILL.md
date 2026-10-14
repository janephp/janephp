---
name: jane-json-schema-models
description: >-
  Generate typed PHP DTO model classes and their normalizers from a JSON Schema
  specification (draft 2019-09 or 2020-12) with Jane (jane-php). Use whenever the user
  wants to build PHP POPOs, DTOs, serializers or validators from one or several JSON
  Schema files. For HTTP client generation from an OpenAPI document, use the
  jane-openapi-sdk skill instead.
---

# Jane: PHP models from a JSON Schema

Docs: https://jane.jolicode.com/latest/json_schema/component/ — fetch the linked sections
when a step needs more detail. Requires PHP >= 8.3.

If the document has `openapi`/`swagger` and `paths`, stop: use the `jane-openapi-sdk` skill.
Jane generates from drafts 2019-09 and 2020-12.

## 1. Install

```bash
composer require --dev jane-php/json-schema
composer require jane-php/json-schema-runtime
```

Symfony app: run `composer config extra.symfony.allow-contrib true` first; the recipe then
creates `config/jane/json-schema.php` and `bin/json-schema-generate`.

## 2. Configure

Ask the user for the namespace and output directory, then write `.jane`:

```php
<?php

return [
    'json-schema-file' => __DIR__ . '/schema.json',
    'root-class' => 'Order',
    'namespace' => 'Vendor\Library\Generated',
    'directory' => __DIR__ . '/generated',
];
```

Several schemas referencing each other: use `mapping` instead, so each schema keeps its own
namespace and cross-schema `$ref` resolve to the right classes:

```php
<?php

return [
    'mapping' => [
        __DIR__ . '/schema-foo.json' => [
            'root-class' => 'Foo',
            'namespace' => 'Vendor\Library\Foo',
            'directory' => __DIR__ . '/generated/Foo',
        ],
        __DIR__ . '/schema-bar.json' => [
            'root-class' => 'Bar',
            'namespace' => 'Vendor\Library\Bar',
            'directory' => __DIR__ . '/generated/Bar',
        ],
    ],
    // use-fixer, fixer-config-file and clean-generated go here, never inside a mapping entry
];
```

Details: https://jane.jolicode.com/latest/json_schema/component/#multi-schemas-generation

Map every generated namespace in `composer.json`, then `composer dump-autoload`:

```json
"autoload": { "psr-4": { "Vendor\\Library\\Generated\\": "generated/" } }
```

Other options: https://jane.jolicode.com/latest/json_schema/component/#options

## 3. Generate

```bash
php vendor/bin/jane generate
```

Ask whether generated code is committed or regenerated in CI. Never edit generated files:
change the config and regenerate.

## 4. Use

```php
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;
use Vendor\Library\Generated\Model\Order;
use Vendor\Library\Generated\Normalizer\JaneObjectNormalizer;

$serializer = new Serializer(
    [new ArrayDenormalizer(), new JaneObjectNormalizer()],
    [new JsonEncoder()],
);
$order = $serializer->deserialize($json, Order::class, 'json');
```

With `mapping`, register one `JaneObjectNormalizer` per generated namespace.

Finish by deserializing a real sample payload to prove the models work.

Validate payloads against the schema (draft 2020-12 rules) with `'validation' => true`:
https://jane.jolicode.com/latest/guides/validation/

## Troubleshooting

| Problem | Fix |
|---|---|
| Class not found after generation | PSR-4 mapping must match `namespace` / `directory`; `composer dump-autoload` |
| Remote `$ref` rejected | Off by default: `'allow-external-refs' => true` + `'external-ref-allowed-hosts' => [...]` |
| Local `$ref` outside the schema directory rejected | `'allowed-local-ref-roots' => [__DIR__ . '/common-parent']` |
| Referenced schema gets an odd class name / wrong namespace | List that schema in `mapping` too |
