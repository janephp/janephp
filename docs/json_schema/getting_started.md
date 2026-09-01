# Getting started: using JSON Schema

Jane JSON Schema is a library to generate models and serializers in PHP from [JSON Schema](http://json-schema.org/) specifications (draft 2019-09 and 2020-12).

## At a glance

- Generate typed models and normalizers from JSON Schema files.
- Supports JSON Schema drafts 2019-09 and 2020-12 for generation.
- Supports JSON Schema 2020-12 validation rules via the `validation` option.

## Supported versions

- JSON Schema generation: draft 2019-09 and draft 2020-12
- JSON Schema validation: draft 2020-12

## Jump to

- [Installation](#installation)
- [Generating](#generating)
- [Configuration file](#configuration-file)
- [Using](#using)

## Installation

Add this library with composer as a `dev` dependency:

```bash
composer require --dev jane-php/json-schema
```

This library contains a lot of dependencies to be able to generate code which are not needed on runtime. However, the
generated code depends on other libraries and a few classes that are available through the runtime package. It is highly
recommended to add the runtime dependency as a requirement through composer:

```bash
composer require --dev jane-php/json-schema-runtime
```

With Symfony ecosystem, we created a recipe to make it easier to use Jane. You just have to allow contrib recipes before
installing our packages:

```bash
composer config extra.symfony.allow-contrib true
```

Then when installing `jane-php/json-schema`, it will add all required files:

- `bin/json-schema-generate`: a binary file to run JSON Schema generation based on `config/jane/json-schema.php`
  configuration.
- `config/jane/json-schema.php`: your Jane configuration (see "Configuration file")
- `config/packages/json-schema.yaml`: Symfony Serializer configured to be optimized for Jane

By default, generated code is not formatted. To make it compliant to PSR2 standard and others format norms, you can add
the [PHP CS Fixer](http://cs.sensiolabs.org/) library to your dev dependencies (and it makes it easier to debug!):

```bash
composer require --dev friendsofphp/php-cs-fixer
```

## Generating

This library provides a PHP console application to generate the Model. You can use it by executing the following command
at the root of your project:

```bash
php vendor/bin/jane jane:generate
```

> [!NOTE]
> `jane:generate` is the canonical command name since Jane 7.14. The bare `generate` name is still available as a
> backward-compatibility alias.

This command will try to read a config file named `.jane` located on the current working directory. However, you can
name it as you like and use the `--config-file` option to specify its location and name:

```bash
php vendor/bin/jane jane:generate --config-file=jane-configuration.php
```

> [!NOTE]
> If you are using Symfony recipe, this command is embbeded in the `bin/json-schema-generate` binary file, you only
> have to run it to make it work 🎉

> [!NOTE]
> No others options can be passed to this command. Having a config file ensure that a team working on the project
> always use the same set of parameters and, when it changes, give vision of the new option(s) used to generate the
> code.

## Configuration file

The configuration file consists of a simple PHP script returning an array:

```php
return [
  'json-schema-file' => __DIR__ . '/json-schema.json',
  'root-class' => 'MyModel',
  'namespace' => 'Vendor\Library\Generated',
  'directory' => __DIR__ . '/generated',
];
```

This example shows the minimum configuration required to generate a Model:

* `json-schema-file`: Specify the location of your json schema file, it can be a local file or a remote one
  `https://my.domain.com/my-schema.json`
* `root-class`: The root class of the root object defined in your json schema, if there is no property on the root
  object it will not be used
* `namespace`: Root namespace of all of your generated code
* `directory`: Directory where the code will be generated at

Given this configuration you will need to add the following configuration to composer, in order to setup the PSR-4
autoload for the generated files:

```json
"autoload": {
  "psr-4": {
    "Vendor\\Library\\Generated\\": "generated/"
  }
}
```

For more details about JSON Schema generation, you can read [JSON Schema component](./component.md) documentation.

## Using

This library generates basics P.O.P.O. objects (Plain Old PHP Objects) with a bunch of setters / getters. It also
generates all normalizers to handle denormalization from a json string, and normalization.

All normalizers respect the `Symfony\Component\Serializer\Normalizer\NormalizerInterface` and
`Symfony\Component\Serializer\Normalizer\DenormalizerInterface` from the
[Symfony Serializer Component](https://symfony.com/doc/current/components/serializer.html).

It also generate a `JaneObjectNormalizer` class that will act as an usual Symfony Normalizer that will lazy-load any
needed normalizers.

Given this configuration:

```php
return [
  'json-schema-file' => __DIR__ . '/json-schema.json',
  'root-class' => 'MyModel',
  'namespace' => 'Vendor\Library\Generated',
  'directory' => __DIR__ . '/generated',
];
```

To use it out of Symfony ecosystem, you will have to do this::

```php
$normalizers = [
  new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
  new \Vendor\Library\Generated\Normalizer\JaneObjectNormalizer(),
];

$serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder()]);
$serializer->deserialize('{...}');
```

With Symfony ecosystem, you just have to use the recipe and all the configuration will be added automatically.
This serializer will be able to encode and decode every data respecting your JSON Schema specification thanks to
autowiring of the generated normalizers.

## Related

- [JSON Schema component](./component.md)
- [Validation guide](../guides/validation.md)
- [Compatibility guide](../guides/compatibility.md)
- [Project changelog](https://github.com/janephp/janephp/blob/main/CHANGELOG.md)
