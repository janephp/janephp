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

