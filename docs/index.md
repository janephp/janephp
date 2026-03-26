# 🌱 Jane documentation

Welcome to the documentation for **Jane**, a suite of libraries dedicated to generating high-quality PHP code from specifications.

Jane helps you save time and reduce maintenance costs by automating the creation of:
* **HTTP Clients** from OpenAPI / Swagger specifications.
* **DTOs (Data Transfer Objects)** and Hydrators from JSON Schemas.

---

## Not sure what you need?

If you are confused about the difference between OpenAPI and JSON Schema, or don't know which library to pick for your specific use case, check our comparison guide.

[Help me choose →](choose.md)

---

## Where do you want to start?

If you already know which component you need, jump directly to the documentation:

> [!IMPORTANT]
> **What's supported**
> - OpenAPI: v2, v3.0.x and v3.1.x
> - JSON Schema generation: draft 2019-09 and draft 2020-12
> - JSON Schema validation: draft 2020-12 (see [Validation guide](guides/validation.md))

### 🚀 OpenAPI
You have an **OpenAPI (Swagger)** specification file (v2, v3.0.x or v3.1.x) and you want to generate a complete **PHP HTTP Client** to interact with an API.

[Get Started with OpenAPI →](openapi/getting_started.md)

### 📦 JSON Schema
You have a **JSON Schema** file and you want to generate strictly typed **PHP Models (DTOs)** and the logic to serialize/deserialize them.

[Get Started with JSON Schema →](json_schema/getting_started.md)

For a complete overview of versions and feature coverage, see the [Compatibility guide](guides/compatibility.md).
