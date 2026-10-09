# Jane OpenAPI: fetch modes (GET/HEAD operations)

Jane 8+ controls **when the HTTP request is sent and parsed** for GET/HEAD operations, per
operation via the `x-fetch-mode` OpenAPI extension, or as a default via the
`default-fetch-mode` generation option. All other verbs (POST, PUT, PATCH, DELETE, ...)
are **always eager** and must not declare the extension (violations abort generation with
a full error list).

Resolution precedence for GET/HEAD: operation `x-fetch-mode` → `default-fetch-mode` option
→ `lazy`.

## Modes

| Mode | Request sent | Parsed/exceptions thrown |
|---|---|---|
| `lazy` (default) | On first access of the returned proxy | On first access (same status-code mapping as eager) |
| `eager` | At call time (blocking) | At call time |
| `preload` | Registered at call time, progresses concurrently on first consumption | On first access of the proxy |

```yaml
paths:
  /pets:
    get:
      operationId: listPets
      x-fetch-mode: preload   # lazy | eager | preload
      responses:
        '200':
          description: OK
```

```php
'default-fetch-mode' => 'eager', // GET/HEAD ops without explicit x-fetch-mode
```

`eager` is the migration escape hatch when relying on call-time exceptions.

## Ghost proxies

`lazy` and `preload` return a **lazy ghost proxy** — a real instance of the endpoint's
model class with uninitialized properties. Any property access (`foreach`, `instanceof`,
cloning, serializing...) triggers the request + parse, then copies properties onto the
proxy:

```php
$pet = $apiClient->getPet('pet-1'); // x-fetch-mode: lazy — nothing sent yet
$pet->name; // request sent now; returns "Rex"
```

- Dropping an unconsumed proxy aborts the transfer (GC = drop-to-cancel).
- Introspection via reflection: `isUninitializedLazyObject()`, and
  `initializeLazyObject()` to force send + parse.
- Requires PHP 8.4 native lazy objects; on older PHP, deferred modes fall back to eager.

## Non-ghostable endpoints (mode degrades to eager)

Endpoints whose success response cannot become a single model class have no target class
(`getTargetClass() = null`): the configured mode falls back to eager (blocking at call
time, call-time exceptions). Shapes:

- JSON arrays (`list<...>` / homogeneous `items`)
- JSON maps / `additionalProperties` objects (`JsonObject`)
- scalar bodies (string, integer, number, boolean, enums)
- no-content responses (204, HEAD)
- endpoints with several distinct model classes across statuses, or several content types
  per status

## Raw / concurrent batch

`Client::stream()` batches raw responses only:

```php
$raw = [$client->executeRawEndpoint(new ListPets()), $client->executeRawEndpoint(new ListOwners())];
foreach ($client->stream($raw) as $response => $chunk) {
    if ($chunk->isLast()) {
        // $response->getStatusCode() ...
    }
}
```

`preload` gives eager-like semantics to non-ghostable endpoints while still registering the
transfer for concurrency.
