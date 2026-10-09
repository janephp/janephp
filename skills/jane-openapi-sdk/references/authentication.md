# Jane OpenAPI: authentication and HTTP client customization

Jane generates an authentication plugin per security scheme declared in the spec, and the
generated `Client::create()` accepts decorator factories for anything else. Details below;
full official docs: https://jane.jolicode.com/

## Authentication

Supported declared schemes (OpenAPI `components.securitySchemes`):

- `apiKey` in **header** and in **query** (v2 and v3)
- HTTP **basic** and HTTP **bearer** (v3)

Each generated plugin lives in the generated `Authentication\` namespace and implements
`Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin`. Its
`decorate(string $method, string $url, array &$options): void` receives Symfony HttpClient
request options **by reference** — header schemes add to `options['headers']`, query
schemes to `options['query']`.

Wiring via `AuthenticationRegistry` (a decorator factory passed in the second `create()`
argument). The registry matches each endpoint's `security` scopes to the right plugin:

```php
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

$client = Client::create(
    null,
    [new AuthenticationRegistry([new ApiKeyAuthentication($apiKey)])],
);
```

Notes:

- `security` fields must be correctly set in the spec for the registry matching to apply;
  if the spec declares no `security`, pass the plugin through `create()` as above anyway.
- Read the generated `Authentication\` classes to know each plugin's constructor
  (credentials shape depends on the scheme).

## HTTP client

`Client::create()` first argument accepts any `Symfony\Contracts\HttpClient\HttpClientInterface`
(`Symfony\Component\HttpClient\HttpClient::create()` is used when omitted).

- Jane 8+ **never** throws on 3xx/4xx/5xx at the HTTP layer: responses are consumed with
  no-throw methods, and the generated code maps status codes to models/exceptions itself.
- Migrating from Jane 7.x: PSR-18 / PSR-7 clients are not accepted; wrap or replace with
  `HttpClientInterface`.

## Server URL behavior

Jane never builds absolute URLs in endpoints. When the spec declares a server URL
(OpenAPI 3 `servers`, OpenAPI 2 `host`/`basePath`), `create()` wraps the client with a
`ServerUrlHttpClient` decorator (scheme, host, port, prepended base path; prefers `https`).

To opt out (own base-URL management), pass `false` as the **fourth** argument:

```php
$client = Client::create($myHttpClient, [], [], false);
```

That parameter only exists on clients whose spec declared a server URL.

## Decorator factories

The second `create()` argument is a list of
`callable(HttpClientInterface): HttpClientInterface` — classes with `__invoke` or plain
closures. Applied left-to-right **after** the server URL decorator:

```php
$client = Client::create(null, [
    static fn (HttpClientInterface $http): HttpClientInterface => $http->withOptions([
        'headers' => ['Accept-Language' => 'fr-FR'],
    ]),
]);
```

- A decorator thrown exception surfaces at call time (eager) or at first proxy access (lazy).
- Responses are buffered by default; `withOptions(['buffer' => false])` streams instead,
  and responses must then be consumed in order.

## Extending the client

Custom behaviors that the spec cannot express:

1. Subclass the generated `Endpoint\...` class and override e.g.
   `getQueryOptionsResolver()` to tweak a normalizer (see docs example: base64-encoding a
   query option).
2. Subclass the generated `Client` and override the matching method to execute your
   subclassed endpoint instead.

Constraints to remember:

- The generated client's constructor is `final` (`create()` uses `new static(...)`):
  subclasses add methods only; inject dependencies via `create()`'s normalizer/decorator
  arguments or build the serializer yourself.
- Endpoint methods and `operationId`-driven names can be renamed at generation time
  (`operation-namings` option), not by editing generated code.
