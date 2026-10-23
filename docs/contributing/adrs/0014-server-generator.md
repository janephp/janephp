# ADR 0014: Server generator — version-agnostic server component with prioritized extension points

- **Status**: Proposed
- **Codified**: 2026-10

## Context

[#11](https://github.com/janephp/janephp/issues/11) asks for a server mode: from
an OpenAPI specification, generate everything needed to serve it, instead of a
client. Today every OpenAPI component (`OpenApi2`, `OpenApi3`, `OpenApi31`)
unconditionally yields the model, normalizer, authentication, client and runtime
generators from `JaneOpenApi::generators()`; there is no mode switch and nothing
server-side exists.

Forces at play:

- **Every supported OpenAPI version.** Spec models stay version-local (ADR 0010)
  and the client endpoint generators read them directly, so there is no shared,
  version-agnostic description of an operation to build a server from. The
  shared pieces are `OperationGuess` (path, method, merged path/operation
  parameters, security scopes) and the registry's reference → model class
  lookup. The version differences that matter to a server are small and
  well-bounded: OAS2 `in: body`/`formData` + `consumes`/`produces` vs OAS3
  `requestBody.content`/`responses.*.content`, OAS2 `collectionFormat` vs OAS3
  `style`/`explode`, OAS2 `basePath` vs OAS3 `servers[].url`, OAS3.1 type
  arrays/`null`.
- **No PSR transport.** ADR 0012 removed PSR-7/17/18 from the runtime in favour
  of Symfony-native transport; the server follows the same line with Symfony
  HttpFoundation.
- **Works out of the box, custom code only when needed.** The common case
  (CRUD over Doctrine entities) must need no hand-written code; user code is the
  exception, written per operation.
- **Everything is replaceable.** Users must be able to change any step through
  events, `supports()`-based services ordered by priority, or configuration,
  without forking the runtime.
- **Generated models are not entities.** Models are spec-shaped DTOs; the
  persistence layer is the application's own Doctrine entities.
- **Production footprint.** Applications serving the API must not install the
  generation stack (php-parser, guessers, spec models) — mirroring today's
  `OpenApiCommon` / `OpenApiRuntime` split.

## Decision

### 1. Layering and packages

1. **Description model (in `jane-php/open-api-common`).** A version-agnostic,
   generation-time model under `Jane\Component\OpenApiCommon\Description`
   (`OperationDescription`, `ParameterDescription`, `BodyDescription`,
   `ResponseDescription`): operation id, method, path, tags, security,
   parameters (name, location, PHP type, required, default, style, explode),
   request bodies per content type → model class, responses per status → model
   class, and the server mappings of §4. Produced through an `@internal`
   `OperationDescriberInterface`.
2. **Describers are version-local.** `OpenApi2`, `OpenApi3` and `OpenApi31` each
   implement `OperationDescriberInterface` (3.1 extends the 3 describer). All
   spec-version knowledge stops there: nothing downstream sees an OpenAPI model
   class. Only the OpenAPI versions Jane supports are in scope; the contract
   promises nothing beyond them.
3. **`jane-php/open-api-server` (generation).** Version-agnostic
   `ServerGenerator`, consuming the description model only.
4. **`jane-php/open-api-server-runtime` (production).** Hand-written runtime the
   generated code depends on: controller, chains, events, Doctrine defaults,
   filters, pagination, attributes. Requires `symfony/http-foundation`,
   `symfony/routing`, `symfony/event-dispatcher`, `symfony/serializer`,
   `symfony/validator` and `jolicode/automapper`; `doctrine/orm` for the
   Doctrine defaults. It is a real package with stable FQCNs — not runtime files
   copied into the generated namespace — because tags, priorities and shared
   defaults need class names common to every project.
5. **`OpenApiBundle`** autoconfigures every extension point, wires priorities and
   provides the route loader, so installing the bundle and the runtime is enough
   to serve a generated API.

### 2. Generation

1. A new `mode` option (`client` | `server`, default `client`) is added to the
   `Options` value object (ADR 0009) and the OpenAPI config loaders. In `server`
   mode, each version's `generators()` yields the model, normalizer, runtime,
   validator and enum generators plus `ServerGenerator` (built with that
   version's describer), and skips the authentication and client generators.
   The server generator is only yielded when the package is installed
   (`class_exists`), the same optional-package detection `OpenApiMatcher`
   already uses for the version components.
2. **Validation is always on in server mode**: validator generation is forced
   regardless of the `validation` option, and decoded bodies are always
   validated.
3. Generated per operation: an immutable metadata class (the runtime's
   `OperationMetadata`, built from the description — the runtime never parses
   the specification), a readonly parameters DTO, and typed abstract bases for
   custom code (§3.3). Generated per schema: a route collection mapping each
   path and method to the runtime controller with the operation metadata as a
   route attribute.
4. Operation naming reuses `OperationNamingFactory` / `UniqueOperationNaming`, so
   server and client name operations identically.
5. Generated files go through `Schema::addFile()` and dispatch
   `FileGeneratedEvent` (ADR 0013), with new file types `server-metadata`,
   `server-base` and `server-routing`.

### 3. Runtime pipeline

1. One invokable controller runs every operation:

   ```
   Request
    → RequestReceivedEvent            (may short-circuit with a Response)
    → ParameterResolver chain         → ParametersResolvedEvent
    → BodyDecoder chain (per content type; undeclared content type → 415)
    → generated validators (→ 422)    → BodyDecodedEvent
    → Provider chain                  → DataProvidedEvent
    → Processor chain (writes only)   → DataProcessedEvent
    → Mapper chain (entity → model)
    → ResponseEncoder chain           → ResponseEvent
   any exception → ExceptionEvent → declared error status, else 500
   ```

   Events are plain final classes dispatched through Symfony EventDispatcher,
   following ADR 0013's conventions.

2. **Provider / Processor.** Providers read: they return the data of a GET and
   the existing entity of a PUT/PATCH/DELETE. Processors write (POST, PUT,
   PATCH, DELETE). Both are plain interfaces with a `supports()` method; there
   is no message bus.
3. **Every chain is `supports()` + priority.** Each extension point is an
   interface exposing `supports()`; the chain sorts services by descending
   priority (registration order for ties) and uses the first that supports the
   input. User services default to priority 0; built-ins use negative
   priorities so user code always wins:

   | Chain | Built-in implementations |
   |---|---|
   | `ParameterResolverInterface` | path, query (style/explode), header, cookie |
   | `BodyDecoderInterface` | JSON, form, multipart |
   | `ProviderInterface` | `DoctrineItemProvider`, `DoctrineCollectionProvider`, `NullProvider` |
   | `ProcessorInterface` | `DoctrinePersistProcessor` (POST/PUT/PATCH), `DoctrineRemoveProcessor` (DELETE), `NotImplementedProcessor` (501) |
   | `MapperInterface` | `AutoMapperMapper` |
   | `QueryCustomizerInterface` | filter applier (−16), pagination (−32) |
   | `DoctrineFilterInterface` | exact, partial, range, date, boolean, order |
   | `ResponseEncoderInterface` | serializer-based encoder with status resolution and pagination output |

4. **Custom code is optional and per operation.** The generator emits typed
   abstract bases (e.g. `AbstractGetUserProvider`, `AbstractCreateUserProcessor`)
   whose `supports()` matches the operation id. Extending one is enough: it is
   autoconfigured at priority 0 and takes precedence over the Doctrine defaults.
   A processor base exposes **one method per declared request content type**
   (e.g. `createUserFromJson(UserInput $body)`,
   `createUserFromMultipart(CreateUserMultipartBody $body)`); unimplemented
   methods answer 501. Methods return the union of the operation's declared
   response models.
5. **Status resolution from the specification.** User code returns models, never
   a status. The encoder takes the declared responses whose model matches the
   returned class (the item class for collections and paginators), prefers 2xx,
   applies the method rule (POST → 201 when declared), then the lowest code. A
   `null` return maps to the declared no-body response (204); a returned model
   matching a declared error schema gets that error status. Not found (404),
   validation (422) and undeclared content type (415) are built in.
6. **Mapping between entities and models** uses `jolicode/automapper` behind
   `MapperInterface`: entity → model for responses, body model → new entity
   (POST) or onto the provided entity (PUT, and PATCH restricted to the
   properties present in the body — generated models leave absent properties
   uninitialized, which the generated normalizers already rely on).

### 4. Server mappings: specification, configuration and attributes

Every server mapping can be declared in three places, with the same meaning:

| Concept | Specification | `.jane` option | PHP attribute (runtime package) |
|---|---|---|---|
| Model ↔ entity | `x-jane-entity` on a schema | `entities` | `#[Model(User::class, identifier: 'id')]` on the entity class |
| Filter | `x-jane-filter` on a query parameter | `filters` (`[path regex, method, config]` entries) | `#[Filter('partial', parameter: 'name')]` on an entity property |
| Pagination | `x-jane-pagination` on an operation | `pagination` (the client vocabulary, extended) | `#[Pagination(strategy: 'cursor', perPage: 30)]` on the entity class |

1. `x-jane-*` keys are specification extensions, allowed by every OpenAPI
   version, so ADR 0006 holds.
2. Specification extensions and `.jane` options are read at generation time by
   the describers and compiled into the generated metadata. Attributes are read
   at **runtime** — the bundle collects them from Doctrine-mapped classes in a
   compiler pass, the standalone runtime through cached reflection — so
   generation never needs to autoload application entities.
3. Precedence: attribute > `.jane` option > specification (the declaration
   closest to the code wins). Conflicting declarations are reported in debug
   mode.
4. Attributes reference generated models by class (`User::class`), not by
   schema reference, so a model renamed by regeneration fails static analysis
   instead of failing at runtime.

### 5. Filters and pagination

1. **Filters are opt-in per parameter.** Only query parameters bound to a filter
   alter the Doctrine query; unbound parameters are never turned into criteria
   (they still reach custom providers).
2. **Pagination reuses the client `pagination` vocabulary**
   (`PaginationConfiguration`): the same entry describes how the client reads
   pages and how the server writes them — `page` (offset from `param`), `cursor`
   (writes the next cursor at `next-cursor` and the items at `items`),
   `link-header` (emits `Link: rel="next"`), `next-link` (writes the next URL at
   `next`). Server-only keys `per-page`, `per-page-param` and `max-per-page` are
   added to the known keys; the client generator accepts and ignores them.
3. **Cursors are keyset-based on the active ordering**: a cursor encodes the
   values of the `order` filter fields plus the identifier as tiebreaker
   (base64 JSON) and drives a `(a, b, id) > (:a, :b, :id)` condition. A cursor
   that does not decode, or does not match the current ordering, answers 400.

### 6. Mapping validation command

Mappings are spread over the specification, `.jane` options and attributes, and
some errors only appear when a request reaches an operation (no provider, an
unmapped model, a filter on a missing property). A validation command reports
them up front instead.

1. **The checks live in the runtime package** as a `ServerMappingValidator`
   service. It works from the generated operation metadata and the runtime
   chains, so it uses exactly the resolution logic used to serve requests.
2. **The component ships the command.** `jane-php/open-api-server-runtime`
   provides a Symfony Console command, `ValidateServerMappingCommand`, with a
   `jane-server validate` entry point for the standalone runtime. The entry
   point bootstraps from a user-provided runtime configuration file, the same
   way the `jane-openapi` binary loads `.jane-openapi`.
3. **The bundle registers it** as `jane:openapi:server:validate`, wired to the
   container's chains, so autoconfigured user services are checked as they
   are deployed.
4. **What it checks.** The command reports an error when:
   - **Endpoints:** a declared operation has no generated route, or a route
     has no operation.
   - **Handlers:** a read operation resolves only to `NullProvider`, or a
     write operation resolves only to `NotImplementedProcessor`. Unhandled
     operations are listed.
   - **Request content types:** a declared request content type has no body
     decoder. For custom processors, an abstract per-content-type method is
     left unimplemented.
   - **Models:** a request or response model served by the Doctrine defaults
     has no entity mapping. The mapped class is not a Doctrine entity, or the
     declared identifier does not exist. AutoMapper cannot map the model to
     the entity or back.
   - **Filters:** a filter binding names an undeclared query parameter, an
     unknown filter type, or a missing or non-filterable entity property.
   - **Pagination:** the configuration uses unknown or inconsistent keys, or a
     cursor strategy has no ordering to build keyset cursors on.
   - **Conflicts:** an attribute, a `.jane` option and the specification
     declare the same mapping differently.

   Declared query parameters bound to no filter, and conflicts between
   mapping sources that precedence resolves (attribute > `.jane` option >
   specification), are reported as warnings. `--strict` turns warnings into
   errors.
5. **Output:** one row per operation, showing the resolved provider and
   processor and the problems found. `--format=json` gives a machine-readable
   report. A non-zero exit code on errors lets the command gate CI and
   deployments.

### 7. Losing options

- **PSR-15 handlers and middleware router** (the original issue): rejected for
  consistency with ADR 0012's Symfony-native transport.
- **A message bus as the dispatch mechanism**: it routes by message class (one
  message class per operation), returns results only through stamps, is built
  around possibly-asynchronous buses, and would make an extra component
  mandatory for the plain Doctrine case. Plain `supports()` interfaces are
  simpler and cover every case; a bus can still be called from a custom
  processor.
- **A single per-operation "handler"**: a read/write split lets a custom
  provider reuse the default processor and vice versa.
- **Reading the specification at runtime**: Jane is a generator; generated
  metadata keeps the runtime version-agnostic and parse-free.
- **Generating server code straight from version-local models**, like the
  client endpoint generators: it would triplicate the server generator. The
  description model confines version differences to three small describers.
- **Reading attributes at generation time**: requires autoloading the
  application during generation and couples generated code to entity classes.
- **Mapping every query parameter to criteria automatically**: unsafe by
  default.

## Consequences

- One server generator and one runtime serve OpenAPI 2, 3 and 3.1; a new spec
  version only needs a describer.
- A Doctrine-backed CRUD API is served with zero hand-written code once the
  model ↔ entity mapping is declared; custom behaviour is added per operation
  by extending a generated base, or globally by registering a higher-priority
  service or an event listener.
- Two new packages to release and maintain; `jolicode/automapper` and
  `symfony/validator` become runtime dependencies of server users only.
  Client users are unaffected (`mode` defaults to `client`).
- Mapping mistakes surface through `jane:openapi:server:validate` (or
  `jane-server validate`) before requests do. The command can run in CI.
- The client `pagination` option gains server-only keys; existing client
  configurations are unchanged.
- The description model is a candidate to later replace the version-local
  client endpoint generation; that refactor is out of scope here.
- Event classes, chain interfaces and attributes are public API but flagged
  experimental until the feature stabilizes, as in ADR 0013.

## Links

- [#11](https://github.com/janephp/janephp/issues/11)
- Touch points: `src/Component/OpenApi{2,3,31}/JaneOpenApi.php` (`generators()`),
  `src/Component/JsonSchema/Generator/Options.php`,
  `src/Component/OpenApiCommon/Console/Loader/ConfigLoader.php`,
  `src/Component/OpenApiCommon/Generator/Pagination/PaginationConfiguration.php`,
  `src/Component/OpenApiCommon/Guesser/Guess/OperationGuess.php`,
  `src/Bundle/OpenApiBundle/`
- Related: ADR 0006 (upstream specifications), ADR 0009 (options), ADR 0010
  (version consolidation), ADR 0012 (Symfony-native transport), ADR 0013
  (generation events)
