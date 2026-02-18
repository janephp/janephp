# Choose the component you need

Before using Jane you have to understand the two schema descriptors we are using:

- [JSON Schema](https://json-schema.org/)
- [OpenAPI](https://swagger.io/specification/)

Each of theses schema descriptors have their own use and you should choose the one that fit your use-case.

## JSON Schema

“JSON Schema is a vocabulary that allows you to annotate and validate JSON documents”. So it will allow you to describe
your existing data format(s) and provides clear human- and machine- readable documentation.
Actually Jane does not support validation but it will come soon. With that descriptor you can describe documents and
Jane will generate models & normalizers. This is mostly used when you need DTO or you need to use/store a JSON object
that our normalizer can normalize/denormalize.

> [!TIP]
> You can read more about what is JSON Schema and how to use it on the excellent “Understanding JSON Schema” book.

If you think this is what you need, you can read our getting started Getting started: using JSON Schema

Or you can see our detailled guides with more feature-focused stuff:
- Elasticsearch models
- API Platform DTO

## OpenAPI

“The OpenAPI Specification (OAS) defines a standard, language-agnostic interface to RESTful APIs which allows both
humans and computers to discover and understand the capabilities of the service without access to source code,
documentation, or through network traffic inspection”.
This descriptor is on top of JSON Schema, so every feature we have in JSON Schema will be in OpenAPI. And Jane will
also generate a Client, endpoints and needed exceptions (for HTTP error responses). This is used with any API Client,
some API even provide this file, like [Stripe](https://raw.githubusercontent.com/stripe/openapi/master/openapi/spec3.json)
or [Slack](https://raw.githubusercontent.com/slackapi/slack-api-specs/master/web-api/slack_web_openapi_v2.json).

> [!TIP]
> You can read more about what is OpenAPI and how to use it on API Handyman tutorials.

If you think this is what you need, you can read our getting started Getting started: using OpenAPI

Or you can see our detailled guides with more feature-focused stuff:
- External API Client
- Between two Symfony apps
