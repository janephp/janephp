Using OpenAPI
=============

Jane OpenAPI is a library to generate, in PHP, an http client and its associated models and serializers from a `OpenAPI`_
specification: version 2 or 3.

Installation
------------

Jane supports both OpenAPI v2 & v3. Depending on your OpenAPI version, the command line will detect which version to use
and if this version is actually installed in your dependencies.

You have to add the generation library as a ``dev`` dependency. This library contains a lot of dependencies, to be able
to generate code, which are not needed on runtime. However, the generated code depends on other libraries and a few
classes that are available through the runtime package. It is highly recommended to add the runtime dependency as a
requirement. Choose your library depending on OpenAPI version you need (you can even install both if you want):

.. code-block:: bash

    # OpenAPI 2
    composer require --dev jane-php/open-api-2 "^5.0"
    composer require jane-php/open-api-runtime "^5.0"

    # OpenAPI 3
    composer require --dev jane-php/open-api-3 "^5.0"
    composer require jane-php/open-api-runtime "^5.0"

By default, generated code is not formatted. To make it compliant to PSR2 standard and others format norms, you can add
the `PHP CS Fixer`_ library to your dev dependencies (and it makes it easier to debug!):

.. code-block:: bash

    composer require --dev friendsofphp/php-cs-fixer


.. _`OpenAPI`: https://www.openapis.org/
.. _PHP CS Fixer: http://cs.sensiolabs.org/

Generating
----------

This library provides a PHP console application to generate the Model. You can use it by executing the following command
at the root of your project:

.. code-block:: bash

    php vendor/bin/jane-openapi generate

This command will try to read a config file named ``.jane-openapi`` located on the current working directory. However,
you can name it as you like and use the ``--config-file`` option to specify its location and name:

.. code-block:: bash

    php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php

.. note::
    No others options can be passed to the command. Having a config file ensure that a team working on the project
    always use the same set of parameters and, when it changes, give vision of the new option(s) used to generate the
    code.

Configuration file
------------------

The configuration file consists of a simple PHP script returning an array::

    <?php

    return [
        'openapi-file' => __DIR__ . '/openapi.json',
        'namespace' => 'Vendor\Library\Api',
        'directory' => __DIR__ . '/generated',
        'client' => 'psr18',
    ];

This example shows the minimum configuration required to generate a client:

 * ``openapi-file``: Specify the location of your OpenApi file, it can be a local file or a remote one
   ``https://my.domain.com/my-api.json``. It can also be a ``yaml`` file.
 * ``namespace``: Root namespace of all of your generated code
 * ``directory``: Directory where the code will be generated
 * ``client``: Client to generate (``httplug`` or ``psr18``, ``httplug`` is deprecated and will be removed in Jane v6)

Given this configuration, you will need to add the following configuration to composer, in order to load the generated
files:

.. code-block:: javascript

    "autoload": {
        "psr-4": {
            "Vendor\\Library\\Api\\": "generated/"
        }
    }

For more details about generating JSON Schema, you can read ":doc:`/OpenAPI/generate`" documentation.

Using
-----

Generating a client will produce same classes as the :doc:`/documentation/JsonSchema` library:

 * Model files in the ``Model`` namespace
 * Normalizer files in the ``Normalizer`` namespace
 * A ``JaneObjectNormalizer`` class in the ``Normalizer`` namespace

Furthermore, it generates:

 * Endpoints files in the ``Endpoint`` namespace, each API Endpoint will generate a class containing all the logic to
   go from Object to Request, and from Response to Object with the generated Normalizer
 * ``Client`` file in the root namespace containing all API endpoints

Creating the API Client
-----------------------

Generated ``Client`` class have a static method ``create`` which act like a factory to create your Client::

    <?php

    $apiClient = Vendor\Library\Generated\Client::create();

Creating the Serializer
-----------------------

Like in :doc:`/documentation/JsonSchema`, creating a serializer is done by using the ``JaneObjectNormalizer`` class::

    <?php

    $normalizers = [
        new Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
        new Vendor\Library\Generated\Normalizer\JaneObjectNormalizer(),
    ];
    $encoders = [new Symfony\Component\Serializer\Encoder\JsonEncoder(
        new Symfony\Component\Serializer\Encoder\JsonEncode([Symfony\Component\Serializer\Encoder\JsonEncode::OPTIONS => \JSON_UNESCAPED_SLASHES]),
        new Symfony\Component\Serializer\Encoder\JsonDecode([Symfony\Component\Serializer\Encoder\JsonDecode::ASSOCIATIVE => false])),
    ];

    $serializer = new Symfony\Component\Serializer\Serializer($normalizers, $encoders);
    $serializer->deserialize('{...}');

With Symfony ecosystem, you just have to use the recipe and all the configuration will be added automatically.
This serializer will be able to encode and decode every data respecting your OpenAPI specification.

Using the API Client
--------------------

Generated code has complete `PHPDoc`_ comment on each method, which should correctly describe the endpoint.
Method names for each endpoint depend on the ``operationId`` property of the OpenAPI specification. And if not present
it will be generated from the endpoint path::

    <?php

    $apiClient = Vendor\Library\Generated\Client::create();
    // Operation id being listFoo
    $foos = $apiClient->listFoo();

Also depending on the parameters of the endpoint, it may have 2 or more arguments.

For more details about using OpenAPI, you can read ":doc:`/OpenAPI/usage`" documentation.

.. _PSR18: https://www.php-fig.org/psr/psr-18/
.. _PHPDoc: https://www.phpdoc.org/
