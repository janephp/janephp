# Jane OpenAPI generation options (condensed)

Condensed from the official documentation. Generate-time option, set in the `.jane-openapi`
PHP config array. Verify details against https://jane.jolicode.com/ before relying on
nuances.

## Core options

| Option | Default | Effect |
|---|---|---|
| `reference` | enabled | Adds JSON Reference support to generated code |
| `strict` | `true` | Strict mode honors nullability standards; `false` gives a more permissive client |
| `clean-generated` | `true` | Deletes output directory content before each generation |
| `use-fixer` | `false` | Runs CS fixer after generation |
| `fixer-config-file` | — | Custom php-cs-fixer config path (drops Jane's default fixer config) |

## Date handling

| Option | Effect |
|---|---|
| `date-format` | PHP date format used to encode/decode `date-time` `\DateTime` values |
| `full-date-format` | Same, for `date` (only dates) |
| `date-prefer-interface` | Generate `\DateTimeInterface` instead of `\DateTime` (Carbon-compatible) |
| `date-input-format` | Format used when *denormalizing*; defaults to `date-format`. With the default `RFC3339`, denormalizers accept a `Z` + fractional seconds leniency; with a custom format parsing is strict (`InvalidDateException` otherwise) |

## Serialization behavior

| Option | Default | Effect |
|---|---|---|
| `skip-null-values` | `true` | Skip nullable properties set to `null` during normalization |
| `skip-required-fields` | `false` | Drop the "required must be present" behavior during denormalization |
| `include-null-value` | `true` | Manage null values in generated code |
| `use-cacheable-supports-method` | `false` | `CacheableSupportsMethodInterface` for serializer perf |
| `enums-as-objects` | `false` | Schemas with `enum` + `type: string`/`integer` become native PHP backed enums |
| `default-additional-properties` | per-spec | `true`/`false` forces unspecified `additionalProperties` open/closed in every component; explicit spec values always win; affects the generated `Collection` validation constraint |

## Validation (JSON Schema)

- `validation`: enable JSON Schema-style validation code, **disabled by default**.
- `validators`: array of `ValidatorInterface` extra validator instances (only with validation on).

## References and security

| Option | Default | Effect |
|---|---|---|
| `allow-external-refs` | `false` | Allow resolving `http(s)` remote `$ref` (SSRF protection: keep off unless legitimately needed) |
| `external-ref-allowed-hosts` | `[]` | Host allowlist when `allow-external-refs` is on (subdomains included) |
| `external-ref-follow-redirects` | `false` | Follow HTTP redirects when fetching remote refs (redirect targets are *not* rechecked) |
| `allowed-local-ref-roots` | `[]` | Extra local root directories a `$ref` may resolve into (use `realpath()`ed paths when symlinks are involved) |

## Selecting what to generate

`whitelisted-paths`: generate only matching endpoints (and only their reachable models):

```php
'whitelisted-paths' => [
    '\/foo$',                     // path regex, any method
    ['\/foo\/(bar|baz)'],         // same, array form
    ['\/foo$', 'GET'],            // regex + single method
    ['\/foo$', ['POST', 'PUT']],  // regex + several methods
],
```

Models not reachable from any whitelisted endpoint are skipped entirely.

## Client behavior

| Option | Default | Effect |
|---|---|---|
| `generate-error-exceptions` | `true` | Generate + throw a dedicated exception class per declared error response (status >= 400) |
| `throw-unexpected-status-code` | `true` | Throw `BadResponseException` (exposes `getResponse()`) when no declared response matches; `false` returns `null` |
| `default-fetch-mode` | `lazy` | Per-GET/HEAD default: `lazy` \| `eager` \| `preload` — see `references/fetch-modes.md` |
| `operation-namings` | built-in | Array of `OperationNamingInterface` consulted in order; replaces the default chain entirely (append built-ins `OperationIdNaming` / `OperationUrlNaming` for fallback) |
| `custom-query-resolver` | — | Custom per-path/per-method/per-parameter query normalizers extending `CustomQueryResolver` |
| `custom-string-format-mapping` | — | Map `format` keywords (e.g. `uuid`) to classes (e.g. `\Symfony\Component\Uid\UuidV4::class`); pass a matching Symfony serializer `NormalizerInterface` as additional normalizer to `create()` |
| `endpoint-generator` | built-in | Custom endpoint generator class (extends the default) or instance of `EndpointGeneratorInterface` |

## Specification extensions (per-artifact, in the spec itself)

- `x-namespace` on an **operation**: moves its Endpoint class (and inline body/response
  models) to `Endpoint\<X\Namespace>\`; on a **schema**: moves Model (+ normalizer/
  validator) to `Model\<X\Namespace>\`. Segments may be separated by `\` or `/`.
- `x-fetch-mode` on a **GET/HEAD operation**: `lazy` (default) | `eager` | `preload`.
- Renaming/removing an `x-namespace` after generation is a BC break for consumers.

## Naming contract reminder

Custom namings must be deterministic, pure, stateless, return valid PHP identifiers, and
end the chain with built-in namings if default fallback should still apply (returning `''`
defers to the next naming; all empty chain = generation failure).
