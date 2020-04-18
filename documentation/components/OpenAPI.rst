OpenAPI
=======

Jane OpenAPI is a library to generate, in PHP, an HTTP client and its associated models and serializers from a
`OpenAPI`_ specification: version 2 or 3. Jane supports both OpenAPI v2 & v3. Depending on your OpenAPI version, the
command line will detect which version to use and if this version is actually installed in your dependencies.

Installation
------------

Jane supports both OpenAPI v2 & v3. Depending on your OpenAPI version, the command line will detect which version to use
and if this version is actually installed in your dependencies.

You have to add the generation library as a ``dev`` dependency. This library contains a lot of dependencies, to be able
to generate code, which are not needed on runtime. However, the generated code depends on other libraries and a few
classes that are available through the runtime package. It is mandatory to add the runtime dependency as a requirement.
Choose your library depending on OpenAPI version you need (you can even install both if you want):

.. code-block:: bash

    # OpenAPI 2
    composer require --dev jane-php/open-api-2 "^6.0"
    composer require jane-php/open-api-runtime "^6.0"

    # OpenAPI 3
    composer require --dev jane-php/open-api-3 "^6.0"
    composer require jane-php/open-api-runtime "^6.0"

With Symfony ecosystem, we created a recipe to make it easier to use Jane. You just have to allow contrib recipes before
installing our packages:

.. code-block:: bash

    composer config extra.symfony.allow-contrib true

Then when installing ``jane-php/open-api-*``, it will add all the required files:

- ``bin/open-api-generate``: a binary file to run JSON Schema generation based on ``config/jane/open-api.php``
  configuration;
- ``config/jane/open-api.php``: your Jane configuration (see "Configuration file");
- ``config/packages/open-api.yaml``: Symfony Serializer configured to be optimized for Jane.

By default, generated code is not formatted, to make it compliant to PSR2 standard and others coding style formats, you
can add the `PHP CS Fixer`_ library to your dev dependencies (and it makes it easier to debug!):

.. code-block:: bash

    composer require --dev friendsofphp/php-cs-fixer


.. _`OpenAPI`: https://www.openapis.org/
.. _PHP CS Fixer: http://cs.sensiolabs.org/

Generating a Client
-------------------

This library provides a PHP console application to generate the Model. You can use it by executing the following command
at the root of your project:

.. code-block:: bash

    php vendor/bin/jane-openapi generate

This command will try to read a config file named ``.jane-openapi`` located on the current working directory. However,
you can name it as you like and use the ``--config-file`` option to specify its location and name:

.. code-block:: bash

    php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php

.. note::
    If you are using Symfony recipe, this command is embbeded in the ``bin/open-api-generate`` binary file, you only
    have to run it to make it work 🎉

.. note::
    No others options can be passed to the command. Having a config file ensure that a team working on the project
    always use the same set of parameters and, when it changes, give vision of the new option(s) used to generate the
    code.

.. hint::
    If you have a really big specification and want to optimize your generation time, you can disable garbage collector
    during generation, you can read more about it on `Scrutinizer blog post`_ . To do that, use Jane as following:
    ``php -d zend.enable_gc=0 vendor/bin/jane-openapi generate``.

.. _`Scrutinizer blog post`: https://scrutinizer-ci.com/blog/composer-gc-performance-who-is-affected-too

Configuration file
~~~~~~~~~~~~~~~~~~

The configuration file consists of a simple PHP script returning an array::

    <?php

    return [
        'openapi-file' => __DIR__ . '/open-api.json',
        'namespace' => 'Vendor\Library\Api',
        'directory' => __DIR__ . '/generated',
    ];

This example shows the minimum configuration required to generate a client:

 * ``openapi-file``: Specify the location of your OpenApi file, it can be a local file or a remote one
   ``https://my.domain.com/my-api.json``. It can also be a ``yaml`` file.
 * ``namespace``: Root namespace of all of your generated code
 * ``directory``: Directory where the code will be generated

Given this configuration, you will need to add the following configuration to composer, in order to load the generated files::

    "autoload": {
        "psr-4": {
            "Vendor\\Library\\Api\\": "generated/"
        }
    }

Options
~~~~~~~

Other options are available to customize the generated code:

 * ``reference``: A boolean which indicate to add the support for `JSON Reference`_ into the generated code.
 * ``date-format``: A date format to specify how the generated code should encode and decode ``\DateTime`` object to string
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
 * ``fixer-config-file``: A string to specify where to find the custom configuration for the cs-fixer after code generation, will remove all Jane default cs-fixer default configuration.
 * ``clean-generated``: A boolean which indicate if we clean generated output before generating new files, is enabled by default.
 * ``use-cacheable-supports-method``: A boolean which indicate if we use ``CacheableSupportsMethodInterface`` interface to improve caching performances when used with Symfony Serializer.
 * ``skip-null-values``: When having nullable properties, you can enforce normalization to skip theses
   properties even if they are nullable. This option allows you to not have theses properties when they're not set
   (``null``). By default it is enabled.

.. _`JSON Reference`: https://tools.ietf.org/id/draft-pbryan-zyp-json-ref-03.html
.. _`Carbon`: https://carbon.nesbot.com/

Using a generated client
------------------------

Generating a client will produce same classes as the :doc:`/components/JsonSchema` library:

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

.. note::

    If you are using Symfony recipe, the client will be autowired. So you can use it anywhere by using your Client class

.. note::

    Optionally, you can pass a custom ``HttpClient`` respecting the `PSR18`_ Client standard. If you which to use the
    constructor to reuse existing instances, sections below describe the 4 services used by it and how to create them.

Creating the Http Client
~~~~~~~~~~~~~~~~~~~~~~~~

The main dependency on the ``Client`` class is an HTTP client respecting the `PSR18`_ client standard. We highly
recommend you to read the `PSR18`_ specification. This HTTP client MAY redirect on a 3XX responses (depend on your API),
but it MUST not throw errors on 4XX and 5XX responses, as this can be handle by the generated code directly.

Recommended way of creating an HTTP Client is by using the `discovery`_ library to create the client::

    <?php

    $httpClient = Http\Discovery\Psr18ClientDiscovery::find();

This allows user of the API to use any client respecting the standard.

.. hint::

    You can use clients such as Symfony `HttpClient`_ as `PSR18`_ client.

Creating the Request Factory
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The generated endpoints will also need a factory to transform parameters and object of the endpoint to a `PSR7 Request`_.

Like the HTTP Client, it is recommended to use the `discovery`_ library to create it::

    <?php

    $requestFactory = Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();


Creating the Serializer
~~~~~~~~~~~~~~~~~~~~~~~

Like in :doc:`/components/JsonSchema`, creating a serializer is done by using the ``JaneObjectNormalizer`` class::

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

With Symfony ecosystem, you just have to use the recipe and all the configuration will be added automatically.
This serializer will be able to encode and decode every data respecting your OpenAPI specification thanks to autowiring
of the generated normalizers.

Creating the Stream Factory
~~~~~~~~~~~~~~~~~~~~~~~~~~~

The generated endpoints will also need a service to transform body parameters like ``resource`` or ``string`` into
`PSR7 Stream`_ when uploading file (multipart form).

Like the HTTP Client and Request Factory, it is recommended to use the `discovery`_ library to create it::

    <?php

    $streamFactory = Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();

Using the API Client
--------------------

Generated code has complete `PHPDoc`_ comment on each method, which should correctly describe the endpoint.
Method names for each endpoint depends on the ``operationId`` property of the OpenAPI specification. And if not present
it will be generated from the endpoint path::

    <?php

    $apiClient = Vendor\Library\Generated\Client::create();
    // Operation id being listFoo
    $foos = $apiClient->listFoo();

Also depending on the parameters of the endpoint, it may have 2 to more arguments.

Last parameter of each endpoint, allows to specify which type of data the method must return. By default, it will try to
return an object depending on the status code of your response. But you can force the method to return a `PSR7 Response`_
object::

    $apiClient = Vendor\Library\Generated\Client::create();
    // First argument is an empty list of parameters, second one being the return type
    $response = $apiClient->listFoo([], Vendor\Library\Generated\Client::FETCH_RESPONSE);

This allow to do custom work when the API does not return standard JSON body.

Host and basePath support
~~~~~~~~~~~~~~~~~~~~~~~~~

Jane OpenAPI will never generate the complete url with the host and the base path for an endpoint. Instead, it will only
do a request on the specified path.

If host and/or base path is present in the specification it is added, via the ``PluginClient``, ``AddHostPlugin`` and
``AddPathPlugin`` thanks to `php-http plugin system`_ when using the static ``create``.

This allow you to configure different host and base path given a specific environment / server, which may defer when in test,
preprod and production environment.

Jane OpenAPI will always try to use ``https`` if present in the scheme (or if there is no scheme). It will use the first scheme
present if ``https`` is not present.

.. _HttpClient: https://symfony.com/doc/current/components/http_client.html#psr-18
.. _discovery: http://docs.php-http.org/en/latest/discovery.html
.. _PSR7 Request: http://www.php-fig.org/psr/psr-7/#32-psrhttpmessagerequestinterface
.. _PSR7 Response: http://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface
.. _PSR7 Stream: https://www.php-fig.org/psr/psr-7/#34-psrhttpmessagestreaminterface
.. _PHPDoc: https://www.phpdoc.org/
.. _php-http plugin system: http://docs.php-http.org/en/latest/plugins/introduction.html

Having custom plugins
~~~~~~~~~~~~~~~~~~~~~

If you want to support more behavior such as authentication or other stuff that need a plugin, you can pass them
through the second argument of the static ``create`` method.

Authentication
~~~~~~~~~~~~~~

We do generate a plugin for authentication when needed, it does support:

- ``apiKey`` in header & query for both OpenAPI v2 & v3
- HTTP Basic & Bearer for OpenAPI v3

When your OpenAPI definition contains it, Jane will generate a Authentication namespace that contains all plugins you
need for your API. Then you can pass it to your Jane Client (only if you let Jane make a HTTP Client for you, otherwise
this second parameters is ignored).

Extending the Client
--------------------

Some endpoints need sometimes custom implementation that were not possible to generate through the OpenAPI
specification. Jane OpenAPI try to be nice with this and each specific behavior of an API call has been seprated into
different methods which are public or protected.

As an exemple you may want to encode in base64 a specific query parameter of an Endpoint. First step is to create your
own Endpoint extending the generated one::

    <?php

    namespace Vendor\Library\Api\Endpoint;

    use Vendor\Library\Api\Endpoint\FooEndpoint as BaseEndpoint;
    use Symfony\Component\OptionsResolver\Options;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class FooEndpoint extends BaseEndpoint
    {
        protected function getQueryOptionsResolver(): OptionsResolver
        {
            $optionsResolver = parent::getQueryOptionsResolver();
            $optionsResolver->setNormalizer('bar', function (Options $options, $value) {
                return base64_encode($value);
            });

            return $optionsResolver;
        }
    }

Once this endpoint is generated, you need to tell your Client to use yours endpoint instead of the Generated one. For
that you can extends the generated client and override the method that use this endpoint::

    <?php

    namespace Vendor\Library\Api;

    use Vendor\Library\Api\Client as BaseClient;
    use Vendor\Library\Api\Endpoint\FooEndpoint;

    class Client extends BaseClient
    {
        public function getFoo(array $queryParameters = [], $fetch = self::FETCH_OBJECT)
        {
            return $this->executePsr7Endpoint(new FooEndpoint($queryParameters), $fetch);
        }
    }

Then you will need to use your own client instead of the generated one. To extends other parts of the endpoint you can
look at the generated code.

Example
-------

In this section, we will see a working example of OpenApi v3 client onto a simple API that gives facts about cats and
comment it.

.. seealso::

    We suggest you to read both Generate and Usage chapters first to understand this chapter more easily.

You can find the fully working example on the following link: https://github.com/janephp/openapi3-example

OpenAPI schema
~~~~~~~~~~~~~~

First, we need a valid OpenAPI schema. You can use tool such as Stoplight_ or other OpenApi designer.

I choosed to represent `CatFacts API`_ within this example:

.. code-block:: yaml

    openapi: 3.0.0
    info:
        version: 1.0.0
        title: 'CatFacts API'
    servers:
        - url: https://cat-fact.herokuapp.com
    paths:
        /facts/random:
            get:
                operationId: randomFact
                responses:
                    200:
                        description: 'Get a random `Fact`'
                        content:
                            application/json:
                                schema:
                                    $ref: '#/components/schemas/Fact'
    components:
        schemas:
            Fact:
                type: object
                properties:
                    _id:
                        type: string
                        description: 'Unique ID for the `Fact`'
                    __v:
                        type: integer
                        description: 'Version number of the `Fact`'
                    user:
                        type: string
                        description: 'ID of the `User` who added the `Fact`'
                    text:
                        type: string
                        description: 'The `Fact` itself'
                    updatedAt:
                        type: string
                        format: date-time
                        description: 'Date in which `Fact` was last modified'
                    sendDate:
                        type: string
                        description: 'If the `Fact` is meant for one time use, this is the date that it is used'
                    deleted:
                        type: boolean
                        description: 'Weather or not the `Fact` has been deleted (Soft deletes are used)'
                    source:
                        type: string
                        description: 'Can be `user` or `api`, indicates who added the fact to the DB'
                    used:
                        type: boolean
                        description: 'Weather or not the `Fact` has been sent by the CatBot. This value is reset each time every `Fact` is used'
                    type:
                        type: string
                        description: 'Type of animal the `Fact` describes (e.g. ‘cat’, ‘dog’, ‘horse’)'

This schema describe the endpoint and the model of the CatFact API.

.. _Stoplight: https://stoplight.io/studio/
.. _CatFacts API: https://alexwohlbruck.github.io/cat-facts/

Jane configuration
~~~~~~~~~~~~~~~~~~

We need to configure Jane before generation. So we create a ``.jane-openapi`` file::

    <?php

    return [
        'openapi-file' => __DIR__ . '/schema.yaml',
        'namespace' => 'CatFacts\Api',
        'directory' => __DIR__ . '/generated/',
        'date-format' => \DateTimeInterface::RFC3339_EXTENDED, // date-time format use by CatFact API
    ];

It will contains a reference to your main schema file (that file can be linked to other files if you want), the PHP
namespace you want for generated classes and the directory you want to use.

Jane generation
~~~~~~~~~~~~~~~

Now we can run generation, basically just require jane with composer (see :doc:`/components/OpenAPI` for more details
about installation) and run the following command:

.. code-block:: bash

    vendor/bin/jane-openapi generate

It will find any ``.jane-openapi`` file and use it as configuration. If your file has a different name, just add
``-c path/to/my/file`` after the command.

Creating a client
~~~~~~~~~~~~~~~~~

Then you need a Client to bridge between Jane and your application. Jane use PSR18_ to make this bridge easier
which allow us to have any middleware we need. If you provide server URL in your schema and you have no authentification
needed for your API, then everything will be automated by Jane, you just have to do::

    use CatFacts\Api\Client;

    $client = Client::create();

And that's all you need. If you need authentification, please read :doc:`/components/OpenAPI`.

.. _PSR18: https://www.php-fig.org/psr/psr-18/

Using your client
~~~~~~~~~~~~~~~~~

Finally we can use our Client and try to get some cool cat fact::

    <?php

    require_once __DIR__.'/vendor/autoload.php';

    $client = \CatFacts\ClientFactory::create();
    $fact = $client->randomFact();


And this will give us a ``Fact`` object as following:

.. code-block:: none

    object(CatFacts\Api\Model\Fact)#29 (10) {
      ["id":protected]=>
      string(24) "591f98108dec2e14e3c20b0f"
      ["v":protected]=>
      int(0)
      ["user":protected]=>
      NULL
      ["text":protected]=>
      string(63) "Cats have been domesticated for half as long as dogs have been."
      ["updatedAt":protected]=>
      object(DateTime)#28 (3) {
        ["date"]=>
        string(26) "2019-08-24 20:20:02.145000"
        ["timezone_type"]=>
        int(2)
        ["timezone"]=>
        string(1) "Z"
      }
      ["sendDate":protected]=>
      NULL
      ["deleted":protected]=>
      bool(false)
      ["source":protected]=>
      string(3) "api"
      ["used":protected]=>
      bool(false)
      ["type":protected]=>
      string(3) "cat"
    }
