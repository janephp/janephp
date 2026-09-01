# Component: JSON Schema

Jane JsonSchema is a library to generate models and serializers in PHP from a [JSON Schema](http://json-schema.org/)
specification (draft [2019-09](https://json-schema.org/specification.html) and 2020-12).

## At a glance

- Generate models and normalizers from JSON Schema files.
- Supports generation from draft 2019-09 and 2020-12 schemas.
- Supports JSON Schema 2020-12 validation via the `validation` option.

## Supported versions

- JSON Schema generation: draft 2019-09 and 2020-12
- JSON Schema validation: draft 2020-12

## Jump to

- [Installation](#installation)
- [Generating a Model](#generating-a-model)
- [Options](#options)
- [Using a generated Model](#using-a-generated-model)

## Installation

Add this library with composer as a `dev` dependency:

```bash
composer require --dev jane-php/json-schema
```

This library contains a lot of dependencies to be able to generate code which are not needed on runtime. However, the
generated code depends on other libraries and a few classes that are available through the runtime package. It is
mandatory to add the runtime dependency as a requirement through composer:

```bash
composer require jane-php/json-schema-runtime
```

With Symfony ecosystem, we created a recipe to make it easier to use Jane. You just have to allow contrib recipes before
installing our packages:

```bash
composer config extra.symfony.allow-contrib true
```

Then when installing `jane-php/json-schema`, it will add all the required files:

- `bin/json-schema-generate`: a binary file to run JSON Schema generation based on `config/jane/json-schema.php`
configuration;
- `config/jane/json-schema.php`: your Jane configuration (see "Configuration file");
- `config/packages/json-schema.yaml`: Symfony Serializer configured to be optimized for Jane.

By default, generated code is not formatted, to make it compliant to PSR2 standard and others coding style formats, you
can add the [PHP CS Fixer](http://cs.sensiolabs.org/) library to your dev dependencies (and it makes it easier to
debug!):

```bash
composer require --dev friendsofphp/php-cs-fixer
```

## Generating a Model

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
> If you are using Symfony recipe, this command is embbeded in the ``bin/json-schema-generate`` binary file, you only
> have to run it to make it work 🎉

> [!NOTE]
> No others options can be passed to this command. Having a config file ensure that a team working on the project
> always use the same set of parameters and, when it changes, give vision of the new option(s) used to generate the
> code.

> [!TIP]
> If you have a really big specification and want to optimize your generation time, you can disable garbage collector
> during generation, you can read more about it on [Scrutinizer blog post](https://scrutinizer-ci.com/blog/composer-gc-performance-who-is-affected-too).
> To do that, use Jane as following: `php -d zend.enable_gc=0 vendor/bin/jane jane:generate`.

### Configuration file

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

## Options

Other options are available to customize the generated code:

- `reference`: A boolean which indicate to add the support for
[JSON Reference](https://tools.ietf.org/id/draft-pbryan-zyp-json-ref-03.html) into the generated code.
- `date-format`: A date-time format to specify how the generated code should encode and decode `\DateTime` object
 to string.  This option is only for format `date-time`.
- `full-date-format`: A date format to specify how the generated code should encode and decode `\DateTime` object
 to string. This option is only for format `date`.
- `date-prefer-interface`: The `\DateTimeInterface` is the base of every `\DateTime` related action. This makes
 it more compatible with other DateTime libraries like [Carbon](https://carbon.nesbot.com/). This option replace
`\DateTime` returns with `\DateTimeInterface`, it's disabled by default.
- `date-input-format`: During denormalization (from array to object), we may have a different format than the output
 format. This option allows you to specify which format you want. By default it will take `date-format` configuration.
- `strict`: A boolean which indicate strict mode (true by default), not strict mode generate more permissive client
 not respecting some standards (nullable field as an example) client.
- `use-fixer`: A boolean which indicate if we make a first cs-fix after code generation, is disabled by default.
- `fixer-config-file`: A string to specify where to find the custom configuration for the cs-fixer after code
 generation, will remove all Jane default cs-fixer default configuration.
- `clean-generated`: A boolean which indicate if we clean generated output before generating new files, is enabled by
 default.
- `use-cacheable-supports-method`: A boolean which indicate if we use `CacheableSupportsMethodInterface` interface
 to improve caching performances when used with Symfony Serializer.
- `skip-null-values`: When having nullable properties, you can enforce normalization to skip theses
 properties even if they are nullable. This option allows you to not have theses properties when they're not set
 (`null`). By default it is enabled.
- `skip-required-fields`: If your model has required fields, this option allows you to skip the required behavior
 that forces them to be present during denormalization. By default it is disabled.
- `validation`: Will enable validation following JSON Schema validation specification. By default it is disabled. You
  can read more about it in the dedicated [Validation guide](../guides/validation.md).
- `validators`: An array of `Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface` instances to register
  additional validators during generation. Only meaningful when `validation` is enabled. See the
  [Custom validators](../guides/validation.md#custom-validators) section of the Validation guide.
- `include-null-value`: Will enable a way to manage null values. By default it is enabled.
- `enums-as-objects`: When enabled, schemas with `type: string` or `type: integer` and an `enum` will be generated as native PHP backed enums instead of plain scalar types, and properties referencing these schemas will be typed with the enum class. Disabled by default.
- `default-additional-properties`: Controls how a schema that leaves `additionalProperties` unspecified is treated.
  `null` (default) keeps each component's own behavior: closed models for the JsonSchema component and OpenAPI 2,
  open models (unknown keys captured) for OpenAPI 3 / 3.1. `true` treats unspecified `additionalProperties` as open
  in every component; `false` treats it as closed in every component — the recommended setting when migrating from
  older Jane versions where unspecified meant closed. An explicit `additionalProperties` value in the specification
  always wins over this option. The generated Symfony validation `Collection` constraint (`allowExtraFields`) follows
  the same resolution: while the option is unset it keeps its previous behavior (extra fields allowed), and once the
  option is set — or the specification sets `additionalProperties: false` — it matches the generated model.
- `allow-external-refs`: A boolean which indicates whether remote (`http://` / `https://`) references may be resolved
  during code generation. Disabled by default: Jane rejects external references to protect you from SSRF and
  unwanted network access at generation time. Enable it only if your specification legitimately references remote
  documents.
- `external-ref-allowed-hosts`: An array of host names restricting which remote hosts `allow-external-refs` may reach
  (subdomains of the listed hosts are allowed too). When empty, every host is allowed as long as
  `allow-external-refs` is enabled.
- `external-ref-follow-redirects`: A boolean controlling whether fetching a remote reference may follow HTTP
  redirects. Disabled by default: a redirect response aborts the resolution, so an allowlisted host cannot bounce
  the fetch to an arbitrary host. When enabled, redirects are followed blindly — the redirect target host is not
  re-checked against `external-ref-allowed-hosts`, so only enable this for specifications whose remote documents
  you fully trust.
- `allowed-local-ref-roots`: An array of directory roots a local reference may resolve into, in addition to the
  directory of the referencing document (which is always allowed). By default a local `$ref` can only point to a
  file inside its own directory, so split layouts where your JSON Schema documents reference siblings in another
  directory fail to generate. Declaring a common parent directory as an allowed root unlocks them:

```php
return [
  // your usual configuration ...
  'allowed-local-ref-roots' => [
    __DIR__ . '/schemas',
  ],
];
```

  Roots are normalized with `realpath()`: if your layout involves symlinks, declare the real target path.

## Using a generated Model

This library generates basics P.O.P.O. objects (Plain Old PHP Objects) with a bunch of setters / getters. It also
generates all normalizers to handle denormalization from a json string, and normalization.

All normalizers respect the `Symfony\Component\Serializer\Normalizer\NormalizerInterface` and
``Symfony\Component\Serializer\Normalizer\DenormalizerInterface`` from the
[Symfony Serializer Component](https://symfony.com/doc/current/components/serializer.html).

It also generate a `JaneObjectNormalizer` class that will act as an usual Symfony Normalizer.

Given this configuration:

```php
return [
  'json-schema-file' => __DIR__ . '/json-schema.json',
  'root-class' => 'MyModel',
  'namespace' => 'Vendor\Library\Generated',
  'directory' => __DIR__ . '/generated',
];
```

You will have to do this::

```php
$normalizers = [
  new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
  new \Vendor\Library\Generated\Normalizer\JaneObjectNormalizer(),
];

$serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder()]);
$serializer->deserialize('{...}');
```

This serializer will be able to encode and decode every data respecting your json schema specification.

## Multi schemas generation

Jane JsonSchema allows to generate multiple schemas at the same time with different namespaces and directories to handle
JSON References on others schemas.

### Configuration

In order to use this feature, configuration of the `.jane` file will require a mapping of JSON Schema specification
file linked to a root class, namespace and directory.

As an example you may have this:

```php
return [
  'mapping' => [
    __DIR__ . '/schema-foo.json' => [
      'root-class' => 'Foo',
      'namespace' => 'Vendor\Library\Foo',
      'directory' => __DIR__ . '/generated/Foo',
    ],
    __DIR__ . '/schema-bar.json' => [
      'root-class' => 'Bar',
      'namespace' => 'Vendor\Library\Bar',
      'directory' => __DIR__ . '/generated/Bar',
    ],
  ],
];
```

Using this configuration, Jane JsonSchema will generate all class of the `schema-foo.json` and `schema-bar.json`
specification. Also, all references between both schemas will use the specific namespace.

As an example, given that you have the `Foo` object in `schema-foo.json`:

```json
{
  "type": "object",
  "properties": {
    "foo": { "type": "string" }
  }
}
```

And the `Bar` one in `schema-bar.json`:

```json
{
  "type": "object",
  "properties": {
    "foo": { "$ref": "schema-foo.json#" }
  }
}
```

The property `foo` of the `Bar` object will reference the `Vendor\Library\Foo\Foo` class.

> [!NOTE]
> If we don't specify the `schema-foo.json` in this configuration, Jane JsonSchema will still fetch the
> specification and generate the `Foo` class. However, it will be under the same namespace
> (`Vendor\Library\BarSchema`), and will have `FooBar` as the class name, instead of the `Foo` one.

> [!NOTE]
> If provided, the options `fixer-config-file`, `use-fixer` and `clean-generated` have to bee defined at the
> root level of the array and not in each mapping schema configuration.

### Usage

In this case, Jane JsonSchema will generate two distinct `JaneObjectNormalizer`, to be able to use references between
schemas, you will only need to use both normalizers:

```php
$normalizers = [
  new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
  new \Vendor\Library\Foo\Normalizer\JaneObjectNormalizer(),
  new \Vendor\Library\Bar\Normalizer\JaneObjectNormalizer(),
];

$serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder()]);
$serializer->deserialize('{...}');
```

> [!NOTE]
> With Symfony ecosystem, you just have to use the recipe and all the configuration will be added automatically.
> Both serializer will be able to encode and decode every data respecting your JSON Schema specification thanks to
> autowiring of the generated normalizers.

## Related

- [JSON Schema getting started](./getting_started.md)
- [Validation guide](../guides/validation.md)
- [Compatibility guide](../guides/compatibility.md)
- [Project changelog](https://github.com/janephp/janephp/blob/main/CHANGELOG.md)
