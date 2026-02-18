# Guides & Recipes

This section gathers advanced use-cases, integrations with other tools (like Symfony or API Platform), and solutions to common problems.

## Framework Integrations

* **[API Platform & DTOs](apip_dto.md)**
  Learn how to use Jane-generated models as *Data Transfer Objects* (DTOs) for your API Platform resources, effectively separating your Doctrine entities from your public API.

* **[Communicating between two Symfony applications](two_symfony_apps.md)**
  A practical guide on generating a client in a Symfony application "A" to consume the API exposed by a Symfony application "B" (useful for microservices or inter-app architecture).

## Advanced Features

* **[Data Validation](validation.md)**
  How to integrate `symfony/validator` to automatically validate data within your generated objects (adding constraints, validating before serialization).

* **[Handling Nullable Values](nullable.md)**
  Understand the important distinction Jane makes between a **missing** value (key missing in JSON) and a **null** value, and how to handle these cases in your PHP code.

## Client & HTTP Configuration

* **[Using a Custom HTTP Client](external_client.md)**
  By default, Jane uses PSR-18 auto-discovery. This guide explains how to explicitly inject your own client (e.g., Symfony HttpClient or Guzzle) to handle timeouts, middlewares, or specific logging.

* **[Elasticsearch](elasticsearch.md)**
  Configuration specifics for generating a robust client dedicated to Elasticsearch APIs.
