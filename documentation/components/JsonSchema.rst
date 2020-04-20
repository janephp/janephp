JSON Schema
===========

Introduction
------------

Jane JsonSchema is a library to generate models and serializers in PHP from a `JSON Schema`_ draft `2019-09`_.

Installation
------------

Add this library with composer as a ``dev`` dependency:

.. code-block:: bash

    composer require --dev jane-php/json-schema "^6.0"

This library contains a lot of dependencies to be able to generate code which are not needed on runtime. However, the
generated code depends on other libraries and a few classes that are available through the runtime package. It is
mandatory to add the runtime dependency as a requirement through composer:

.. code-block:: bash

    composer require jane-php/json-schema-runtime "^6.0"

With Symfony ecosystem, we created a recipe to make it easier to use Jane. You just have to allow contrib recipes before
installing our packages:

.. code-block:: bash

    composer config extra.symfony.allow-contrib true

Then when installing ``jane-php/json-schema``, it will add all the required files:

- ``bin/json-schema-generate``: a binary file to run JSON Schema generation based on ``config/jane/json-schema.php``
  configuration;
- ``config/jane/json-schema.php``: your Jane configuration (see "Configuration file");
- ``config/packages/json-schema.yaml``: Symfony Serializer configured to be optimized for Jane.

By default, generated code is not formatted, to make it compliant to PSR2 standard and others coding style formats, you
can add the `PHP CS Fixer`_ library to your dev dependencies (and it makes it easier to debug!):

.. code-block:: bash

    composer require --dev friendsofphp/php-cs-fixer


.. _`2019-09`: https://json-schema.org/specification.html
.. _`JSON Schema`: http://json-schema.org/
.. _PHP CS Fixer: http://cs.sensiolabs.org/

Generating a Model
------------------

This library provides a PHP console application to generate the Model. You can use it by executing the following command
at the root of your project:

.. code-block:: bash

    php vendor/bin/jane generate

This command will try to read a config file named ``.jane`` located on the current working directory. However, you can
name it as you like and use the ``--config-file`` option to specify its location and name:

.. code-block:: bash

    php vendor/bin/jane generate --config-file=jane-configuration.php

.. note::
    If you are using Symfony recipe, this command is embbeded in the ``bin/json-schema-generate`` binary file, you only
    have to run it to make it work 🎉

.. note::
    No others options can be passed to this command. Having a config file ensure that a team working on the project
    always use the same set of parameters and, when it changes, give vision of the new option(s) used to generate the
    code.

.. hint::
    If you have a really big specification and want to optimize your generation time, you can disable garbage collector
    during generation, you can read more about it on `Scrutinizer blog post`_ . To do that, use Jane as following:
    ``php -d zend.enable_gc=0 vendor/bin/jane generate``.

.. _`Scrutinizer blog post`: https://scrutinizer-ci.com/blog/composer-gc-performance-who-is-affected-too

Configuration file
~~~~~~~~~~~~~~~~~~

The configuration file consists of a simple PHP script returning an array::

    <?php

    return [
        'json-schema-file' => __DIR__ . '/json-schema.json',
        'root-class' => 'MyModel',
        'namespace' => 'Vendor\Library\Generated',
        'directory' => __DIR__ . '/generated',
    ];

This example shows the minimum configuration required to generate a Model:

 * ``json-schema-file``: Specify the location of your json schema file, it can be a local file or a remote one
   ``https://my.domain.com/my-schema.json``
 * ``root-class``: The root class of the root object defined in your json schema, if there is no property on the root
   object it will not be used
 * ``namespace``: Root namespace of all of your generated code
 * ``directory``: Directory where the code will be generated at

Given this configuration you will need to add the following configuration to composer, in order to setup the PSR-4
autoload for the generated files:

.. code-block:: javascript

    "autoload": {
        "psr-4": {
            "Vendor\\Library\\Generated\\": "generated/"
        }
    }

Options
~~~~~~~

Other options are available to customize the generated code:

 * ``reference``: A boolean which indicate to add the support for `JSON Reference`_ into the generated code.
 * ``date-format``: A date-time format to specify how the generated code should encode and decode ``\DateTime`` object
   to string.  This option is only for format ``date-time``.
 * ``full-date-format``: A date format to specify how the generated code should encode and decode ``\DateTime`` object
   to string. This option is only for format ``date``.
 * ``date-prefer-interface``: The ``\DateTimeInterface`` is the base of every ``\DateTime`` related action. This makes
   it more compatible with other DateTime libraries like `Carbon`_. This option replace ``\DateTime`` returns with
   ``\DateTimeInterface``, it's disabled by default.
 * ``date-input-format``: During denormalization (from array to object), we may have a different format than the output
   format. This option allows you to specify which format you want. By default it will take ``date-format``
   configuration.
 * ``strict``: A boolean which indicate strict mode (true by default), not strict mode generate more permissive client
   not respecting some standards (nullable field as an example) client.
 * ``use-fixer``: A boolean which indicate if we make a first cs-fix after code generation, is disabled by default.
 * ``fixer-config-file``: A string to specify where to find the custom configuration for the cs-fixer after code
   generation, will remove all Jane default cs-fixer default configuration.
 * ``clean-generated``: A boolean which indicate if we clean generated output before generating new files, is enabled by
   default.
 * ``use-cacheable-supports-method``: A boolean which indicate if we use ``CacheableSupportsMethodInterface`` interface
   to improve caching performances when used with Symfony Serializer.
 * ``skip-null-values``: When having nullable properties, you can enforce normalization to skip theses
   properties even if they are nullable. This option allows you to not have theses properties when they're not set
   (``null``). By default it is enabled.

.. _`JSON Reference`: https://tools.ietf.org/id/draft-pbryan-zyp-json-ref-03.html
.. _`Carbon`: https://carbon.nesbot.com/

Using a generated Model
-----------------------

This library generates basics P.O.P.O. objects (Plain Old PHP Objects) with a bunch of setters / getters. It also
generates all normalizers to handle denormalization from a json string, and normalization.

All normalizers respect the ``Symfony\Component\Serializer\Normalizer\NormalizerInterface`` and
``Symfony\Component\Serializer\Normalizer\DenormalizerInterface`` from the `Symfony Serializer Component`_.

It also generate a ``JaneObjectNormalizer`` class that will act as an usual Symfony Normalizer.

Given this configuration::

    <?php

    return [
        'json-schema-file' => __DIR__ . '/json-schema.json',
        'root-class' => 'MyModel',
        'namespace' => 'Vendor\Library\Generated',
        'directory' => __DIR__ . '/generated',
    ];

You will have to do this::

    <?php

    $normalizers = [
        new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
        new \Vendor\Library\Generated\Normalizer\JaneObjectNormalizer(),
    ];
    $encoders = [new \Symfony\Component\Serializer\Encoder\JsonEncoder(
        new \Symfony\Component\Serializer\Encoder\JsonEncode(),
        new \Symfony\Component\Serializer\Encoder\JsonDecode([\Symfony\Component\Serializer\Encoder\JsonDecode::ASSOCIATIVE => true])),
    ];

    $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
    $serializer->deserialize('{...}');

This serializer will be able to encode and decode every data respecting your json schema specification.

.. _Symfony Serializer Component: https://symfony.com/doc/current/components/serializer.html

Multi schemas generation
------------------------

Jane JsonSchema allows to generate multiple schemas at the same time with different namespaces and directories to handle
JSON References on others schemas.

Configuration
~~~~~~~~~~~~~

In order to use this feature, configuration of the ``.jane`` file will require a mapping of JSON Schema specification
file linked to a root class, namespace and directory.

As an example you may have this::

    <?php

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

Using this configuration, Jane JsonSchema will generate all class of the ``schema-foo.json`` and ``schema-bar.json``
specification. Also, all references between both schemas will use the specific namespace.

As an example, given that you have the ``Foo`` object in ``schema-foo.json``::

    {
        "type": "object",
        "properties": {
            "foo": { "type": "string" }
        }
    }

And the ``Bar`` one in ``schema-bar.json``::

    {
        "type": "object",
        "properties": {
            "foo": { "$ref": "schema-foo.json#" }
        }
    }

The property ``foo`` of the ``Bar`` object will reference the ``Vendor\Library\Foo\Foo`` class.

.. note::
    If we don't specify the ``schema-foo.json`` in this configuration, Jane JsonSchema will still fetch the
    specification and generate the ``Foo`` class. However, it will be under the same namespace
    (``Vendor\Library\BarSchema``), and will have ``FooBar`` as the class name, instead of the ``Foo`` one.

.. note::
    If provided, the options ``fixer-config-file``, ``use-fixer`` and ``clean-generated`` have to bee defined at the
    root level of the array and not in each mapping schema configuration.

Usage
~~~~~

In this case, Jane JsonSchema will generate two distinct ``JaneObjectNormalizer``, to be able to use references between
schemas, you will only need to use both normalizers::

    $normalizers = [
        new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
        new \Vendor\Library\Foo\Normalizer\JaneObjectNormalizer(),
        new \Vendor\Library\Bar\Normalizer\JaneObjectNormalizer(),
    ];
    $encoders = [new \Symfony\Component\Serializer\Encoder\JsonEncoder(
        new \Symfony\Component\Serializer\Encoder\JsonEncode(),
        new \Symfony\Component\Serializer\Encoder\JsonDecode([\Symfony\Component\Serializer\Encoder\JsonDecode::ASSOCIATIVE => true])),
    ];

    $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
    $serializer->deserialize('{...}');

.. note::

    With Symfony ecosystem, you just have to use the recipe and all the configuration will be added automatically.
    Both serializer will be able to encode and decode every data respecting your JSON Schema specification thanks to
    autowiring of the generated normalizers.
