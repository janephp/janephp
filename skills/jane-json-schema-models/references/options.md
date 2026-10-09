# Jane JSON Schema generation options (condensed)

Condensed from the official documentation. Generate-time options, set in the `.jane` PHP
config array. Verify details against https://jane.jolicode.com/ before relying on nuances.

## Core options

| Option | Default | Effect |
|---|---|---|
| `reference` | enabled | Adds JSON Reference support to generated code |
| `strict` | `true` | Strict mode honors declared nullability; `false` generates more permissive code |
| `clean-generated` | `true` | Deletes output directory content before each generation |
| `use-fixer` | `false` | Runs CS fixer after generation |
| `fixer-config-file` | — | Custom php-cs-fixer config path (drops Jane's default fixer config) |

## Date handling

- `date-format`: PHP date format used to encode/decode `date-time` `\DateTime` values.
- `full-date-format`: same for `date` (dates only).
- `date-prefer-interface`: generate `\DateTimeInterface` instead of `\DateTime`
  (Carbon-compatible).
- `date-input-format`: format used when *denormalizing*; defaults to `date-format`. With
  the default `RFC3339`, denormalizers accept a lenient `Z` + optional fractional seconds;
  with a custom format, parsing is strict (`InvalidDateException` otherwise).

## Serialization behavior

| Option | Default | Effect |
|---|---|---|
| `skip-null-values` | `true` | Skip nullable properties set to `null` during normalization |
| `skip-required-fields` | `false` | Drop the "required must be present" behavior during denormalization |
| `include-null-value` | `true` | Manage null values in generated code |
| `use-cacheable-supports-method` | `false` | `CacheableSupportsMethodInterface` for serializer perf |
| `enums-as-objects` | `false` | Schemas with `enum` + `type: string`/`integer` become native PHP backed enums |
| `default-additional-properties` | per-component default | Force `true` (open) / `false` (closed) for unspecified `additionalProperties`; explicit spec values always win |

## Validation (draft 2020-12)

- `validation`: enable JSON Schema validation code, **disabled by default** — useful when
  denormalized payloads must be checked against the schema.
- `validators`: array of `Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface`
  instances to register additional validators (only meaningful with validation enabled).

## References and security

| Option | Default | Effect |
|---|---|---|
| `allow-external-refs` | `false` | Allow resolving `http(s)` remote `$ref` (SSRF protection: keep off unless legitimately needed) |
| `external-ref-allowed-hosts` | `[]` | Host allowlist when `allow-external-refs` is on (subdomains included) |
| `external-ref-follow-redirects` | `false` | Follow HTTP redirects when fetching remote refs (redirect targets are *not* rechecked) |
| `allowed-local-ref-roots` | `[]` | Extra local root directories a `$ref` may resolve into (declare `realpath()`ed roots when symlinks are involved). Always declare the common parent directory of split document/schema layouts |

## Per-schema `x-namespace` extension

In the schema document itself, `x-namespace` on a definition moves its generated classes
(Model + Normalizer + Validator) to a sub-namespace: `Model\<X\Namespace>\` — useful to
organize large schemas. Renaming/removing it after generation is a BC break for consumers.

## Programmatic customization (experimental)

Generation is customizable programmatically through **experimental** generation events
(ADR 0013): build a Symfony `EventDispatcher`, attach subscribers, pass it to
`Jane::build($options, $dispatcher)`. Lifecycle events report progress; mutation events
(`PropertyGuessedEvent` for type replacement, `PropertyGeneratedEvent` /
`ClassGeneratedEvent` to decorate the model's PhpParser AST) are model-file hooks only.
Change **types** through `PropertyGuessedEvent` so models and normalizers stay consistent.
A throwing listener aborts generation (`GenerationFailedException`). Not configurable from
the `.jane` config file — programmatic only.
