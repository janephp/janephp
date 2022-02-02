Component: OpenAPI
==================

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
    composer require --dev jane-php/open-api-2
    composer require jane-php/open-api-runtime

    # OpenAPI 3
    composer require --dev jane-php/open-api-3
    composer require jane-php/open-api-runtime

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
        'namespace' => 'Vendor\Library\Generated',
        'directory' => __DIR__ . '/generated',
    ];

This example shows the minimum configuration required to generate a client:

 * ``openapi-file``: Specify the location of your OpenApi file, it can be a local file or a remote one
   ``https://my.domain.com/my-api.json``. It can also be a ``yaml`` file.
 * ``namespace``: Root namespace of all of your generated code
 * ``directory``: Directory where the code will be generated

Given this configuration, you will need to add the following configuration to composer, in order to load the generated
files::

    "autoload": {
        "psr-4": {
            "Vendor\\Library\\Generated\\": "generated/"
        }
    }

Options
~~~~~~~

Other options are available to customize the generated code:

 * ``reference``: A boolean which indicate to add the support for `JSON Reference`_ into the generated code.
 * ``date-format``: A date format to specify how the generated code should encode and decode ``\DateTime`` object to
   string
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
 * ``skip-required-fields``: If your model has required fields, this option allows you to skip the required behavior
   that forces them to be present during denormalization. By default it is disabled
 * ``whitelisted-paths``: This option allows you to generate only needed endpoints and related models. Be carefull,
   that option will filter models used by whitelisted endpoints and generate model & normalizer only for them. Here is
   some examples about how to use it::

    <?php

    return [
        // your usual configuration ...
        'whitelisted-paths' => [
            '\/foo$',
            ['\/foo\/(bar|baz)'],
            ['\/foo$', 'GET'],
            ['\/foo$', ['POST']],
            ['\/foo$', ['POST', 'PUT']]
        ],
    ];

   There is many ways to use it, first you atleast need a regex defining which endpoint is whitelisted. This endpoint
   can be either a string or in an array. If you don't provide any HTTP method, we will just accept any methods, but
   you can provide either a string or array as second argument to specify which method you accept.

 * ``endpoint-generator``: Generator Class which can specify custom endpoint interface & corresponding trait (this class
   should extends ``\Jane\Component\OpenApi3\Generator\EndpointGenerator``)
 * ``custom-query-resolver``: This option allows you to customize the query parameter normalizer for each of the API
   endpoint with a userland callback. Here is all possible combinations::

    <?php

    use App\BoolCustomQueryResolver;
    use App\IntCustomQueryResolver;
    use App\BarCustomQueryResolver;
    use App\BazCustomQueryResolver;

    return [
        // your usual configuration ...
        'custom-query-resolver' => [
            '__type' => [
                'bool' => BoolCustomQueryResolver::class,
                'int' => IntCustomQueryResolver::class,
            ],
            '/foo' => [
                'get' => [
                    'bar' => BarCustomQueryResolver::class,
                    'baz' => BazCustomQueryResolver::class,
                ],
                'post' => [
                    'bar' => BarCustomQueryResolver::class,
                ],
            ],
        ],
    ];

   There are many ways to use it. You can either use the ``__type`` key to specify a custom query normalizer for a
   given type (``bool``, ``int``, ``string``, ...) and give it your class that contains the custom normalizer by
   extending the generated runtime ``CustomQueryResolver`` class. You can also filter the usage of your custom
   normalizer by giving the exact path, method and parameter name where you want to apply it.
 * ``throw-unexpected-status-code``: Will return a ``UnexpectedStatusCodeException`` if nothing has been matched during
   the transformation of the Endpoint body (including described exceptions). By default, it's disabled.
 * ``custom-string-format-mapping``: This option allows you to specify in which class a string property will be
   deserialized according to it's format option.
   It can be used to customize a date-time field, or to add non supported formats.
   More details in the dedicated section.

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

    $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder()]);
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

We do generate a plugin for each authentication method declared in your scheme. It does support:

- ``apiKey`` in header & query for both OpenAPI v2 & v3
- HTTP Basic & Bearer for OpenAPI v3

Quick example of how your authentication definition could look (OpenAPI v3):

.. code-block:: yaml

    components:
      securitySchemes:
        BasicAuth:
          type: http
          scheme: basic
        BearerAuth:
          type: http
          scheme: bearer
        ApiKeyAuth:
          type: apiKey
          in: header
          name: X-API-Key

When your OpenAPI definition contains it, Jane will generate a Authentication namespace that contains all plugins you
need for your API.
Then you give all your authentication plugins to ``Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry``.
And finally you can pass it to your Jane Client (only if you let Jane make a HTTP Client for you, otherwise this second
parameters is ignored).

An example Authentification directory:

.. image:: ../_static/images/authentication.png

This ``AuthenticationRegistry`` class is used to match security scopes in your API, if an Endpoint require a certain
authentication method, then it will use it. You need to have ``security`` fields correctly made in your scheme in order
to use this class. If they're not set, you can simply pass the authentication plugin to your Jane Client.

Here is how you can use it::

    $authenticationRegistry = new AuthenticationRegistry([new ApiKeyAuthentication($this->apiKey)]);
    $client = Client::create(null, [$authenticationRegistry]);
    $foo = $client->foo();

You can replace ``Client::create`` first argument with your custom HttpClient if needed as usual.

Extending the Client
--------------------

Some endpoints need sometimes custom implementation that were not possible to generate through the OpenAPI
specification. Jane OpenAPI try to be nice with this and each specific behavior of an API call has been seprated into
different methods which are public or protected.

As an exemple you may want to encode in base64 a specific query parameter of an Endpoint. First step is to create your
own Endpoint extending the generated one::

    <?php

    namespace Vendor\Library\Generated\Endpoint;

    use Vendor\Library\Generated\Endpoint\FooEndpoint as BaseEndpoint;
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

    namespace Vendor\Library\Generated;

    use Vendor\Library\Generated\Client as BaseClient;
    use Vendor\Library\Generated\Endpoint\FooEndpoint;

    class Client extends BaseClient
    {
        public function getFoo(array $queryParameters = [], $fetch = self::FETCH_OBJECT)
        {
            return $this->executePsr7Endpoint(new FooEndpoint($queryParameters), $fetch);
        }
    }

Then you will need to use your own client instead of the generated one. To extends other parts of the endpoint you can
look at the generated code.

.. _PSR18: https://www.php-fig.org/psr/psr-18/


Custom string formats
---------------------

Jane support some strings format, but it can't support all of them because it's an open keyword.
You may want to serialize a property to an UUID, or have a specific datetime format for a field (a datetime format that
is not the same as the one configured with ``date-format`` or ``full-date-format``.

To do so, you need to provide:

 * while generating the client: an associative array for the key ``custom-string-format-mapping``
 * at runtime: one or more Normalizer (which implement ``Symfony\Component\Serializer\Normalizer\NormalizerInterface``)


Example
~~~~~~~

Configuration file:

.. code-block:: php

    <?php

    return [
        'json-schema-file' => __DIR__ . '/json-schema.json',
        'root-class' => 'MyModel',
        'namespace' => 'Vendor\Library\Generated',
        'directory' => __DIR__ . '/generated',
        'custom-string-format-mapping' => [
            'uuid' => \Symfony\Component\Uid\UuidV4::class
        ]
    ];


Your OpenAPI schema:

.. code-block:: yaml

    openapi: "3.0.0"
    info:
      version: 1.0.0
      title: Example
    paths:
      /some-path:
        get:
          summary: Get something
          operationId: getSomething
          responses:
            '200':
              description: Expected response to a valid request
              content:
                application/json:
                  schema:
                    $ref: "#/components/schemas/Something"
    components:
      schemas:
        Something:
          type: object
          required:
            - id
            - uuid
          properties:
            id:
              type: 'integer'
            uuid:
              type: 'string'
              # the following keyword is important
              format: 'uuid'


Usage of the generated client:

.. code-block:: php

    <?php

    $client = \Vendor\Library\Generated\Client::create(
        $httpClient,
        [], // additional http client plugins
        // additional normalizers
        [
            new \Symfony\Component\Serializer\Normalizer\UidNormalizer()
        ]
    );
