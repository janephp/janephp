# AutoMapper

## Description
Taken from [AutoMapper/AutoMapper](https://github.com/AutoMapper/AutoMapper)

> AutoMapper is a simple little library built to solve a deceptively complex problem - getting rid of code that mapped one object to another. This type of code is rather dreary and boring to write, so why not invent a tool to do it for us?

In PHP libraries and application mapping from one object to another is fairly common:

* ObjectNormalizer / GetSetMethodNormalizer in symfony/serializer
* Mapping request data to object in symfony/form
* Hydrate object from sql results in doctrine
* Migrating legacy data to new model
* Mapping from database model to dto objects (API / CQRS / ...)
* ...

The goal of this component is to offer an abstraction on top of this subject. For that goal it provides an unique interface (other code is only implementation detail):

```php
interface AutoMapperInterface
{
    /**
     * Map data from to target.
     *
     * @param array|object        $source  Any data object, which may be an object or an array
     * @param string|array|object $target  To which type of data, or data, the source should be mapped
     * @param Context             $context Options mappers have access to
     *
     * @return array|object The mapped object
     */
    public function map($source, $target, Context $context = null);
}
```

The source is from where the data comes from, it can be either an array or an object.
The target is where the data should be mapped to, it can be either a string (representing a type: array or class name) or directly an array or object (in that case construction of the object is avoided).

Current implementation handle all of those possiblities at the exception of the mapping from a dynamic object (array / stdClass) to another dynamic object.

## Usage
Someone who wants to map an object will only have to do this:

```php
// With class name
$target = $automapper->map($source, Foo::class);
// With existing object
$target = new Foo();
$target = $automapper->map($source, $target);
// To an array
$target = $automapper->map($source, 'array');
// From an array
$source = ['a' => 'b'];
$target = $automapper->map($source, Foo::class);
```

## Context
Context object allow to pass options for the mapping:

```php
// Using context
$context = new Context();
$target = $automapper->map($source, Foo::class, $context);

// Groups (serializer annotation), will only map value that match those group in source and target
$context = new Context(['groupA', 'groupB']);
// Allowed attributes, will only map specific properties (exclude others), allow nesting for sub mapping like the serializer component
$context = new Context(null, ['propertyA', 'propertyB', 'foo' => ['fooPropertyA']]);
// Ignored attributes, exclude thos propreties include others
$context = new Context(null, null, ['propertyA', 'propertyB', 'foo' => ['fooPropertyA']]);
// Set circular reference limit
$context->setCircularReferenceLimit(2);
// Set circular reference handler
$context->setCircularReferenceHandler(function () { ... });
```

## Other features
### Nested Mapping
This component map nested class when it's possible.

### Circular Reference
Default circular reference implementation is to keep them during mapping, which means somethings like:

```php
$foo = new Foo();
$foo->setFoo($foo);

$target = $this->automapper->map($foo, 'array');
```

will produce an array where the `foo` property will be a reference to the parent.

Having that allow using this component as a DeepCloning service by mapping to the same object:

```php
$foo = new Foo();
$foo->setFoo($foo);

$deepClonedFoo = $this->automapper->map($foo, Foo::class);
```

### Max Depth
This component understand the Max Depth Annotation of the Serializer component and will not map after it's reached.

### Name Converter
Default implementation allows you to pass a Name Converter when converting to or from an array to change the property name used.

### Discriminator Mapping
This component understand the Discriminator Mapping Annotation of the Serializer component and should correctly handle construction of object when having inheritance.

### Type casting
This component will try to correctly map scalar values (going from int to string, etc ...).

## Implementation
Default implementation use code generation for mapping, it reads once the metadata needed to build the mapper then write PHP code, after this, no metadata reading or analysis is done, only the generated mapper is used.

This allow for very fast mapping, here is some benchmarks using the library:

* [travis-ci.org/idr0id/php-mappers-benchmarks/builds/361253808?utm_source=github_status&utm_medium=notification](https://travis-ci.org/idr0id/php-mappers-benchmarks/builds/361253808?utm_source=github_status&utm_medium=notification)
* [travis-ci.org/php-serializers/ivory-serializer-benchmark](https://travis-ci.org/php-serializers/ivory-serializer-benchmark)

Benchmark on the component on serializer part only (code source here [joelwurtz/ivory-serializer-benchmark:automapper@`symfony`](https://github.com/joelwurtz/ivory-serializer-benchmark/tree/symfony/automapper) [](/joelwurtz/ivory-serializer-benchmark/tree/HEAD@{2019-02-14T16:48:16Z}/automapper)):

![benchmark](https://user-images.githubusercontent.com/90466/52822853-36e88c80-30b3-11e9-8839-71fc2a17fe8e.png)

[Example of generated code](https://gist.github.com/joelwurtz/7ee48dd768f6d39ccc78d6ab7bdea22a)

## Bundle

The component ships a Bundle to allow a quick integration with Symfony.
To use it, you just have to add the main bundle class to your `config/bundles.php` file.
```php
return [
    // ...
    Jane\Component\AutoMapper\Bundle\JaneAutoMapperBundle::class => ['all' => true],
];
```

Then configure the bundle to your needs, for example:
```yaml
jane_auto_mapper:
  autoregister: true
  mappings:
    - source: Jane\Component\AutoMapper\Bundle\Tests\Fixtures\User
      target: Jane\Component\AutoMapper\Tests\Fixtures\UserDTO
      pass: DummyApp\UserConfigurationPass
```

Possible properties:
- `normalizer` (default: `false`):  A boolean which indicate if we inject the AutoMapperNormalizer;
- `cache_dir` (default: `%kernel.cache_dir%/automapper`): This settings allows you to customize the output directory for generated mappers;
- `mappings`: This option allows you to customize Mapper metadata, you have to specify `source` & `target` data types and related configuration using `pass` field.
This configuration should implements `Jane\Component\AutoMapper\Bundle\Configuration\ConfigurationPassInterface`.

## Normalizer Bridge
A Normalizer Bridge is available, aiming to be 100% feature compatible with the ObjectNormalizer of the ``symfony/serializer`` component. The goal of this bridge **is not to replace the ObjectNormalizer** but rather providing a very fast alternative.

As shown in the benchmark above, using this bridge leads up to more than 8x speed increase in normalization.

## Future consideration
Things that could be done later:

* symfony/form bridge for mapping request data to object
* symfony/validator integration:

PHP 7.4 may give a problem to the symfony/validator component where typed properties can be problem, given a class like this:

```php
class Foo {
    /** @Assert\NotNull() */
    public int $foo;
}
```

An user may send a null value (in a form by example or JSON), and PHP will raise an error before the validation, since the validation occurs on the mapped object.

This component can help resolving this case with the actual behavior:

* Create a dummy class with the same properties as Foo but without type checking
* Mapping user data to this dummy class (using the automapper component)
* Validating this dummy class with the metadata from the Foo class
* Mapping the dummy object to the foo class (using the automapper component)

Feel free to challenge as much as possible.
