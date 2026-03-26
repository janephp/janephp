# How to manage nullable properties

Most of the time, the schema you get from vendor have issues about nullability of their properties.

Here Jane has an option called `strict` mode, by default we will follow strictly your schema types. But you can
switch to non-strict mode (by having the option set to false in your Jane configuration file: `"strict" => false`).
By doing this, any property of your schema will be considered nullable.

You can also try to fix your schema, here are some tips depending on which schema you are using

## JSON Schema

Jane supports JSON Schema draft 2019-09 and 2020-12, both of which support `null` type. You just have to add it to your
type field as follows:

```yaml
type:
  - 'null'   # Note the quotes around 'null'
  - string
```

## OpenAPI v2 / Swagger

OpenAPI v2 does not support `null` type. Instead, most libraries does support `x-nullable` field in order to fake
`null` support. You can use it as follows:

```yaml
type: string
x-nullable: true
```

If you are using OpenAPI v2, consider migrating to OpenAPI v3 to get proper nullability support.

## OpenAPI v3.0.x

OpenAPI v3 still does not support `null` type but added a `nullable` field in order to say that property is
nullable or not. By default this field is set to `false`. You can use it as follows:

```yaml
type: string
nullable: true
```

## OpenAPI v3.1.x

OpenAPI 3.1 is compatible with JSON Schema semantics for this topic. In practice, use JSON Schema `null` type in your
`type` list exactly as shown above. You can still find `nullable` in older specifications, but for new schemas prefer
JSON Schema `null` type.

## Related

- [OpenAPI getting started](../openapi/getting_started.md)
- [JSON Schema getting started](../json_schema/getting_started.md)
- [Compatibility guide](compatibility.md)
