# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [5.2.0] - 2019-11-05

### Added 

* GH Actions for tests & cs-check
* [JsonSchema] [GH#167](https://github.com/janephp/janephp/pull/167) add deprecated behavior (for classes & properties)

### Changed

* [JsonSchema] [GH#132](https://github.com/janephp/janephp/pull/132) upgrade specs to draft-06
* [JsonSchema] [GH#134](https://github.com/janephp/janephp/pull/134) upgrade specs to draft-07
* [JsonSchema] [GH#136](https://github.com/janephp/janephp/pull/136) upgrade specs to 2019-09 (last version)
* [OpenApi] [GH#137](https://github.com/janephp/janephp/pull/137) upgrade specs to 3.0.2 (last version)

### Fixed 

* [OpenApi] [GH#143](https://github.com/janephp/janephp/pull/143) Check if object for normalizers supportNormalization method
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

[Unreleased]: https://github.com/janephp/janephp/compare/v5.2.0...HEAD
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
