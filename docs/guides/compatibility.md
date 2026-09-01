# Compatibility and support

This page summarizes which specification versions are supported by Jane components.

## At a glance

- OpenAPI generation supports 2.0, 3.0.x and 3.1.x.
- JSON Schema generation supports draft 2019-09 and 2020-12.
- Validation support follows JSON Schema validation draft 2020-12.

## Support matrix

| Area | Supported versions | Notes |
|---|---|---|
| OpenAPI client generation | 2.0, 3.0.x, 3.1.x | See detailed mapping below to pick the right component |
| JSON Schema model generation | 2019-09, 2020-12 | Applies to generated models and normalizers |
| JSON Schema validation | 2020-12 | See [Validation guide](validation.md) for currently unsupported keywords |
| Nullability behavior | OpenAPI 2, 3.0.x, 3.1.x and JSON Schema | See [Nullability guide](nullable.md) for syntax per spec |

## OpenAPI component selection

Use this mapping when choosing which OpenAPI package/component to install.

| OpenAPI version in your schema | Composer package to install | Internal component family |
|---|---|---|
| 2.0 | `jane-php/open-api-2` + `jane-php/open-api-runtime` | OpenApi2 |
| 3.0.x | `jane-php/open-api-3` + `jane-php/open-api-runtime` | OpenApi3 |
| 3.1.x | `jane-php/open-api-3-1` + `jane-php/open-api-runtime` | OpenApi31 |

> [!TIP]
> If you handle mixed OpenAPI versions across projects, you can keep both `jane-php/open-api-2` and `jane-php/open-api-3` as dev dependencies. Jane will select the matching parser/component from the schema version.

## HTTP transport (Jane 8.0)

Since Jane 8.0, generated clients are built on [Symfony HttpClient](https://symfony.com/doc/current/components/http_client.html)
(`Symfony\Contracts\HttpClient\HttpClientInterface`) instead of PSR-18 / PSR-7 and the HTTPlug plugin system:

- pass a `Symfony\Contracts\HttpClient\HttpClientInterface` to `Client::create()` (PSR-18 clients are no longer accepted);
- `$additionalPlugins` are now **decorator factories** (`callable(HttpClientInterface): HttpClientInterface`), e.g. `AuthenticationRegistry` or your own closures;
- the `$fetch` parameter (`FETCH_OBJECT` / `FETCH_RESPONSE`) was removed: use `executeRawEndpoint()` for raw responses and
  [`x-fetch-mode`](../openapi/component.md#fetch-modes) for per-operation fetch strategies on GET/HEAD;
- generated authentication classes implement `decorate(string $method, string $url, array &$options): void` instead of `authentication(RequestInterface)`;
- custom `Endpoint` implementations must add `getFetchMode(): string` and drop the `$fetchMode` argument of `parseResponse()`;
- requests never throw on 3xx/4xx/5xx before parsing: status-to-exception mapping stays in the generated code, and raw
  responses handed to you keep Symfony's default behavior (`$throw = true` on explicit reads unless you pass `false`).

See [ADR 0011](../contributing/adrs/0011-symfony-httpclient-migration-x-fetch-mode.md) for the full decision record.

## Unsupported syntax across versions

Jane validates your document against the features supported by the selected
component before generating anything. When it finds something unsupported,
generation stops with an error listing every violation and its location in
your document (as a [JSON pointer](https://datatracker.ietf.org/doc/html/rfc6901)),
along with how to fix it.

The most common case is using OpenAPI 3.1 type arrays in a 3.0.x document:

```yaml
# Valid in OpenAPI 3.1.x, rejected by jane-php/open-api-3:
type:
  - string
  - 'null'
```

```text
Unsupported feature(s) found in your schema:
`type` must be a string in OpenAPI 3.0.x, array given ("string", "null") at "/components/schemas/Pet/properties/status/type". Type arrays are an OpenAPI 3.1 feature: generate your client with jane-php/open-api-3-1 instead, or rewrite this schema using `nullable: true` / `oneOf`.
```

Depending on your situation, either generate with the matching package
(`jane-php/open-api-3-1`) or rewrite the schema with the 3.0.x equivalents
(`nullable: true`, or a `oneOf` with a `'null'` entry). See the
[Nullability guide](nullable.md) for the correct syntax per spec version.

### Unsupported `type` for non-body parameters

Query, header, path and cookie parameters map their `schema.type` to a PHP
type. In a 3.0.x document only `string`, `number`, `boolean`, `integer`,
`array`, `object` and `file` are accepted: anything else — or a parameter
schema with neither `type` nor `enum` — stops generation with the offending
location instead of crashing midway:

```yaml
# Rejected by jane-php/open-api-3:
paths:
  /pets:
    get:
      parameters:
        - name: since
          in: query
          schema:
            type: 'null'
```

```text
Unsupported feature(s) found in your schema:
`type` "null" is not supported for non-body parameters, expected one of "string", "number", "boolean", "integer", "array", "object" or "file" at "/paths/~1pets/get/parameters/0/schema/type".
```

Object-typed parameters (e.g. `deepObject` style) and schemas relying on an
`enum` alone remain fully supported.

### Malformed `securitySchemes` entries

`securitySchemes` (in OpenAPI 3.x) and `securityDefinitions` (in OpenAPI 2.0)
are maps of name => scheme definition. Feeding them a bare scheme definition —
for instance pasting the scheme object directly under `securitySchemes`:

```yaml
# Rejected by all jane-php/open-api-* components:
components:
  securitySchemes:
    type: http
    scheme: basic
```

used to be silently ignored: generation succeeded but produced no
authentication classes. Such entries now stop generation with the offending
location and the expected shape:

```text
Unsupported feature(s) found in your schema:
Security scheme entry is not a valid Security Scheme Object (string given) at "/components/securitySchemes/type". `securitySchemes` must be a map of name => scheme definition, e.g. {"myAuth": {"type": "http", "scheme": "basic"}}.
```

Entries referencing an unknown scheme `type`, or missing the fields required by
their type (`name` / `in` for `apiKey`, `scheme` for `http` in OpenAPI 3.0.x,
`flows` for `oauth2`, ...), are rejected the same way. Scheme types that are
valid but produce no authentication classes with Jane (`oauth2`,
`openIdConnect`, ...) remain accepted.


