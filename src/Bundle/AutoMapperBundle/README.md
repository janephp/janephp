# AutoMapper Bundle

The component ships a Bundle to allow a quick integration with Symfony.
To use it, you just have to add the main bundle class to your `config/bundles.php` file.
```
return [
    // ...
    Jane\Bundle\AutoMapper\JaneAutoMapperBundle::class => ['all' => true],
];
```

Then configure the bundle to your needs, for example:
```
jane_auto_mapper:
  autoregister: true
  mappings:
    - source: Jane\Bundle\AutoMapper\Tests\Fixtures\User
      target: Jane\Bundle\AutoMapper\Tests\Fixtures\UserDTO
      pass: DummyApp\UserConfigurationPass
```

Possible properties:
- `normalizer` (default: `false`):  A boolean which indicate if we inject the AutoMapperNormalizer;
- `cache_dir` (default: `%kernel.cache_dir%/automapper`): This settings allows you to customize the output directory for generated mappers;
- `mappings`: This option allows you to customize Mapper metadata, you have to specify `source` & `target` data types and related configuration using `pass` field.
This configuration should implements `Jane\Bundle\AutoMapper\Configuration\ConfigurationPassInterface`.

## Normalizer Bridge
A Normalizer Bridge is available, aiming to be 100% feature compatible with the ObjectNormalizer of the ``symfony/serializer`` component. The goal of this bridge **is not to replace the ObjectNormalizer** but rather providing a very fast alternative.

As shown in the benchmark above, using this bridge leads up to more than 8x speed increase in normalization.

## Future consideration
Things that could be done later:

* symfony/form bridge for mapping request data to object
* symfony/validator integration:

PHP 7.4 may give a problem to the symfony/validator component where typed properties can be problem, given a class like this:

```
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
