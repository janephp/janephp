# ADR 0012: Symfony HttpClient migration and `x-fetch-mode` (GET/HEAD only)

- **Status**: Accepted
- **Codified**: 2026-09 (8.0)
- **Origin**: issues [#367](https://github.com/janephp/janephp/issues/367) (fetch strategies),
  [#1036](https://github.com/janephp/janephp/issues/1036) (multipart per-part filename/Content-Type),
  [#789](https://github.com/janephp/janephp/issues/789) (applyServerPlugins), [#844](https://github.com/janephp/janephp/issues/844) (exception response access)

## Context

The OpenAPI runtime and generated clients are built on PSR-18 + PSR-7 + HTTPlug
plugins (`PluginClient`, `AddHostPlugin`/`AddPathPlugin`, `AuthenticationRegistry`
as an HTTPlug plugin, `MultipartStreamBuilder`). This stacks three abstraction
layers over a transport, forces PSR-7 body juggling on generated code, and makes
per-operation fetch strategies impossible: `executeEndpoint()` always performs a
blocking request → parse cycle, and the legacy `$fetch`/`FETCH_OBJECT` parameter
of `parseResponse()` is vestigial (never branched on).

Meanwhile users need strategies per GET/HEAD operation: `lazy` (defer send, parse
on access), `eager` (today's blocking behavior), `preload` (batch-send, parse on
access). Mutating verbs must always remain eager and must never accept the
extension, silently or otherwise (ADR 0002: clean, complete pre-generation errors).

## Decision

1. **Symfony-native transport.** Remove PSR-18, PSR-7, PSR-17 and HTTPlug from
   the OpenAPI runtime and generated clients. Generated clients take a
   `Symfony\Contracts\HttpClient\HttpClientInterface` and a
   `SerializerInterface` (2-arg constructor); bodies are `string|resource|array`.
   Add `symfony/http-client ^6.4 || ^7.0 || ^8.0`; drop `psr/*`, `php-http/*`,
   `nyholm/psr7`.
2. **Plugins become `HttpClientInterface` decorators.** Decorator contract:
   `__invoke(HttpClientInterface $inner): HttpClientInterface`. Shipped
   decorators (same `Client\Plugin/` FQCNs as before where possible):
   - `ServerUrlHttpClient` rewrites the URL to the spec server URL (scheme, host,
     port, base path prepended). It does **not** use `base_uri`: verified against
     symfony/http-client, RFC 3986 resolution **drops the base path for
     absolute-path request URLs** (`/pets` + `base_uri=…/api/v1` → `/pets`),
     while HTTPlug's `AddPathPlugin` blindly prepends
     (`/api/v1/pets`). Jane's generated clients always use absolute-path URIs,
     so only explicit prepending reproduces the old `AddHostPlugin` +
     `AddPathPlugin` pair.
   - `AuthenticationRegistry` is a decorator factory that reads authentication
     scopes from `$options['extra']` (the only option bag Symfony guarantees to
     pass through and ignore if unsupported), applies matching
     `AuthenticationPlugin`s and strips the marker key before forwarding.
   - `$additionalPlugins` in `create()` is redefined as a list of decorator
     factories (`callable(HttpClientInterface): HttpClientInterface`), applied
     left-to-right in the generated `create()` via a `foreach` loop.
   - `AuthenticationPlugin` changes to
     `decorate(string $method, string $url, array &$options): void` +
     `getScope(): string` (header/query auth only; no body access).
3. **`x-fetch-mode`, GET/HEAD only.** Per-operation OpenAPI extension with values
   `lazy` (default) | `eager` | `preload`. GET/HEAD resolution precedence:
   `x-fetch-mode` > `default-fetch-mode` generation option > `lazy`. Every other
   verb is **hardcoded `eager`**; `default-fetch-mode` never applies to it.
   - Enforced at generation time per ADR 0002: a `FetchModeValidator` in each
     of `OpenApi{2,3,31}/SchemaParser/` registered on
     `SchemaParser::validateSchema()` walks the raw document's
     `paths.{path}.{method}` and collects **every** violation (`x-fetch-mode` on
     a non-`get`/`head` method; or a value that is not exactly `lazy|eager|preload`)
     with an RFC 6901 JSON pointer and a fix hint, rendered by the existing
     `[ERROR]` block machinery.
4. **`Result` wrapper and client surface.** `executeEndpoint()` branches on the
   endpoint's fetch mode: `eager` = request + parse now (today's semantics,
   call-time exceptions); `preload` = request now, return a `Result` holding the
   in-flight response; `lazy` = return a `Result` holding a response factory
   closure. `Result` parses on first access through the endpoint's own
   `parseResponse()` (never a fixed model class, preserving per-status
   model/exception mapping) and offers `getStatusCode()`, `toObject()`,
   `toArray()`, `isInitialized()`, `cancel(): void`, `await(): void`. Garbage
   collecting an unconsumed `Result` aborts the transfer (Symfony behavior):
   documented as drop-to-cancel. `Client::stream(iterable<Result>)` drives
   batches. `executeRawEndpoint()` keeps returning the response.
   - **No-throw parity with PSR-18** is achieved by consuming with
     `$throw = false` (`getHeaders(false)`, `getContent(false)`,
     `toArray(false)`): the historical `'throw' => false` request option does
     **not** exist in symfony/http-client 8.x / contracts 3.7 — throwing moved
     to per-method `bool $throw = true` parameters. `getStatusCode()` never
     throws on 3/4/5xx (transport errors only). Generated code and the runtime
     therefore always pass `false`; raw responses returned to users keep
     Symfony's default (`$throw = true` on explicit reads).
5. **Multipart** moves to an internal runtime builder (boundary, per-part
   `Content-Disposition` with filename fallback to the property name for
   in-memory values, per-part `Content-Type` from `encoding`) returning a
   `string` body — GH#1036-compatible — replacing `MultipartStreamBuilder`.
   `BaseEndpoint` drops `StreamFactoryInterface`; file-path bodies become
   `fopen($body, 'rb')`.
6. **Legacy removal.** `FETCH_OBJECT` constant, `$fetch` parameter splice in
   `OperationGenerator`, the vestigial `$fetchMode` argument of
   `parseResponse()`, and the dead `InvalidFetchModeException` (zero throw
   sites) are removed in 8.0.
7. **Redirects** keep Symfony's default (`max_redirects: 20`), matching the
   historical HTTPlug behavior users got in practice.

### Spike evidence (recorded 2026-09, symfony/http-client 8.1)

| Hypothesis | Result |
| ---------- | ------ |
| `base_uri` drops its path for absolute-path request URLs | **Confirmed** (source `HttpClientTrait::resolveUrl()` + live loopback server): `/pets` + `base_uri=http://h/api/v1` → `/pets`; empty URL → `/api/v1`; relative `pets` → `/api/pets` (RFC merge). AddPathPlugin prepends blindly. Justifies `ServerUrlHttpClient`. |
| `extra` request option passes through | **Confirmed** (contracts `HttpClientInterface` + live): documented as "additional options that can be ignored if unsupported, unlike regular options"; unknown regular options must throw, `extra` must not. Not surfaced in `getInfo()` (forward-only) — `user_data` is the read-back channel. |
| Unconsumed `request()`s progress in the background | **Refined**: requests hit the wire only at the first multiplexer tick (loopback receipts: 3 requests issued, server saw nothing for 1s; all three arrived together at first consume and completed in one 0.6s window). Once ticking, all in-flight requests of a client progress concurrently; idle periods make no progress; GC aborts unconsumed transfers. `preload` therefore = immediate registration + concurrent dispatch at the first `await()`/`stream()`/parse. |

## Consequences

- Generated clients and the runtime lose all `psr/*` / `php-http/*` /
  `nyholm/psr7` dependencies; users on PSR-18 clients must adapt (8.0 BC break).
- Custom `Endpoint` implementers must add `getFetchMode()` and drop the
  `parseResponse()` `$fetchMode` argument; custom `AuthenticationPlugin`
  implementers migrate `authenticate()` to `decorate()`.
- Mutating operations with `x-fetch-mode` now fail generation with clean,
  complete `[ERROR]` blocks instead of being silently ignored.
- `preload` enables client-side batching (`stream()`/`await()`) with buffered
  responses by default (memory ∝ payload × parallelism); `buffer => false` is
  the documented escape hatch and imposes consume-in-order.
- Lazy defers serialization and auth to send time (first tick).
- Fixture churn is expected and scoped to the HTTP/fetch contract (ADR 0004).

## Links

- Issues [#367](https://github.com/janephp/janephp/issues/367),
  [#1036](https://github.com/janephp/janephp/issues/1036),
  [#789](https://github.com/janephp/janephp/issues/789),
  [#844](https://github.com/janephp/janephp/issues/844)
- [ADR 0002](0002-pre-generation-schema-validation.md) — validator hook this ADR plugs into
- [ADR 0004](0004-fixtures-are-immutable.md) — fixture regeneration rules
- [ADR 0009](0009-generation-options-value-object.md) — `default-fetch-mode` mirrors `default-additional-properties`
- [ADR 0010](0010-openapi-3-31-generator-consolidation.md) — shared machinery locations
