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

Docs: https://jane.jolicode.com/latest/openapi/component/ — fetch the linked sections when a
step needs more detail. Requires PHP >= 8.3.

## 1. Get the specification

Read its version field: `swagger: "2.0"`, `openapi: 3.0.x` or `openapi: 3.1.x`.

No spec published? Write a minimal one covering only the endpoints the user needs:
https://jane.jolicode.com/latest/guides/external_client/

## 2. Install

| Spec | Generator (dev) |
|---|---|
| 2.0 | `composer require --dev jane-php/open-api-2` |
| 3.0.x | `composer require --dev jane-php/open-api-3` |
| 3.1.x | `composer require --dev jane-php/open-api-3-1` |

Always add the runtime: `composer require jane-php/open-api-runtime`.

Symfony app: run `composer config extra.symfony.allow-contrib true` first; the recipe then
creates `config/jane/open-api.php` and `bin/jane-open-api-generate`.

## 3. Configure

Ask the user for the namespace and output directory, then write `.jane-openapi`:

```php
<?php

return [
    'openapi-file' => __DIR__ . '/openapi.yaml',
    'namespace' => 'Vendor\Library\Generated',
    'directory' => __DIR__ . '/generated',
];
```

Map it in `composer.json`, then `composer dump-autoload`:

```json
"autoload": { "psr-4": { "Vendor\\Library\\Generated\\": "generated/" } }
```

Other options: https://jane.jolicode.com/latest/openapi/component/#options

## 4. Generate

```bash
php vendor/bin/jane-openapi generate
```

Ask whether generated code is committed or regenerated in CI. Never edit generated files:
change the config and regenerate.

## 5. Use

```php
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
// one class per securitySchemes entry, named <SchemeKey>Authentication
use Vendor\Library\Generated\Authentication\ApiKeyAuthentication;
use Vendor\Library\Generated\Client;

$client = Client::create(null, [
    new AuthenticationRegistry([new ApiKeyAuthentication($apiKey)]),
]);
$foos = $client->listFoo(); // method names come from operationId
```

Jane 8 uses Symfony `HttpClientInterface`: no PSR-18 / HTTPlug, no `$fetch` argument. Use
`$client->executeRawEndpoint(new \Vendor\Library\Generated\Endpoint\ListFoo())` for the raw
response.

Finish by calling one real endpoint to prove the client works.

| Topic | Docs |
|---|---|
| Authentication classes | [#authentication](https://jane.jolicode.com/latest/openapi/component/#authentication) |
| Custom decorators | [#having-custom-decorators](https://jane.jolicode.com/latest/openapi/component/#having-custom-decorators) |
| Base URL / servers | [#host-basepath-and-servers-support](https://jane.jolicode.com/latest/openapi/component/#host-basepath-and-servers-support) |
| Lazy / eager / preload GETs | [#fetch-modes](https://jane.jolicode.com/latest/openapi/component/#fetch-modes) |
| Extending client / endpoints | [#extending-the-client](https://jane.jolicode.com/latest/openapi/component/#extending-the-client) |
| `uuid` and other string formats | [#custom-string-formats](https://jane.jolicode.com/latest/openapi/component/#custom-string-formats) |

## Troubleshooting

| Problem | Fix |
|---|---|
| Class not found after generation | PSR-4 mapping must match `namespace` / `directory`; `composer dump-autoload` |
| Remote `$ref` rejected | Off by default: `'allow-external-refs' => true` + `'external-ref-allowed-hosts' => [...]` |
| Local `$ref` outside the spec directory rejected | `'allowed-local-ref-roots' => [__DIR__ . '/common-parent']` |
| Huge spec, only a few endpoints needed | `'whitelisted-paths' => ['\/foo$', ['\/bar', 'GET']]` |
| Slow generation on a huge spec | `php -d zend.enable_gc=0 vendor/bin/jane-openapi generate` |
