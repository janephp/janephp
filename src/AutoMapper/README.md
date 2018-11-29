# Jane AutoMapper

**Expiremental Library**

Generate automapper class which allows to automap values from Class to Class. 

## Features

 * Optimized mapper from named class to named class (equal or very close to native perf)
 * Custom property transformer
 * Use symfony/property-info for mapping (allow extracting properties from reflection / phpdoc / serializer / doctrine / ...)
 * Array/stdClass Mapper (a.k.a. Normalizers)
 * Type casting
 * Symfony/Serializer Bridge
 * Groups support
 * Circular Reference
 * Private Properties mapping
 * Use or disable constructor when creating the target object
 * Custom Value Transformer
 * MaxDepth
 * Cache generated code and regenerate on file change (check can be deactivated for even faster code)
 * AutoRegister (will create mapping even if not registered)

## Todo

 * Selecting specific attributes to map
 * Allow adding ignoring attributes
 * Handling inheritance with class discriminator
 * MaxDepth Handler
 * Constructor Arguments
 * Name Converter Supports

## Why ?

Applications often have different layers, between a database, an api, your view etc... Often you need to transfer data
from one domain layer to another one, which have not the same model but which are similar.

Writing mapping code between layers is a boring task and does not add value to your code, that's where this lib is useful, it's
meant to reduce maintenance of this code and help you focus on your business need.

Other great PHP libraries exist on this subject:

 * https://github.com/mark-gerarts/automapper-plus
 * https://github.com/idr0id/Papper
 * https://github.com/michelsalib/BCCAutoMapperBundle
 * ... https://packagist.org/?q=automapper&p=0

What change here is that the main focus is **performance**, so instead of reading / analyzing metadata at each call it will
compile mapping into stupid php code like you would have done in your application `$newData->seeFoo($oldData->getFoo());`

You can see benchmarks of existing automapper library here : https://travis-ci.org/idr0id/php-mappers-benchmarks/builds/361253808?utm_source=github_status&utm_medium=notification

Please note that like any other benchmark it's done on a specific use case, so you should not trust me and benchmark your own
use case.

## Some use cases

 * Mapping from a Database Model to DTO One (for DDD or Api by example)
 * Mapping from any Model to an array or a stdClass for Serialization
 * Mapping from a POST request to a model (for a form by example)
 * Deep Cloning (map from and to the same class)
 * ....

## Example

See tests
