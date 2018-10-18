# Change Log

## 5.0 - Unreleased

 * [OpenAPI] **BC-BREAK** Use the openapi v3 specification (v2 is not more supported)

## 4.0.1 - 2018-02-22

### Fixed

 * [JsonSchema Runtime] Fix composer dependency to allow symfony 4
 * [OpenAPI] Be less restrictive to detect schema serializable

## 4.0.0 - 2018-02-12

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
