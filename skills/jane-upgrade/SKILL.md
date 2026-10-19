---
name: jane-upgrade
description: >-
  Upgrade a PHP project from Jane (jane-php) 7.x to 8.x: bump the jane-php packages,
  regenerate, and update the code that uses the generated models and OpenAPI clients
  (getters / setters replaced by public properties, PSR-18 / HTTPlug replaced by Symfony
  HttpClient, removed $fetch argument, lazy GET calls, new default for undeclared status
  codes). Use whenever the user wants to migrate, upgrade or fix a breakage after moving to
  Jane 8. For a new client or new models, use jane-openapi-sdk or jane-json-schema-models.
---

# Jane: upgrade from 7.x to 8.x

Changes: https://github.com/janephp/janephp/blob/next/CHANGELOG.md (`8.0.0` section) and
https://jane.jolicode.com/latest/guides/compatibility/#http-transport-jane-80 — fetch them
when a step needs more detail. Jane 8 requires PHP >= 8.3 (7.x accepted 8.1).

## 1. Take stock

- `composer show 'jane-php/*'`: every `jane-php/*` package moves to `^8.0` together.
- Find the config files (`.jane`, `.jane-openapi`, `config/jane/*.php`) and the generated
  directories.
- Find the code using the generated classes, and any class extending a generated `Client`,
  `Endpoint` or `Authentication` class.
- Run the test suite once to get a baseline.

## 2. Bump and regenerate

```bash
composer require --dev 'jane-php/open-api-3:^8.0'   # or open-api-2 / open-api-3-1 / json-schema
composer require 'jane-php/open-api-runtime:^8.0'   # or json-schema-runtime
php vendor/bin/jane-openapi generate                 # or vendor/bin/jane generate, bin/*-generate
```

Keep runtime behaviour close to 7.x for the first pass by adding to the OpenAPI config:

```php
'default-fetch-mode' => 'eager',           // 8.x default `lazy` defers GET / HEAD requests
'throw-unexpected-status-code' => false,   // 8.x default `true` throws on undeclared statuses
```

Ask the user whether to keep them or to adopt the 8.x defaults once the code works.

Remove `php-http/*`, `nyholm/psr7` and `psr/http-*` only if nothing else in the project uses
them.

## 3. Update the calling code

| 7.x | 8.x |
|---|---|
| `$model->getFooBar()` / `$model->setFooBar($v)` | `$model->fooBar` / `$model->fooBar = $v` |
| `$model->isInitialized('fooBar')` | `array_key_exists('fooBar', get_object_vars($model))` |
| `Client::create($psr18Client)` | `Client::create($symfonyHttpClient)` (`Symfony\Contracts\HttpClient\HttpClientInterface`) |
| HTTPlug plugins in `$additionalPlugins` | decorator factories: `fn (HttpClientInterface $c): HttpClientInterface => $c->withOptions([...])` |
| `HeaderDefaultsPlugin`, `AddHostPlugin`, `AddPathPlugin` | `withOptions(['headers' => [...]])`; the server URL from the spec is applied automatically |
| `$client->listFoo(..., Client::FETCH_RESPONSE)` | `$client->executeRawEndpoint(new Endpoint\ListFoo(...))`, a Symfony `ResponseInterface` |
| `$client->listFoo(..., Client::FETCH_OBJECT)` | drop the last argument |
| `null` returned for an undeclared status | `Exception\BadResponseException` (`getResponse()`), unless the option above is `false` |
| PSR-7 `StreamInterface` as binary body | `string` or `resource` |

A non-nullable model property without a schema default is uninitialized until assigned:
reading it on a hand-built model throws an `Error`.

With `lazy` GET / HEAD (PHP >= 8.4), the call returns a ghost proxy and the request, and its
exceptions, happen on the first property read: a `try` around the call alone catches
nothing. See https://jane.jolicode.com/latest/openapi/component/#fetch-modes

Endpoint methods whose spec requires a query, form or header parameter lost their `= []`
default: pass the array explicitly.

## 4. Update code extending generated classes

- `Client` subclasses: the constructor is `final`; build through `Client::create()`. An
  overridden `executeEndpoint()` must declare `: mixed`.
- `Endpoint` subclasses or custom endpoints: add `getTargetClass(): ?string` and
  `getFetchMode(): string`, drop the `$fetchMode` argument of `parseResponse()`.
- Custom authentication: implement `decorate(string $method, string $url, array &$options): void`
  (write to `$options['headers']` or `$options['query']`) instead of
  `authentication(RequestInterface)`.

## 5. Verify

```bash
grep -rnE 'FETCH_(OBJECT|RESPONSE)|Http\\Client\\|Psr\\Http\\(Client|Message)|isInitialized\(' src tests
```

Then run the static analysis and the test suite, and call one real endpoint (reading a
property of the result) or deserialize one real payload.
