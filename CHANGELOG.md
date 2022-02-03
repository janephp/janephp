# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
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

[Unreleased]: https://github.com/janephp/janephp/compare/v7.1.3...HEAD
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
