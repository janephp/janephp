# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
- [OpenApi3] [OpenApi31] [GH#1036](https://github.com/janephp/janephp/issues/1036) Generated `multipart/form-data` request bodies now send binary (`type: string` + `format: binary`) properties with a `filename` in their `Content-Disposition` part header, and honor a concrete `contentType` declared through the media type's `encoding` object by emitting a `Content-Type` part header (wildcard and comma-separated `contentType` values are match constraints and stay ignored). The filename defaults to the property name and only applies when none can be derived from the value: a stream or resource backed by a real file keeps its actual file name (and the extension based Content-Type guessing) exactly as before, so string and in-memory payloads — which previously produced a filename-less part that servers like FastAPI or Spring reject as "not a file" — are the ones gaining the fallback. Plain scalar form fields are sent unchanged, and endpoints without binary properties or `encoding` entries generate byte-identical code
- [OpenApi31] Support inheritance and polymorphism through the OpenAPI Discriminator Object: schemas are now parsed into a dedicated `Jane\Component\OpenApi31\JsonSchema\Model\Schema` (extending the generic JSON Schema 2020-12 model) that carries `discriminator`. A schema combining `discriminator` + `mapping` with `allOf` children generates a parent/child model hierarchy (`extends`, inherited properties) whose normalizer delegates normalization to the matching child and dispatches denormalization to the mapped child class; `oneOf` / `anyOf` unions with a discriminated property generate value-based denormalization conditions. Mapping-only by design: OAS 3.1 makes `mapping` the canonical way to bind discriminator values, so the OpenApi3 enum-values fallback is intentionally not ported
- [OpenApi] [GH#838](https://github.com/janephp/janephp/issues/838) New `x-namespace` Specification Extension: declaring it on an operation moves its Endpoint (and inline request / response models) to a sub-namespace, declaring it on a schema moves its Model, Normalizer & Validator there. Artifacts without the attribute keep the flat layout
- [OpenApi31] The internal 3.1 models now capture `x-*` specification extensions on the `Operation` object and on schemas, matching what OpenAPI 2.0 / 3.0 already preserved
- [JsonSchema] New `<Namespace>\Runtime\JsonObject` runtime class shipped with every generated library, used to represent objects & maps in normalized payloads
- [Docs] New [Architecture Decision Records](docs/contributing/adrs/index.md) documenting key generator/runtime decisions
- [OpenApi] [GH#832](https://github.com/janephp/janephp/issues/832) New `operation-namings` option to customize client method names and endpoint class names through `Jane\Component\OpenApiCommon\Naming\OperationNamingInterface` instances. Providing an empty array (the default) keeps the built-in chain (`operationId` based naming with URL based fallback). As a side effect, an operation named exactly `'0'` is now consistently treated as a valid name by the naming chain instead of being skipped
- [JsonSchema] [GH#865](https://github.com/janephp/janephp/issues/865) New `enums-as-objects` option to generate native PHP backed enums for schemas with an `enum` keyword (`string` / `integer` types)
- [OpenApi3] [GH#771](https://github.com/janephp/janephp/issues/771) Report clean generation errors for non-body parameters using an unsupported `schema.type` (or no `type`/`enum`) instead of crashing
- [JsonSchema] [GH#752](https://github.com/janephp/janephp/issues/752) Validate `format: date` / `format: date-time` string properties when the `validation` option is enabled (Symfony `Date` / `DateTime` constraints, honoring the `full-date-format`, `date-format` and `date-input-format` options)
- [OpenApi] [GH#844](https://github.com/janephp/janephp/issues/844) The generated `UnexpectedStatusCodeException` now stores the PSR-7 response it was built from (new optional third constructor argument) and exposes it through `getResponse(): ?\Psr\Http\Message\ResponseInterface`; a new generated `WithResponseInterface` marker (single `getResponse(): ?\Psr\Http\Message\ResponseInterface` method) is implemented by every response-carrying generated exception (`UnexpectedStatusCodeException`, status-level & per-operation exceptions), so consumers can check `$e instanceof WithResponseInterface` instead of `method_exists($e, 'getResponse')`. `BadResponseException` now delegates the response storage to its parent
- [JsonSchema] [OpenApi] [GH#588](https://github.com/janephp/janephp/issues/588) New `allowed-local-ref-roots` option: declare additional directory roots that local `$ref`s may resolve into, unlocking split-spec layouts where referenced documents live outside the referencing document's directory (e.g. a specification in `doc/api/openapi.yaml` referencing `../schema/institution.yaml`). Default behavior is unchanged: without the option, a local reference may still only resolve within the referencing document's directory. The rejection message now names the offending path and points to this new option

### Changed
- **BC-breaking** [OpenApi] The OpenAPI 2.0 / 3.0 / 3.1 document models (`src/Component/OpenApi{2,3,31}/JsonSchema/Model/`, e.g. `OpenApi`, `Components`, `Responses`) no longer extend `\ArrayObject`: like the models carrying `additionalProperties` / `patternProperties` ([GH#867](https://github.com/janephp/janephp/issues/867)), they now implement a per-library `<Namespace>\Runtime\AdditionalPropertiesInterface` backed by the `<Namespace>\Runtime\AdditionalAndPatternProperties` trait. Array access, iteration (`foreach`), `count()`, `getArrayCopy()` / `toArray()` and `json_encode()` keep working (empty maps now encode as `{}` instead of breaking); constructing these models with an array argument is gone — populate them through their setters (or `offsetSet()`) instead. Normalizer `normalize()` signatures are unchanged
- **BC-breaking** [JsonSchema] [GH#867](https://github.com/janephp/janephp/issues/867) Models carrying `additionalProperties` / `patternProperties` no longer extend `\ArrayObject`: they now use a per-library `<Namespace>\Runtime\AdditionalAndPatternProperties` trait paired with an `<Namespace>\Runtime\AdditionalPropertiesInterface` interface, so iteration (`foreach`), `count()`, `toArray()`, `getArrayCopy()` and `json_encode` finally expose **every** value — defined properties (through their accessors) as well as additional / pattern-matched ones — instead of silently skipping defined properties. **Migration table:**
  <table>
    <tr><th>Before</th><th>After</th></tr>
    <tr><td><code>$model instanceof \ArrayObject</code></td><td><code>$model instanceof AdditionalPropertiesInterface</code></td></tr>
    <tr><td><code>$model->getArrayCopy()</code> (extras only)</td><td><code>$model->toArray()</code> or keep <code>getArrayCopy()</code> (now complete)</td></tr>
    <tr><td><code>(array) $model</code> / <code>$model->getArrayCopy()</code> for extras</td><td><code>iterator_to_array($model->additionalPropertyEntries())</code></td></tr>
    <tr><td>Type hints against <code>\ArrayObject</code></td><td><code>iterable</code> or <code>AdditionalPropertiesInterface</code></td></tr>
  </table>
  Note the widened output: `json_encode($model)` now encodes the full object (defined + additional values) instead of extras only; empty models encode as `{}`. Pure-map models (no defined properties) are affected by the same type break although their iteration behavior is unchanged
- [OpenApi] [GH#789](https://github.com/janephp/janephp/issues/789) The host / base path plugins built from the specification (`AddHostPlugin`, `AddPathPlugin`) are now also applied around a caller-provided PSR-18 client in the generated `Client::create()`: your client may now be wrapped in a `PluginClient` carrying the specification's server URL, so server URLs containing a path (e.g. `https://server.localhost/api/v3`) work with custom clients. Generated clients whose specification declares a server URL accept a fourth `bool $applyServerPlugins = true` argument to opt out and keep using your client as-is.
- [OpenApi] [GH#752](https://github.com/janephp/janephp/issues/752) Denormalizing an invalid date / date-time value now throws a dedicated `<Namespace>\Runtime\Normalizer\InvalidDateException` with the offending value and expected format, instead of failing with a raw `TypeError` on the model setter. A latent fatal (`setTime()` called on `false`) in multi-typed date properties was fixed at the same time

### Fixed
- [JsonSchema] [GH#1047](https://github.com/janephp/janephp/issues/1047) Doc blocks for `anyOf` / `oneOf` unions no longer repeat identical type hints (e.g. `@var string|string|string` for a union of single-value string enum branches, the pattern FastAPI emits for `Literal` unions): the branch hints are deduplicated before joining, generating `@var string` (or `string|null`) instead. Purely a doc-block change — native type hints and generated behavior are untouched
- [JsonSchema] [GH#1038](https://github.com/janephp/janephp/issues/1038) Properties declared as `anyOf` / `oneOf` with a date branch (e.g. `anyOf: [<date-time string>, null]`) no longer pass strings that match no branch raw into the `?\DateTime` typed setter (a `TypeError` at runtime): an empty string resolves to `null` when the union explicitly admits null (a deliberate leniency — an empty string is the common wire encoding of an absent date), and any other non-parsing string is reported with the same `InvalidDateException` the plain date property path throws since [GH#764](https://github.com/janephp/janephp/issues/764)
- [JsonSchema] [GH#1034](https://github.com/janephp/janephp/issues/1034) `toArray()`, `json_encode()`, `count()`, iteration and `offsetExists()` on generated open models no longer throw a `TypeError` when a defined property with a non-nullable getter was never initialized (e.g. denormalized from a payload missing that property): the `AdditionalAndPatternProperties` runtime trait now reads the backing property directly instead of calling the typed getter before the initialization check. Properties carrying a generated default value are still exposed unchanged
- [OpenApi] [GH#823](https://github.com/janephp/janephp/issues/823) Operations resolving to the same generated name no longer produce broken clients (duplicated client methods / endpoint classes): colliding names are disambiguated with an incrementing suffix (`getApiUser`, `getApiUser2`, ...), consistently for client methods and endpoint classes. This notably occurred when a specification contains both a singular and a plural path (e.g. `GET /api/user` and `GET /api/users`) whose response is not an array
- [OpenApi] [GH#833](https://github.com/janephp/janephp/issues/833) A 200 response declaring an empty `content` map (`content: {}`) no longer aborts generation with "Call to a member function getSchema() on null"; it is now treated as a body-less response
- [OpenApi] [GH#763](https://github.com/janephp/janephp/issues/763) Generate models referenced by the `default` response when using `whitelisted-paths` (the default response is not part of the iterated status codes, so its models were filtered out)
- [JsonSchema] [GH#585](https://github.com/janephp/janephp/issues/585) Reference normalizers of models from other mapped schemas (transitively) used by a schema's models in its generated `JaneObjectNormalizer`, so multi-namespace mappings no longer fail at runtime with "no supporting normalizer found"
- [JsonSchema] [GH#700](https://github.com/janephp/janephp/issues/700) [GH#680](https://github.com/janephp/janephp/issues/680) Empty objects and maps (`additionalProperties`, `patternProperties`, nested models) are now serialized as JSON objects (`{}`) instead of arrays (`[]`), and normalization/denormalization are symmetric. **Upgrade note:** map/object values in normalized payloads are now `JsonObject` instances instead of plain arrays or `\ArrayObject`; use `->toArray()` / `(array)` casts when post-processing raw payloads. Nullable properties explicitly set to `null` normalize to `null` (or are omitted with `skip-null-values`) instead of emitting an empty collection
- [OpenApi] [GH#826](https://github.com/janephp/janephp/issues/826) When using `whitelisted-paths`, schemas that cannot be guessed no longer abort generation if they are not needed by any whitelisted operation (they are simply not generated); guessing errors in models used by whitelisted operations still fail generation
- [OpenApi] [GH#680](https://github.com/janephp/janephp/issues/680) Empty object JSON request bodies are now sent on the wire as `{}` instead of `[]`: when an operation's JSON request body resolves to a generated model class, the endpoint serializes it through the new per-library `<Namespace>\Runtime\Client\JsonPayload` helper. Only generated endpoint code changes (mechanical regeneration); direct consumers of normalizers' `normalize()` are not affected
- [OpenApi] [GH#963](https://github.com/janephp/janephp/issues/963) Support JSON content types with parameters (e.g. `application/json;schema=...`) when generating response transformations and operation/model relations
- [OpenApi3] [GH#310](https://github.com/janephp/janephp/issues/310) Respect `nullable: true` declared inside an `allOf` member (the canonical OpenAPI 3.0 pattern for making a `$ref`'d schema nullable), generating null-safe models, normalizers and denormalizers
- [OpenApi] [GH#963](https://github.com/janephp/janephp/issues/963) Generate models for `allOf` schemas whose members omit an explicit `type: object`
- [OpenApi31] [GH#848](https://github.com/janephp/janephp/issues/848) Support nullable dates and datetimes expressed as `type: ["string", "null"]` with a `format: date` / `date-time` (OAS 3.1 style), generating the same null-safe normalization code as OpenAPI 3.0's `nullable: true`
- [OpenApi31] [GH#946](https://github.com/janephp/janephp/issues/946) Generate response models and correct `transformResponseBody` return types for inline response schemas (array responses are typed as `Model[]` again)
- [OpenApi31] [GH#1007](https://github.com/janephp/janephp/issues/1007) A schema without an `additionalProperties` keyword is now treated as open (the JSON Schema 2020-12 default), matching OpenApi3: unknown JSON keys are preserved through denormalize/normalize instead of being silently dropped. **Upgrade note:** generated 3.1 models for such schemas now use the `<Namespace>\Runtime\AdditionalAndPatternProperties` trait with the `<Namespace>\Runtime\AdditionalPropertiesInterface` interface (see [GH#867](https://github.com/janephp/janephp/issues/867)); declare `additionalProperties: false` to keep a closed schema and a plain model class
- [OpenApi31] [GH#1006](https://github.com/janephp/janephp/issues/1006) A property schema using `$ref` with sibling keys (e.g. `type: object` next to the `$ref`, allowed by JSON Schema 2020-12) now resolves to the referenced model again: typed getter/setter and recursive (de)normalization instead of an untyped `mixed` property whose value was passed through raw. Schemas declaring their own `properties` or `allOf` next to a `$ref` keep their inline handling
- [OpenApi31] Keep endpoint names plural for operations returning an array response
- [OpenApi] Support union types (e.g. `type: ["array", "null"]`) when detecting array schemas
- [OpenApi3] [GH#803](https://github.com/janephp/janephp/issues/803) Fix fatal error when a non-required query/header parameter references a schema defining a `default` (the default is now applied to the generated options resolver)
- [Jane] Wrap unexpected generation-phase errors in a clean `GenerationFailedException` instead of letting raw PHP errors reach the console
- [OpenApi] [GH#831](https://github.com/janephp/janephp/issues/831) Take PHP reserved words into account when generating endpoint class names: an operation whose `operationId` is a reserved word (e.g. `list`) now generates a valid `Endpoint\_List` class instead of the unparseable `class List`. Client method names keep the original operationId (reserved words are valid PHP method names)
- [JsonSchema] Object schemas declaring only `patternProperties` (no `properties`) are matched by the `PatternPropertiesGuesser` again: its schema check had gone dead when model getters moved from `\ArrayObject` hints to iterable hints, so such schemas silently fell back to a generic type and generated wrong property docblocks / types for affected JSON-Schema inputs (e.g. `string|mixed` instead of the pattern union like `string|object|null[]`, with no patternProperties handling in the normalizers)

## [7.13.0] - 2026-08-17
### Added
- [JsonSchema] [GH#971](https://github.com/janephp/janephp/pull/971) Allow registering additional validators via configuration
- [OpenApi] [GH#975](https://github.com/janephp/janephp/pull/975) [GH#978](https://github.com/janephp/janephp/pull/978) Make error response exception generation optional (via configuration)

### Fixed
- [Jane] [GH#952](https://github.com/janephp/janephp/pull/952) Fix PHP 8.5 deprecation warnings
- [Jane] [GH#977](https://github.com/janephp/janephp/pull/977) Add `jane-php/open-api-3-1` to composer replace list
- [JsonSchema] [GH#933](https://github.com/janephp/janephp/pull/933) Fix Denormalizers using `$data` before typechecking
- [JsonSchema] [GH#943](https://github.com/janephp/janephp/pull/943) Fix array items validation follow-up
- [JsonSchema] [GH#953](https://github.com/janephp/janephp/pull/953) Skip array items validation for non-object items schemas
- [JsonSchema] [GH#957](https://github.com/janephp/janephp/pull/957) Support nullable required properties
- [JsonSchema] [GH#964](https://github.com/janephp/janephp/pull/964) TypeValidator never supports union types due to misplaced parenthesis
- [JsonSchema] [GH#967](https://github.com/janephp/janephp/pull/967) Match property class by reference segment, not substring
- [JsonSchema] [GH#969](https://github.com/janephp/janephp/pull/969) Always generate the Constraint class so references never dangle
- [JsonSchema] [GH#973](https://github.com/janephp/janephp/pull/973) Emit `(float)` cast instead of deprecated `(double)`
- [OpenApi] [GH#934](https://github.com/janephp/janephp/pull/934) Allow number query parameters to accept int or float
- [OpenApi3] Encode boolean multipart/form-data request values as `'true'`/`'false'` strings in generated endpoints
- [OpenApi3] [GH#935](https://github.com/janephp/janephp/pull/935) Fix invalid PHP generation for path parameters with dashes
- [OpenApi31] [GH#951](https://github.com/janephp/janephp/pull/951) Support allOf-wrapped refs in oneOf/anyOf guessers
- [OpenApi31] [GH#980](https://github.com/janephp/janephp/pull/980) Scope oneOf/anyOf supportObject to allOf-wrapped refs

### Removed
- [Jane] [GH#931](https://github.com/janephp/janephp/pull/931) Remove all `ext-json` from composer.json

## [7.12.0] - 2026-07-09
### Fixed
- [OpenApi] [GHSA-xwcw-j52r-34x4](https://github.com/janephp/janephp/security/advisories/GHSA-xwcw-j52r-34x4) [GHSA-x9xr-53qx-9qcf](https://github.com/janephp/janephp/security/advisories/GHSA-x9xr-53qx-9qcf) [GHSA-q8v2-3j4h-xg2p](https://github.com/janephp/janephp/security/advisories/GHSA-q8v2-3j4h-xg2p) Sanitize `*/` in generated PHPDoc comments to prevent instantiation RCE via PHPDoc breakout
- [Jane] [GHSA-c3cj-3p6p-j822](https://github.com/janephp/janephp/security/advisories/GHSA-c3cj-3p6p-j822) Validate `$ref` resolution to prevent SSRF, LFI, and path traversal at code-generation time. External HTTP/HTTPS references are now disabled by default; enable them via `allow-external-refs` in your Jane configuration.
- [OpenApi] [GH#958](https://github.com/janephp/janephp/pull/958) Fix missing InvalidArgumentException import in generated BaseEndpoint

## [7.11.2] - 2026-04-16
### Added
- [JsonSchema] [GH#920](https://github.com/janephp/janephp/pull/920) Add validation for array items via `All` constraint using `ChainValidator` delegation

### Fixed
- [JsonSchema] [GH#941](https://github.com/janephp/janephp/pull/941) Mark properties nullable when `anyOf` includes `null`
- [OpenApi31] [GH#942](https://github.com/janephp/janephp/pull/942) Handle `oneOf` with `$ref` and `null` for correct model types and denormalization

## [7.11.1] - 2026-03-31
### Fixed
- [OpenApi31] [GH#938](https://github.com/janephp/janephp/pull/938) Wrong path/query parameters matching

## [7.11.0] - 2026-03-30
### Added
- [JsonSchema] [GH#918](https://github.com/janephp/janephp/pull/918) Add JSON Schema 2020-12 schema support
- [OpenApi31] [GH#904](https://github.com/janephp/janephp/pull/904) Add OpenAPI 3.1 component
- [OpenApi] [GH#930](https://github.com/janephp/janephp/pull/930) Add support for `float` in query string parameters
- [Jane] [GH#932](https://github.com/janephp/janephp/pull/932) Handle `.php` files for Jane configuration files

### Fixed
- [OpenApi3] [GH#917](https://github.com/janephp/janephp/pull/917) Multipart/form-data requests failing with non-scalar properties (objects, arrays) by serializing them to JSON
- [OpenApi3] [GH#921](https://github.com/janephp/janephp/pull/921) Fix lowercase class name suffix for inline properties in `allOf` schemas
- [OpenApi] [GH#868](https://github.com/janephp/janephp/pull/868) Fix PHP 8.4 deprecation in generated Exception classes
- [JsonSchema] [GH#929](https://github.com/janephp/janephp/pull/929) Remove deprecated usage of Email validator by generating `Email(mode: 'html5')`

## [7.10.4] - 2026-01-26
### Added
- [OpenApi] [GH#907](https://github.com/janephp/janephp/pull/907) Add support for object type in query parameters
- [Jane] [GH#894](https://github.com/janephp/janephp/pull/894) New documentation with MkDocs & Mike (available at: https://jane.jolicode.com/)

### Changed
- [Jane] [GH#894](https://github.com/janephp/janephp/pull/894) Improved tooling to use [castor](https://castor.jolicode.com/)

### Fixed
- [OpenApi] [GH#908](https://github.com/janephp/janephp/pull/908) Fix arrays as query params
- [OpenApi] [GH#910](https://github.com/janephp/janephp/pull/910) Fix query parameters PHPDoc

## [7.10.3] - 2025-12-24
### Fixed
- [OpenApi] [GH#895](https://github.com/janephp/janephp/pull/895) Cast parameter to string to avoid TypeError in BaseEndpoint class
- [OpenApi3] [GH#897](https://github.com/janephp/janephp/pull/897) Download OpenApi3 "issue-669" schema to avoid frequent changes

## [7.10.2] - 2025-12-15
### Changed
- [OpenApi] [GH#891](https://github.com/janephp/janephp/pull/891) Better generated Client operation method return types

### Fixed
- [OpenApi] [GH#890](https://github.com/janephp/janephp/pull/890) No double encoding for query parameters
- [OpenApi] [GH#892](https://github.com/janephp/janephp/pull/892) Ensure allowReserved works in referenced parameters

## [7.10.1] - 2025-12-08
### Fixed
- [Jane] [GH#886](https://github.com/janephp/janephp/pull/886) Fix version constraint for Symfony 8

## [7.10.0] - 2025-12-04
### Added
- [Jane] [GH#855](https://github.com/janephp/janephp/pull/855) Add PHPStan
- [Jane] [GH#856](https://github.com/janephp/janephp/pull/856) Add bundle tests
- [OpenApi3] [GH#814](https://github.com/janephp/janephp/pull/814) Handle generic `+json` content-types
- [OpenApi3] [GH#876](https://github.com/janephp/janephp/pull/876) Handle allowReserved on queryParameters
- [Jane] [GH#871](https://github.com/janephp/janephp/pull/871) Symfony 8 support

### Changed
- [Jane] [GH#856](https://github.com/janephp/janephp/pull/856) Modernize bundle configuration
- [Jane] [GH#857](https://github.com/janephp/janephp/pull/857) Modernize classes
- [Jane] [GH#827](https://github.com/janephp/janephp/pull/827) Make doctypes with less whitespace and unnecessary new lines
- [OpenApi3] [GH#864](https://github.com/janephp/janephp/pull/864) Use serializer rather than `json_encode` in generated `getBody` for requests
- [OpenApi] [GH#875](https://github.com/janephp/janephp/pull/875) Re-order path parameters to put default ones at the end

### Fixed
- [JsonSchema] [GH#841](https://github.com/janephp/janephp/pull/841) Fix "nullable" property handing in generated normalizers
- [OpenApi3] [GH#787](https://github.com/janephp/janephp/pull/787) Add null safe operator in case $schema is null
- [OpenApi] [GH#866](https://github.com/janephp/janephp/pull/866) Fix trailing */ in comment block for Client endpoints methods
- [OpenApi3] [GH#862](https://github.com/janephp/janephp/pull/862) Fix [GH#828](https://github.com/janephp/janephp/issues/828) with simpler array type check
- [OpenApi3] [GH#874](https://github.com/janephp/janephp/pull/874) Fix error for anyOf in endpoint parameters
- [JsonSchema] [GH#877](https://github.com/janephp/janephp/pull/877) Do no generate a MinLength constraint when value is zero
- [OpenApi3] [GH#878](https://github.com/janephp/janephp/pull/878) Handle any content-type starting with application/json
- [OpenApi2] [GH#879](https://github.com/janephp/janephp/pull/879) Error in BodyParameterGenerator::convertParameterType when generating

## [7.9.0] - 2025-04-17
### Added
- [Jane] [GH#836](https://github.com/janephp/janephp/pull/836) Run test suite with PHP 8.3 & PHP 8.4
- [Jane] [GH#843](https://github.com/janephp/janephp/pull/843) Add PHP 8.4 support
- [Jane] [GH#842](https://github.com/janephp/janephp/pull/842) Add Symfony 7.2 support & remove deprecations

### Changed
- [CI] [GH#852](https://github.com/janephp/janephp/pull/852)  Update PHP-CS-Fixer to v3.75.0
- [OpenAPI] [GH#835](https://github.com/janephp/janephp/pull/835) Add array support in simple style path parameters

### Fixed
- [PHP] [GH#842](https://github.com/janephp/janephp/pull/842) Fix generated files to be compatible with PHP 8.4
- [CI] [GH#850](https://github.com/janephp/janephp/pull/850) Update GH actions/cache to v4
- [OpenApi] [GH#845](https://github.com/janephp/janephp/pull/845) Content */* breaks generated Endpoint PHP class
- [JsonSchema] [GH#846](https://github.com/janephp/janephp/pull/846) Cast integer data to bool for boolean fields when integer is in data

## [7.8.1] - 2024-07-29
### Fixed
- [JsonSchema] [GH#819](https://github.com/janephp/janephp/pull/819) Fix fully qualified name generation in Normalizers
- [JsonSchema] [GH#818](https://github.com/janephp/janephp/pull/818) Add null safe method calls for nullable date and datetime properties for normalizer generation
- [JsonSchema] [GH#821](https://github.com/janephp/janephp/pull/821) JaneObjectNormalizer::getSupportedTypes is now produced multiline

## [7.8.0] - 2024-07-04
### Added
- [Jane] [GH#809](https://github.com/janephp/janephp/pull/809) Add support for PHP Parser v5

### Fixed
- [JsonSchema][OpenApiCommon] [GH#811](https://github.com/janephp/janephp/pull/811) add Symfony command configure() void return, avoid deprecations

## [7.7.0] - 2024-06-27
### Added
- [JsonSchema] [GH#725](https://github.com/janephp/janephp/pull/725) Add discriminator support to anyOf

### Fixed
- [JsonSchema] [GH#807](https://github.com/janephp/janephp/pull/807) Force classmap to be dumped multiline

## [7.6.2] - 2024-05-23
### Fixed
- [JsonSchema] [GH#799](https://github.com/janephp/janephp/pull/799) Do not implement `CacheableSupportsMethodInterface` when generating SF7 normalizers for schema and schema object properties
- [JsonSchema] [GH#798](https://github.com/janephp/janephp/pull/798) Do not implements `CacheableSupportsMethodInterface` when generating SF7 normalizers

## [7.6.1] - 2024-03-12
### Changed
- [Jane] [GH#792](https://github.com/janephp/janephp/pull/792) Improve Normalizer generation by including null values or not

### Fixed
- [Documentation] [GH#791](https://github.com/janephp/janephp/pull/791) OpenAPI binary name

## [7.6.0] - 2024-01-31
### Changed
- [Jane] Add support for Symfony 7

### Removed
- [OpenApi] Remove unused abandoned package "php-http/message-factory"

## [7.5.6] - 2024-01-24
### Changed
- [OpenApiCommon] [GH#775](https://github.com/janephp/janephp/pull/775) Added support for boolean HTTP headers
- [OpenApiCommon] [GH#777](https://github.com/janephp/janephp/pull/777) Add class property formParameters to BaseEndpoint

### Fixed
- [GH#780](https://github.com/janephp/janephp/pull/780) Fix CI

## [7.5.5] - 2023-11-20
### Changed
- [JsonSchema] [GH#698](https://github.com/janephp/janephp/pull/698) Consider nullable property for minLengthValidator

### Fixed
- [JsonSchema] [GH#758](https://github.com/janephp/janephp/pull/758) Fixed subproperty validator overwriting

## [7.5.4] - 2023-10-09
### Changed
- [Jane] [GH#748](https://github.com/janephp/janephp/pull/748) Move PHP CS Fixer to a separate composer.json file
- [JsonSchema] [GH#747](https://github.com/janephp/janephp/pull/747) Allow league/uri v7
- [OpenApiCommon] [GH#750](https://github.com/janephp/janephp/pull/750) Replace 'findUrlFactory' with 'findUriFactory'

### Removed
- Removed the AutoMapper component to let him live in [its own repository](https://github.com/jolicode/automapper)

### Fixed
- [AutoMapper] [GH#753](https://github.com/janephp/janephp/pull/753) Fix: AutoMapper should accept getters with default properties

## [7.5.3] - 2023-08-04
### Changed
- [JsonSchema] [GH#436](https://github.com/janephp/janephp/pull/436) Better PHPDoc for generated Map type properties

### Fixed
- [AutoMapper] [GH#742](https://github.com/janephp/janephp/pull/742) Always require registry during cache warmup
- [AutoMapper] [GH#741](https://github.com/janephp/janephp/pull/741) `#[MapToContext]` should accept virtual properties

## [7.5.2] - 2023-07-10
### Added
- [AutoMapper] [GH#733](https://github.com/janephp/janephp/pull/733) Configure date format with context
- [AutoMapper] [GH#731](https://github.com/janephp/janephp/pull/731) Introduce new attribute `MapToContext`

### Fixed
- [AutoMapper] [GH#734](https://github.com/janephp/janephp/pull/734) Cache warmer should generate mappers for nested classes
- [JsonSchema] [GH#739](https://github.com/janephp/janephp/pull/739) Add getSupportedTypes method to generated Normalizers

## [7.5.1] - 2023-06-13
### Fixed
- [AutoMapper] [GH#729](https://github.com/janephp/janephp/pull/729) Allow to add full objects in `allowed_attribute` context

## [7.5.0] - 2023-04-24
### Changed
- [AutoMapper] [GH#720](https://github.com/janephp/janephp/pull/720) Add mixed return type to generated mappers
- [AutoMapper] [GH#721](https://github.com/janephp/janephp/pull/721) Create mappers on Symfony cache warmup

## [7.4.4] - 2023-04-14
### Added
- [AutoMapper] [GH#710](https://github.com/janephp/janephp/pull/710) Add Enum support in AutoMapper bundle
- [AutoMapper] [GH#711](https://github.com/janephp/janephp/pull/711) Allow nesting properties with `MapperContext::isAllowedAttribute()`
- [AutoMapper] [GH#713](https://github.com/janephp/janephp/pull/713) Use serializer's "ignore" attribute
- [AutoMapper] [GH#714](https://github.com/janephp/janephp/pull/714) Allow custom context in AutomapperNormalizer
- [AutoMapper] [GH#716](https://github.com/janephp/janephp/pull/716) Add readonly properties support
- [AutoMapper] [GH#718](https://github.com/janephp/janephp/pull/718) Disallow readonly target when using object to populate

### Fixed
- [JsonSchema] [GH#717](https://github.com/janephp/janephp/pull/717) Validate all nested classes too

## [7.4.3] - 2023-03-23
### Added
- [AutoMapper] [GH#707](https://github.com/janephp/janephp/pull/707) Add Enum support

## [7.4.2] - 2023-03-09
### Fixed
- [OpenApi3] [GH#690](https://github.com/janephp/janephp/pull/690) Content-Type header typo for multipart/form-data.
- [Jane] [GH#694](https://github.com/janephp/janephp/pull/694) Improve Windows paths support.
- [Jane] [GH#695](https://github.com/janephp/janephp/pull/695) Fix circular reference OOM, fix null pointer exceptions.
- [Jane] [GH#705](https://github.com/janephp/janephp/pull/705) Fixed some Symfony deprecations

## [7.4.1] - 2023-01-16
### Changed
- [JsonSchema] [GH#688](https://github.com/janephp/janephp/pull/688) Allow php-jsonpointer/php-jsonpointer v4
- [OpenAPI] [GH#687](https://github.com/janephp/janephp/pull/687) Default message in 4XX & 5XX exception codes when no description is given.
- [OpenAPI] [GH#687](https://github.com/janephp/janephp/pull/687) Response is passed in exceptions as a property

## [7.4.0] - 2022-11-15
### Added
- [OpenAPI] [GH#665](https://github.com/janephp/janephp/pull/655) Support API Platform and different response content types; application/ld+json application/hal+json application/vnd.api+json, through optional accept headers in Client methods.
- [OpenAPI] [GH#656](https://github.com/janephp/janephp/pull/656) Support anyOf reference or null property in schema
- [JsonSchema] [GH#674](https://github.com/janephp/janephp/pull/674) Skip normalization when property isn't set and not required in a Model

### Changed
- [OpenAPI] [GH#647](https://github.com/janephp/janephp/pull/647) Support inheritance using discriminator with mapping
- [JsonSchema] [GH#640](https://github.com/janephp/janephp/pull/640) [GH#651](https://github.com/janephp/janephp/pull/651) Rework Validation
- [OpenAPI] [GH#667](https://github.com/janephp/janephp/pull/667) Update OpenApi3 schema model

### Fixed
- [OpenAPI] [GH#636](https://github.com/janephp/janephp/pull/636) Fixing issue with http_query_build and QS array variables
- [OpenAPI] [GH#660](https://github.com/janephp/janephp/pull/660) Fix non-guessed OpenApiCommon validators
- [OpenAPI] [GH#664](https://github.com/janephp/janephp/pull/664) Fix Namespace missmatch on SubModel validation
- [JsonSchema] [GH#668](https://github.com/janephp/janephp/pull/668) Validation - Guess SubModel only on classes, not on properties
- [OpenAPI] [GH#670](https://github.com/janephp/janephp/issues/670) Missing models when using whitelisted-paths
- [OpenAPI] [GH#672](https://github.com/janephp/janephp/issues/672) Unwanted models when using whitelisted-paths

## [7.3.1] - 2022-08-22
### Changed
- [JsonSchema] [GH#643](https://github.com/janephp/janephp/pull/643) Correctly handle floats that look like integer
- [JsonSchema] [GH#644](https://github.com/janephp/janephp/pull/644) Since symfony 5, constraint Length with min option allows empty string
- [JsonSchema] [GH#639](https://github.com/janephp/janephp/pull/639) Report the actual validation errors when logging validation error

### Fixed
- [JsonSchema] [GH#645](https://github.com/janephp/janephp/pull/645) Fix nullable incompatibility between JsonSchema/OpenAPI versions

## [7.3.0] - 2022-08-03
### Added
- [JsonSchema] [GH#632](https://github.com/janephp/janephp/pull/632) Validation - Check for nullable field values
- [OpenApi] [GH#634](https://github.com/janephp/janephp/pull/634) Make a new method to get an endpoint raw response

### Deprecated
- [OpenApi] [GH#634](https://github.com/janephp/janephp/pull/634) Using Client::executeEndpoint method with $fetch parameter equals to response is deprecated, use Client::executeRawEndpoint instead.

### Removed
- [OpenApi] [GH#635](https://github.com/janephp/janephp/pull/635) Remove symfony/translation-contracts dependency

### Fixed
- [JsonSchema] [GH#629](https://github.com/janephp/janephp/pull/629) Handle validation when fields has no validation guess
- [OpenApi] [GH#633](https://github.com/janephp/janephp/pull/633) Remove `null` from endpoint `@return` statement if unexpected status code is to be thrown.

## [7.2.5] - 2022-07-01
### Added
- [JsonSchema] [GH#627](https://github.com/janephp/janephp/pull/627) Added a way to skip validation in Normalizer context

## [7.2.4] - 2022-06-15
### Fixed
- [AutoMapper] [GH#624](https://github.com/janephp/janephp/pull/624) AutoMapper directory creation should be out of registry functions

## [7.2.3] - 2022-06-15
### Changed
- [AutoMapper] [GH#623](https://github.com/janephp/janephp/pull/623) We don't need registry when not hot reloading

## [7.2.2] - 2022-03-21
### Fixed
- [AutoMapper] [GH#606](https://github.com/janephp/janephp/pull/606) Lock file when writing in AutoMapper registry

## [7.2.1] - 2022-03-05
### Fixed
- [JsonSchema] [GH#602](https://github.com/janephp/janephp/pull/602) Add defensive code to avoid null object usage
- [JsonSchema] [GH#603](https://github.com/janephp/janephp/pull/603) Add Validation compatibility for OpenApi components

### Documentation
- [AutoMapper] [GH#600](https://github.com/janephp/janephp/pull/600) Fixed link to transformer examples

## [7.2.0] - 2022-02-17
### Added
- [JsonSchema] [GH#405](https://github.com/janephp/janephp/pull/405) Validation

### Fixed
- [JsonSchema] [GH#595](https://github.com/janephp/janephp/pull/595) Fix "oneOf" with nullable

## [7.1.7] - 2022-02-03
### Added
- [OpenApi3] [GH#586](https://github.com/janephp/janephp/pull/586) Ability to customize strings field normalization/denormalization based on format keyword

### Fixed
- [JsonSchema] [GH#587](https://github.com/janephp/janephp/pull/587) Prefix property starting with number with 'n'
- [OpenApi] [GH#593](https://github.com/janephp/janephp/pull/593) Add type hints to exceptions, cleanup parent constructor call
- [OpenApi3] [GH#592](https://github.com/janephp/janephp/pull/592) Fix issue in whitelisting when having referenced schema in referenced responses
- [AutoMapper] [GH#594](https://github.com/janephp/janephp/pull/594) Issue when no targetTypes in BuiltinTransformer

## [7.1.6] - 2022-01-27
### Fixed
- [AutoMapper] [GH#589](https://github.com/janephp/janephp/pull/589) Fix setting properties when using target to populate object

## [7.1.5] - 2021-12-16
### Added
- [JsonSchema] [GH#580](https://github.com/janephp/janephp/pull/580) Add typehint for generated Normalizer & Dernomalizer

## [7.1.4] - 2021-12-16
### Added
- [OpenApi] [GH#577](https://github.com/janephp/janephp/pull/577) Handle application/problem+json error responses

### Changed
- [Jane] [GH#571](https://github.com/janephp/janephp/pull/571) Symfony 6 compatibility

### Fixed
- [AutoMapper] [GH#567](https://github.com/janephp/janephp/pull/567) Fixed MapperContext::withNewContext target_to_populate value

## [7.1.3] - 2021-11-12
### Added
- Run test suite with PHP 8.1

### Changed
- [AutoMapper] [GH#564](https://github.com/janephp/janephp/pull/564) Remove deprecations

### Fixed
- [AutoMapper] [GH#567](https://github.com/janephp/janephp/pull/567) Fix the value of `target_to_populate` on `MapperContext::withNewContext` call

## [7.1.2] - 2021-10-18
### Fixed
- [AutoMapper] [GH#560](https://github.com/janephp/janephp/pull/560) Fix fail on generic object without explicit classname

## [7.1.1] - 2021-10-08
### Fixed
- [Jane] [GH#554](https://github.com/janephp/janephp/pull/554) Relax dependency constraints for 7.1 upgrade
- [AutoMapper] [GH#553](https://github.com/janephp/janephp/pull/553) Fix generated Mappers with adder calls

## [7.1.0] - 2021-06-25
### Added
- [Jane] [GH#537](https://github.com/janephp/janephp/pull/537) Added JsonSchema & OpenApi bundles
- [AutoMapper] [GH#546](https://github.com/janephp/janephp/pull/546) Add stdClass to stdClass transformation support

### Changed
- [AutoMapper] [GH#536](https://github.com/janephp/janephp/pull/536) Update benchmark scripts

### Fixed
- [OpenAPI] [GH#543](https://github.com/janephp/janephp/pull/543) Fix jane-openapi binary file

## [7.0.0] - 2021-05-19
### Added
- [AutoMapper] [GH#462](https://github.com/janephp/janephp/pull/462) Move bundle out of the component
- [AutoMapper] [GH#433](https://github.com/janephp/janephp/pull/433) Handle dictionaries with ArrayTransformer
- [AutoMapper] [GH#432](https://github.com/janephp/janephp/pull/432) Ignore API Platform resources when using AutoMapper normalizer
- [AutoMapper] [GH#495](https://github.com/janephp/janephp/pull/495) Add Symfony Uid transformers #495
- [AutoMapper] [GH#507](https://github.com/janephp/janephp/pull/507) Add `skip_null_values` feature

### Changed
- [Jane] [GH#464](https://github.com/janephp/janephp/pull/464) Update version deps for 7-dev
- [Jane] [GH#457](https://github.com/janephp/janephp/pull/457) **BC-BREAK** Move components into `component` folder and update namespaces
- [AutoMapper] [GH#458](https://github.com/janephp/janephp/pull/458) Add PrioritizedTransformerFactoryInterface and implementation
- [AutoMapper] [GH#459](https://github.com/janephp/janephp/pull/459) Add DependentTransformerInterface and implementation
- [AutoMapper] [GH#460](https://github.com/janephp/janephp/pull/460) Add AssignedByReferenceTransformerInterface and implementation

### Fixed
- [AutoMapper] [GH#461](https://github.com/janephp/janephp/pull/461) Transformer arguments typo
- [AutoMapper] [GH#487](https://github.com/janephp/janephp/pull/487)  Can not call getName when type is adders/removers

## [6.3.9] - 2021-10-08
### Added
- [JsonSchema] [GH#556](https://github.com/janephp/janephp/pull/556) Support for $defs field

### Fixed
- [JsonSchema] [GH#542](https://github.com/janephp/janephp/pull/542) Fix cs fixer >= 3 compatibility

## [6.3.8] - 2021-05-10
### Changed
- [OpenAPI] [GH#528](https://github.com/janephp/janephp/pull/528) Added message to exception UnexpectedStatusCodeException

### Fixed
- [Jane] [GH#530](https://github.com/janephp/janephp/pull/530) Fix usage of PHP-CS-Fixer
- [OpenApi] [GH#531](https://github.com/janephp/janephp/pull/531) Fix file_exists check

## [6.3.7] - 2021-03-26
### Fixed
- [JsonSchema] [GH#521](https://github.com/janephp/janephp/pull/521) Fix normalizer mapping for reserved PHP names in JaneObjectNormalizer

## [6.3.6] - 2021-03-16
### Fixed
- [OpenAPI] [GH#513](https://github.com/janephp/janephp/pull/513) Fix method name in exceptions
- [OpenAPI] [GH#514](https://github.com/janephp/janephp/pull/514) Fix high level exception that can start with number

## [6.3.5] - 2021-03-12
### Fixed
- [OpenAPI] [GH#511](https://github.com/janephp/janephp/pull/511) Fix `is_file` char limit

## [6.3.4] - 2021-03-11
### Changed
- [OpenAPI] [GH#508](https://github.com/janephp/janephp/pull/508) Improve exceptions to have higher-level exceptions

### Fixed
- [Jane] [GH#502](https://github.com/janephp/janephp/pull/502) PHP 8 support
- [OpenAPI] [GH#509](https://github.com/janephp/janephp/pull/509) Fix exception reserved variable keywords

## [6.3.3] - 2021-02-10
### Added
- [OpenAPI] [GH#500](https://github.com/janephp/janephp/pull/500) Bring ability skip query / header check

### Changed
- [AutoMapper] [GH#498](https://github.com/janephp/janephp/pull/498) Improve FileLoader: do not use registry at all when hot reload is disabled.
- [AutoMapper] [GH#498](https://github.com/janephp/janephp/pull/498) When using bundle: automatically disable hot reload when not in debug mode.

### Fixed
- [OpenAPI] [GH#497](https://github.com/janephp/janephp/pull/497) Fixing a whitelisted paths notation in OpenAPI 2 and 3 guessers

## [6.3.2] - 2020-12-23
### Changed
- [AutoMapper] [GH#465](https://github.com/janephp/janephp/pull/465) Allow dateTimeFormat customisation when initialising
- [Jane] [GH#483](https://github.com/janephp/janephp/pull/483) PHP 8 support

### Fixed
- [OpenAPI] [GH#472](https://github.com/janephp/janephp/pull/472) Check if contentType is null before passing to mb_strpos
- [OpenAPI] [GH#480](https://github.com/janephp/janephp/pull/480) Allow null for non required request body
- [OpenAPI] [GH#482](https://github.com/janephp/janephp/pull/482) Fix ExceptionGenerator
- [OpenAPI] [GH#484](https://github.com/janephp/janephp/pull/484) Handle multipart body integer as string

### Documentation
- [OpenAPI] [GH#477](https://github.com/janephp/janephp/pull/477) Fixed typo about usage with Symfony recipe

## [6.3.1] - 2020-11-24
### Fixed
- [Jane] [GH#463](https://github.com/janephp/janephp/pull/463) Update version deps

## [6.3.0] - 2020-11-22
### Added
- [AutoMapper] [GH#443](https://github.com/janephp/janephp/pull/443) Add configuration to use custom NameConverter
- [AutoMapper] [GH#446](https://github.com/janephp/janephp/pull/446) Add autoconfigure on TransformerFactoryInterface
- [AutoMapper] [GH#453](https://github.com/janephp/janephp/pull/453) Introducing autoregistering of custom Mapper configuration

### Changed
- [AutoMapper] [GH#431](https://github.com/janephp/janephp/pull/431) Add a second parameter to `forMember` with target object
- [AutoMapper] [GH#452](https://github.com/janephp/janephp/pull/452) Improve `ClassLoaderInterface` service definition

## [6.2.5] - 2020-11-18
### Fixed
- [AutoMapper] [GH#426](https://github.com/janephp/janephp/pull/426) Fix mapping for empty collection value on an array property
- [OpenAPI] [GH#444](https://github.com/janephp/janephp/pull/444) Remove unused files
- [OpenAPI] [GH#447](https://github.com/janephp/janephp/pull/447) Fix errors caused by empty responses in OpenAPI specs

### Documentation
- [OpenAPI] [GH#438](https://github.com/janephp/janephp/pull/438) Fix documentation namespaces for consistency

## [6.2.4] - 2020-10-02
### Fixed
- [Jane] [GH#423](https://github.com/janephp/janephp/pull/423) Skip required fields in Normalizer generation

## [6.2.3] - 2020-09-29
### Fixed
- [Jane] [GH#421](https://github.com/janephp/janephp/pull/421)  Fix non-array data in denormalize

### Added
- [OpenAPI] [GH#412](https://github.com/janephp/janephp/pull/412) Test generated client in CI

## [6.2.2] - 2020-09-15
### Fixed
- [Jane] [GH#416](https://github.com/janephp/janephp/pull/416) Fix version constraints for json-schema

## [6.2.1] - 2020-09-10
### Fixed
- [OpenAPI] [GH#408](https://github.com/janephp/janephp/pull/408) Fix http_build_query method calls
- [Jane] [GH#409](https://github.com/janephp/janephp/pull/409) Fix version constraints for Jane Packages

## [6.2.0] - 2020-09-09
### Added
- [OpenAPI] [GH#393](https://github.com/janephp/janephp/pull/393) Throw unexpected status code when nothing matched in Endpoint
- [Jane] [GH#390](https://github.com/janephp/janephp/pull/390) Bring Runtime with generated files
- [AutoMapper] [GH#397](https://github.com/janephp/janephp/pull/397) Update AutoMapper to be able to bind custom TransformerFactory
- [JsonSchema] [GH#404](https://github.com/janephp/janephp/pull/404) Handle required fields

### Changed
- [Jane] [GH#388](https://github.com/janephp/janephp/pull/388) [GH#389](https://github.com/janephp/janephp/pull/389) Update `doctrine/inflector` to support both v1 & v2
- [AutoMapper] [GH#403](https://github.com/janephp/janephp/pull/403)  Allow ^5.0 for phpdocumentor/reflection-docblock

### Fixed
- [AutoMapper] [GH#396](https://github.com/janephp/janephp/pull/396) Typo in DateTime transformer
- [JsonSchema] [GH#394](https://github.com/janephp/janephp/pull/394) Return object in denormalize if data is null
- [JsonSchema] [GH#392](https://github.com/janephp/janephp/pull/392) Nullable property handling

### Documentation
- [OpenAPI] [GH#395](https://github.com/janephp/janephp/pull/395) Better Authentication documentation

## [6.1.1] - 2020-09-15
### Fixed
- [Jane] [GH#414](https://github.com/janephp/janephp/pull/414) Fix dependencies for 6.1.x

## [6.1.0] - 2020-08-20
### Changed
- [OpenAPI] [GH#316](https://github.com/janephp/janephp/pull/316) Improvement & fix on whitelisted path feature
- [AutoMapper] [GH#306](https://github.com/janephp/janephp/pull/306) AutoMapper update

### Fixed
- [AutoMapper] [GH#354](https://github.com/janephp/janephp/pull/354) Do not try to create an instance of an interface
- [AutoMapper] [GH#353](https://github.com/janephp/janephp/pull/353) Allow date_time_format override from bundle
- [AutoMapper] [GH#372](https://github.com/janephp/janephp/pull/372) Use copy transformer for sibling arrays
- [Jane] [GH#371](https://github.com/janephp/janephp/pull/371) Exclude tests from classmap
- [Jane] [GH#378](https://github.com/janephp/janephp/pull/378) Remove Tests and fixtures from distributed composer installs using .gitattributes

### Refactoring
- [Jane] [GH#315](https://github.com/janephp/janephp/pull/315) Normalize components
- [OpenAPI] [GH#384](https://github.com/janephp/janephp/pull/384) Naming
- [OpenAPI] [GH#382](https://github.com/janephp/janephp/pull/382) Guessers
- [OpenAPI] [GH#381](https://github.com/janephp/janephp/pull/381) Generators
- [OpenAPI] [GH#385](https://github.com/janephp/janephp/pull/385) Builder

## [6.0.5] - 2020-08-18
## Fixed
- [JsonSchema] [GH#379](https://github.com/janephp/janephp/pull/379) Fixed array items with mixed types

## [6.0.4] - 2020-08-03
### Changed
- [OpenAPI] [GH#362](https://github.com/janephp/janephp/pull/362) Allow non-standard HTTP codes
- [Jane] [GH#364](https://github.com/janephp/janephp/pull/364) Use iterable instead of ArrayObject type hint

### Fixed
- [OpenAPI] [GH#365](https://github.com/janephp/janephp/pull/365) Client methods with invalid characters (Support for GitHub OpenAPI)

## [6.0.3] - 2020-07-29

### Added
- [OpenAPI] [GH#318](https://github.com/janephp/janephp/pull/318) Handle references in operation responses
- [OpenAPI] [GH#358](https://github.com/janephp/janephp/pull/358) Being able to introduce custom QueryResolver normalizers

### Fixed
- [Jane] [GH#342](https://github.com/janephp/janephp/pull/342) Guess type for Schema when only enum property is set
- [Jane] [GH#350](https://github.com/janephp/janephp/pull/350) Deal with null schema

## [6.0.2] - 2020-06-13

### Fixed

- [Jane] [GH#335](https://github.com/janephp/janephp/pull/335) Symfony 5.1 compatibility

## [6.0.1] - 2020-06-11

### Added

- [OpenAPI] [GH#308](https://github.com/janephp/janephp/pull/308) [Authentication] Registry to handle multiple Auth scopes
- [OpenAPI] [GH#319](https://github.com/janephp/janephp/pull/319) Add support for custom endpoint generator class

### Changed

- [OpenAPI] [GH#317](https://github.com/janephp/janephp/pull/317) Allow dictionary parameters for OpenAPI 3

### Fixed

- [OpenAPI] [GH#309](https://github.com/janephp/janephp/pull/309) [Whitelist paths] fix infinite loop on circular reference in models
- [Jane] [GH#327](https://github.com/janephp/janephp/pull/327) Fix composer dependencies

## [6.0.0] - 2020-05-06

### Added

- [Jane] [GH#263](https://github.com/janephp/janephp/pull/263) Forcing a null value on non-set property can be opt-out
- [Jane] [GH#287](https://github.com/janephp/janephp/pull/287) New dump-config command
- [OpenAPI] [GH#290](https://github.com/janephp/janephp/pull/290) Whitelist paths in OpenApi to generate only needed paths and related models

### Changed

- [Jane] [GH#258](https://github.com/janephp/janephp/pull/258) **BC-BREAK** Array instead of stdClass
- [Jane] [GH#264](https://github.com/janephp/janephp/pull/264) Update master branch to 6.x version
- [Jane] [GH#268](https://github.com/janephp/janephp/pull/268) Upgrade dependencies
- [OpenAPI] [GH#289](https://github.com/janephp/janephp/pull/289) Better use of Guesser for Authentication generation

### Removed

- [OpenAPI] [GH#266](https://github.com/janephp/janephp/pull/266) **Deprecation** Removed HTTPlug Client generation
- [OpenAPI] [GH#265](https://github.com/janephp/janephp/pull/265) **Deprecation** Removed any NormalizerFactory usage
- [OpenAPI] [GH#267](https://github.com/janephp/janephp/pull/267) **Deprecation** Remove OpenApi component (replaced by OpenApi3)

### Fixed

- [OpenAPI] [GH#293](https://github.com/janephp/janephp/pull/293) Missing getSerializedBody on OpenApiRuntime BaseEndpoint class
- [JsonSchema] [GH#292](https://github.com/janephp/janephp/pull/292) Update `null` values handling in normalizers
- [OpenAPI] [GH#298](https://github.com/janephp/janephp/pull/298) Update OpenAPI v2 `null` support (with `x-nullable` field)

### Documentation

- [Jane] [GH#270](https://github.com/janephp/janephp/pull/270) Update documentation for v6

## [5.3.3] - 2020-04-23

### Added

- [JsonSchema] [GH#263](https://github.com/janephp/janephp/pull/263) Else assign null when property has no value is wrong
- [OpenAPI] [GH#283](https://github.com/janephp/janephp/pull/283) Handle server port of OpenAPI v3 specification

### Changed

- [JsonSchema] [GH#295](https://github.com/janephp/janephp/pull/295) Update `league/uri` dependency

## [5.3.2] - 2020-03-05

### Added

- [JsonSchema] [GH#239](https://github.com/janephp/janephp/pull/239) Allow different datetime formats for parsing and serializing

### Fixed

- [OpenAPI] [GH#247](https://github.com/janephp/janephp/pull/247) Fix multiple OpenAPI version in configuration mapping
- [OpenAPI] [GH#250](https://github.com/janephp/janephp/pull/250) Fix when no operationId is given and path has a dot
- [OpenAPI] [GH#251](https://github.com/janephp/janephp/pull/251) Fixing issue where class names could contains dots
- [CI] [GH#256](https://github.com/janephp/janephp/pull/256) Fix setup-php steps
- [OpenAPI] [GH#255](https://github.com/janephp/janephp/pull/255) Fix null parameter to empty string transformation to keep zero value
- [OpenAPI] [GH#259](https://github.com/janephp/janephp/pull/259) & [GH#260](https://github.com/janephp/janephp/pull/260) Update & fix twitter fixtures

### Documentation

- [GH#254](https://github.com/janephp/janephp/pull/254) Improves JSON multi schemas doc
- [GH#244](https://github.com/janephp/janephp/pull/244) Improved documentation

## [5.3.1] - 2020-02-04

### Added

- [Jane] [GH#240](https://github.com/janephp/janephp/pull/240) Add date type
- [Jane] [GH#238](https://github.com/janephp/janephp/pull/238) Allow DateTimeInterface as typehint
- [Jane] [GH#242](https://github.com/janephp/janephp/pull/242) Add logo for Jane 🎉

### Fixed

- [Jane] Fixing gitsplit
- [OpenAPI] [GH#234](https://github.com/janephp/janephp/pull/234) Fix variable conflict in authentication generator
- [JsonSchema] [GH#235](https://github.com/janephp/janephp/pull/235) Fixed JsonSchema dependencies

## [5.3.0] - 2020-01-15

### Added

* [OpenAPI] [GH#177](https://github.com/janephp/janephp/pull/177) Authentication feature
* [Jane] [GH#210](https://github.com/janephp/janephp/pull/210) Added JaneObjectNormalizer to lazy-load Normalizer when needed
* [OpenAPI] [GH#206](https://github.com/janephp/janephp/pull/206) OpenAPI 2 component
* [AutoMapper] [GH#214](https://github.com/janephp/janephp/pull/214) Added a quick documentation about the AutoMapper
* [Jane] [GH#223](https://github.com/janephp/janephp/pull/223) Add test with lowest dependencies

### Changed

* [Jane] [GH#212](https://github.com/janephp/janephp/pull/212) Improve sorting in MultiType guesser
* [Jane] [GH#213](https://github.com/janephp/janephp/pull/213) More explicit message for denormalize exceptions
* [Jane] [GH#220](https://github.com/janephp/janephp/pull/220) Upgrade phpunit to v8.x
* [Jane] [GH#224](https://github.com/janephp/janephp/pull/224) Added typehints onto all methods & parameters and fixing obvious AST miss-match

### Deprecated

* [Jane] [GH#210](https://github.com/janephp/janephp/pull/210) NormalizerFactory is now deprecated, you should use JaneObjectNormalizer
* [OpenAPI] [GH#206](https://github.com/janephp/janephp/pull/206) Branch 4.x & all v4.x tags are now deprecated, you should use last OpenAPI 2 component
* [OpenAPI] [GH#206](https://github.com/janephp/janephp/pull/206) OpenAPI component is now deprecated, you should use OpenAPI 3 component

### Removed

* [OpenAPI] [GH#216](https://github.com/janephp/janephp/pull/216) Removed out-of-date USAGE instructions
* [Jane] [GH#222](https://github.com/janephp/janephp/pull/222) Remove coveralls integration

### Fixed

* [OpenAPI] [GH#218](https://github.com/janephp/janephp/pull/218) Fixed ServerPluginGenerator by not using instance variables
* [OpenAPI] [GH#217](https://github.com/janephp/janephp/pull/217) Missing requestBody Reference handling
* [Jane] [GH#227](https://github.com/janephp/janephp/pull/227) Fixing JSON Pointer being created too much times
* [OpenAPI] [GH#226](https://github.com/janephp/janephp/pull/226) Missing non-body parameters Reference handling
* [OpenAPI] [GH#230](https://github.com/janephp/janephp/pull/230) Better handling of nullable properties (& strict mode) in Normalizers

## [5.2.2] - 2019-12-09

### Added

* [Jane] [GH#192](https://github.com/janephp/janephp/pull/192) & [GH#195](https://github.com/janephp/janephp/pull/195) Symfony 5 compatibility
* [Jane] [GH#197](https://github.com/janephp/janephp/pull/197) Local cache for Reference contents
* [Jane] [GH#198](https://github.com/janephp/janephp/pull/198) Remove generated code before new generation
* [OpenAPI] [GH#203](https://github.com/janephp/janephp/pull/203) Readonly property support

### Changed

* [Jane] [GH#190](https://github.com/janephp/janephp/pull/190) Cleaning all components (dependencies / tests)
* [Jane] [GH#196](https://github.com/janephp/janephp/pull/196) Make cs fixer opt-in instead of opt-out

### Fixed

* [OpenAPI] [GH#173](https://github.com/janephp/janephp/pull/173) No content in requestBody
* [OpenAPI] [GH#194](https://github.com/janephp/janephp/pull/194) Fixed undefined offset error with servers paths
* [OpenAPI] [GH#201](https://github.com/janephp/janephp/pull/202) Fix nullable array types in generated Normalizer
* [JsonSchema] [GH#193](https://github.com/janephp/janephp/pull/193) Fixing non-sanitized property fields & methods

## [5.2.1] - 2019-11-25

### Changed

* [OpenAPI] [GH#174](https://github.com/janephp/janephp/pull/174) Better handling of nullable fields in Normalizer
* [OpenAPI] [GH#175](https://github.com/janephp/janephp/pull/175) Handling of nullable attribute on query parameters

### Fixed

* Fixing Gitsplit workflow
* [AutoMapper] [GH#179](https://github.com/janephp/janephp/pull/179) Fixing incompatible changes in Symfony 5.0

## [5.2.0] - 2019-11-05

### Added

* GH Actions for tests & cs-check
* [JsonSchema] [GH#167](https://github.com/janephp/janephp/pull/167) add deprecated behavior (for classes & properties)

### Changed

* [JsonSchema] [GH#132](https://github.com/janephp/janephp/pull/132) upgrade specs to draft-06
* [JsonSchema] [GH#134](https://github.com/janephp/janephp/pull/134) upgrade specs to draft-07
* [JsonSchema] [GH#136](https://github.com/janephp/janephp/pull/136) upgrade specs to 2019-09 (last version)
* [OpenAPI] [GH#137](https://github.com/janephp/janephp/pull/137) upgrade specs to 3.0.2 (last version)

### Fixed

* [OpenAPI] [GH#143](https://github.com/janephp/janephp/pull/143) Check if object for normalizers supportNormalization method
* [JsonSchema] [GH#141](https://github.com/janephp/janephp/pull/141) Better nullable checks on generated normalizers

## [5.1.1] - 2019-09-27

### Fixed

* [OpenAPI] [GH#129](https://github.com/janephp/janephp/pull/129) Missing exception interfaces

## [5.1.0] - 2019-09-26

### Added

* [OpenAPI] [GH#120](https://github.com/janephp/janephp/pull/120) Support for PSR18 client generation
* [Documentation] [GH#122](https://github.com/janephp/janephp/pull/122) OpenAPI example

### Changed

* [Documentation] [GH#124](https://github.com/janephp/janephp/pull/124) Update documentation with new PSR-18 Client

### Fixed

* [OpenAPI] [GH#118](https://github.com/janephp/janephp/pull/118) Correct discriminator classname snake_case into camelCase for denormalization
* [OpenAPI] [GH#121](https://github.com/janephp/janephp/pull/121) Fix nullable property support
* [OpenAPI] [GH#123](https://github.com/janephp/janephp/pull/123) / [GH#125](https://github.com/janephp/janephp/pull/125) Check if path exists before using it in *ClientGenerator
* [OpenAPI] [GH#126](https://github.com/janephp/janephp/pull/126) Fix reference in endpoint parameter schema

### Removed

* [OpenAPI] [GH#119](https://github.com/janephp/janephp/pull/119) Removing OpenAPI v2 support

### Deprecated

* [OpenAPI] [GH#120](https://github.com/janephp/janephp/pull/120) Jane\OpenApiRuntime\Client\Psr7HttplugClient deprecated, use Jane\OpenApiRuntime\Client\Psr18Client instead.
* [OpenAPI] [GH#120](https://github.com/janephp/janephp/pull/120) Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint deprecated, use Jane\OpenApiRuntime\Client\Psr7Endpoint instead.
* [OpenAPI] [GH#120](https://github.com/janephp/janephp/pull/120) Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait deprecated, use Jane\OpenApiRuntime\Client\Psr7EndpointTrait instead.

## [5.0.1] - 2019-09-16

### Fixed

* [JsonSchema] [GH#109](https://github.com/janephp/janephp/pull/109) Support for default value for array type
* [OpenAPI] [GH#115](https://github.com/janephp/janephp/pull/115) Fix Content-Type comparison in generated endpoints

## [5.0.0] - 2019-09-11

### Added

* **BC-BREAK** All libraries now use php-parser v4
* [OpenAPI] **BC-BREAK** Use the openapi v3 specification (v2 is no longer supported)
* [OpenAPI] **BC-BREAK** No more asynchronous code generation (sync and async api can be the same on php 7.3 by using ext-async)
* Composer upgrade  (PHP version to 7.2 and dependencies)

### Fixed

* [OpenAPI] GH#101 Remove warning when using Generate command

## [4.4.0] - 2019-06-17

### Added

* [Jane] nullable properties
* [Jane] add null type to PHPDoc for getters/setters
* [Jane] checking if helper function exists before creating it (php-parser 3.x / 4.x compatibility)

## [4.3.0] - 2019-05-31

* [OpenAPI] Discriminator support
* [Jane] php-parser 4.x compatibility

## [4.2.0] - 2019-08-03

* [Jane] Add support for default value in model (only scalar)
* [OpenAPI] Add support for httplug 2.0

## [4.1.0] - 2019-01-24

* [Jane] Added `use-cacheable-supports-method` option to add CacheableSupportsMethodInterface to your Normalizers.

## [4.0.4] - 2018-10-19

* [OpenAPI] Fix items object generation for json schema and openapi #29
* [OpenAPI] Fix bad parameter generation #41 #18
* [Jane] Fix properties having the same name #25
* [Jane] Fix bad normalizer on reserved keywords #16

## [4.0.1] - 2018-02-22

### Fixed

* [JsonSchema Runtime] Fix composer dependency to allow symfony 4
* [OpenAPI] Be less restrictive to detect schema serializable

## [4.0.0] - 2018-02-12

### Added

* **BC-BREAK** New namespace and repository name due to using a new monolith repository
* **BC-BREAK** JanePHP now require and generate code for PHP 7.1
* **BC-BREAK** Config file is now mandatory, console client does not provide anymore options
* **BC-BREAK** There is no more Resource file, all calls are now done in an unique Client class
* [OpenAPI] **BC-BREAK** Arguments for each endpoint may be different, they are now split between query, form and headers.
* [OpenAPI] **BC-BREAK** Response with 400 to 599 status code will know throw custom generated exception instead of
  returning an object
* [OpenAPI] **BC-BREAK** Base path is no more present in the url as you can use a HTTPlug plugin for that
* [OpenAPI] New documentation available at [https://jane.readthedocs.io/en/latest/](https://jane.readthedocs.io/en/latest/)
* [OpenAPI] Add Optional Asynchronous Client Generation (through async option)
* [OpenAPI] Add support for file in form parameters which will create a multipart stream
* [OpenAPI] Better method naming when dealing with special characters thanks to @pyrech
* [OpenAPI] New class `Client` generated which will contains all endpoints of the API
* [OpenAPI] New factory method for the client which provide better DX to start using a Generated Client
* [OpenAPI] Add support for global parameters
* [OpenAPI] Support Symfony 4
* [OpenAPI] Each endpoint have its own class, this helps extending a generated Client.
* [OpenAPI] Add support for binary format
* [Jane] Add a not strict mode, which generate more permissive normalizers (allowing null / not
  defined properties in several places)
* [Jane] Add property description in doc block comment
* [Jane] Add support for additionalProperties / patternProperties with existing properties

### Fixed

* [OpenAPI] When a response does have a Schema which is not an object, it will not return the json_decoded value of the data
  instead of null
* [OpenAPI] Remove base path from method name
* [OpenAPI] Fix references having a space in the name
* [OpenAPI] Fix `Content-Type` and `Accept` headers
* [Jane] Fix all-of not merging properties with the same name

## Older versions

See :

* https://github.com/janephp/jane/releases
* https://github.com/janephp/openapi/releases

[Unreleased]: https://github.com/janephp/janephp/compare/v7.13.0...HEAD
[7.13.0]: https://github.com/janephp/janephp/compare/v7.12.0...v7.13.0
[7.12.0]: https://github.com/janephp/janephp/compare/v7.11.2...v7.12.0
[7.11.2]: https://github.com/janephp/janephp/compare/v7.11.1...v7.11.2
[7.11.1]: https://github.com/janephp/janephp/compare/v7.11.0...v7.11.1
[7.11.0]: https://github.com/janephp/janephp/compare/v7.10.4...v7.11.0
[7.10.4]: https://github.com/janephp/janephp/compare/v7.10.3...v7.10.4
[7.10.3]: https://github.com/janephp/janephp/compare/v7.10.2...v7.10.3
[7.10.2]: https://github.com/janephp/janephp/compare/v7.10.1...v7.10.2
[7.10.1]: https://github.com/janephp/janephp/compare/v7.10.0...v7.10.1
[7.10.0]: https://github.com/janephp/janephp/compare/v7.9.0...v7.10.0
[7.9.0]: https://github.com/janephp/janephp/compare/v7.8.1...v7.9.0
[7.8.1]: https://github.com/janephp/janephp/compare/v7.8.0...v7.8.1
[7.8.0]: https://github.com/janephp/janephp/compare/v7.7.0...v7.8.0
[7.7.0]: https://github.com/janephp/janephp/compare/v7.6.2...v7.7.0
[7.6.2]: https://github.com/janephp/janephp/compare/v7.6.1...v7.6.2
[7.6.1]: https://github.com/janephp/janephp/compare/v7.6.0...v7.6.1
[7.6.0]: https://github.com/janephp/janephp/compare/v7.5.6...v7.6.0
[7.5.6]: https://github.com/janephp/janephp/compare/v7.5.5...v7.5.6
[7.5.5]: https://github.com/janephp/janephp/compare/v7.5.4...v7.5.5
[7.5.4]: https://github.com/janephp/janephp/compare/v7.5.3...v7.5.4
[7.5.3]: https://github.com/janephp/janephp/compare/v7.5.2...v7.5.3
[7.5.2]: https://github.com/janephp/janephp/compare/v7.5.1...v7.5.2
[7.5.1]: https://github.com/janephp/janephp/compare/v7.5.0...v7.5.1
[7.5.0]: https://github.com/janephp/janephp/compare/v7.4.4...v7.5.0
[7.4.4]: https://github.com/janephp/janephp/compare/v7.4.3...v7.4.4
[7.4.3]: https://github.com/janephp/janephp/compare/v7.4.2...v7.4.3
[7.4.2]: https://github.com/janephp/janephp/compare/v7.4.1...v7.4.2
[7.4.1]: https://github.com/janephp/janephp/compare/v7.4.0...v7.4.1
[7.4.0]: https://github.com/janephp/janephp/compare/v7.3.1...v7.4.0
[7.3.1]: https://github.com/janephp/janephp/compare/v7.3.0...v7.3.1
[7.3.0]: https://github.com/janephp/janephp/compare/v7.2.5...v7.3.0
[7.2.5]: https://github.com/janephp/janephp/compare/v7.2.4...v7.2.5
[7.2.4]: https://github.com/janephp/janephp/compare/v7.2.3...v7.2.4
[7.2.3]: https://github.com/janephp/janephp/compare/v7.2.2...v7.2.3
[7.2.2]: https://github.com/janephp/janephp/compare/v7.2.1...v7.2.2
[7.2.1]: https://github.com/janephp/janephp/compare/v7.2.0...v7.2.1
[7.2.0]: https://github.com/janephp/janephp/compare/v7.1.7...v7.2.0
[7.1.7]: https://github.com/janephp/janephp/compare/v7.1.6...v7.1.7
[7.1.6]: https://github.com/janephp/janephp/compare/v7.1.5...v7.1.6
[7.1.5]: https://github.com/janephp/janephp/compare/v7.1.4...v7.1.5
[7.1.4]: https://github.com/janephp/janephp/compare/v7.1.3...v7.1.4
[7.1.3]: https://github.com/janephp/janephp/compare/v7.1.2...v7.1.3
[7.1.2]: https://github.com/janephp/janephp/compare/v7.1.1...v7.1.2
[7.1.1]: https://github.com/janephp/janephp/compare/v7.1.0...v7.1.1
[7.1.0]: https://github.com/janephp/janephp/compare/v7.0.0...v7.1.0
[7.0.0]: https://github.com/janephp/janephp/compare/v6.3.8...v7.0.0
[6.3.9]: https://github.com/janephp/janephp/compare/v6.3.8...v6.3.9
[6.3.8]: https://github.com/janephp/janephp/compare/v6.3.7...v6.3.8
[6.3.7]: https://github.com/janephp/janephp/compare/v6.3.6...v6.3.7
[6.3.6]: https://github.com/janephp/janephp/compare/v6.3.5...v6.3.6
[6.3.5]: https://github.com/janephp/janephp/compare/v6.3.4...v6.3.5
[6.3.4]: https://github.com/janephp/janephp/compare/v6.3.3...v6.3.4
[6.3.3]: https://github.com/janephp/janephp/compare/v6.3.2...v6.3.3
[6.3.2]: https://github.com/janephp/janephp/compare/v6.3.1...v6.3.2
[6.3.1]: https://github.com/janephp/janephp/compare/v6.3.0...v6.3.1
[6.3.0]: https://github.com/janephp/janephp/compare/v6.2.5...v6.3.0
[6.2.5]: https://github.com/janephp/janephp/compare/v6.2.4...v6.2.5
[6.2.4]: https://github.com/janephp/janephp/compare/v6.2.3...v6.2.4
[6.2.3]: https://github.com/janephp/janephp/compare/v6.2.2...v6.2.3
[6.2.2]: https://github.com/janephp/janephp/compare/v6.2.1...v6.2.2
[6.2.1]: https://github.com/janephp/janephp/compare/v6.2.0...v6.2.1
[6.2.0]: https://github.com/janephp/janephp/compare/v6.1.1...v6.2.0
[6.1.1]: https://github.com/janephp/janephp/compare/v6.1.0...v6.1.1
[6.1.0]: https://github.com/janephp/janephp/compare/v6.0.5...v6.1.0
[6.0.5]: https://github.com/janephp/janephp/compare/v6.0.4...v6.0.5
[6.0.4]: https://github.com/janephp/janephp/compare/v6.0.3...v6.0.4
[6.0.3]: https://github.com/janephp/janephp/compare/v6.0.2...v6.0.3
[6.0.2]: https://github.com/janephp/janephp/compare/v6.0.1...v6.0.2
[6.0.1]: https://github.com/janephp/janephp/compare/v6.0.0...v6.0.1
[6.0.0]: https://github.com/janephp/janephp/compare/v5.3.3...v6.0.0
[5.3.2]: https://github.com/janephp/janephp/compare/v5.3.2...v5.3.3
[5.3.2]: https://github.com/janephp/janephp/compare/v5.3.1...v5.3.2
[5.3.1]: https://github.com/janephp/janephp/compare/v5.3.0...v5.3.1
[5.3.0]: https://github.com/janephp/janephp/compare/v5.2.2...v5.3.0
[5.2.2]: https://github.com/janephp/janephp/compare/v5.2.1...v5.2.2
[5.2.1]: https://github.com/janephp/janephp/compare/v5.2.0...v5.2.1
[5.2.0]: https://github.com/janephp/janephp/compare/v5.1.1...v5.2.0
[5.1.1]: https://github.com/janephp/janephp/compare/v5.1.0...v5.1.1
[5.1.0]: https://github.com/janephp/janephp/compare/v5.0.1...v5.1.0
[5.0.1]: https://github.com/janephp/janephp/compare/v5.0.0...v5.0.1
[5.0.0]: https://github.com/janephp/janephp/compare/v4.4.0...v5.0.0
[4.4.0]: https://github.com/janephp/janephp/compare/v4.3.0...v4.4.0
[4.3.0]: https://github.com/janephp/janephp/compare/v4.2.0...v4.3.0
[4.2.0]: https://github.com/janephp/janephp/compare/v4.1.0...v4.2.0
[4.1.0]: https://github.com/janephp/janephp/compare/v4.0.4...v4.1.0
[4.0.4]: https://github.com/janephp/janephp/compare/v4.0.2...v4.0.4
[4.0.2]: https://github.com/janephp/janephp/compare/v4.0.1...v4.0.2
[4.0.1]: https://github.com/janephp/janephp/compare/v4.0.0...v4.0.1
[4.0.0]: https://github.com/janephp/janephp/releases/tag/v4.0.0
