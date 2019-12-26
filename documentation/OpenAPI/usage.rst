Using a generated client
========================

Generating a client will produce same classes as the :doc:`/JsonSchema/introduction` library:

 * Model files in the ``Model`` namespace
 * Normalizer files in the ``Normalizer`` namespace
 * A ``JaneObjectNormalizer`` class in the ``Normalizer`` namespace

Furthermore, it generates:

 * Endpoints files in the ``Endpoint`` namespace, each API Endpoint will generate a class containing all the logic to go from Object to Request, and from Response to Object
 * Client file in the root namespace containing all API endpoints

Creating the API Client
-----------------------

Generated ``Client`` class have a static method ``create`` which act like a factory to create your Client::

    <?php

    $apiClient = Vendor\Library\Generated\Client::create();

Optionally, you can pass a custom ``HttpClient`` respecting the `PSR18`_ Client standard. If you which to use the constructor
to reuse existing instances, sections below describe the 4 services used by it and how to create them.

Creating the Http Client
------------------------

The main dependency on the ``Client`` class is an Http Client respecting the `PSR18`_ Client standard. We highly recommend
you to read the `PSR18`_ specification. This HTTP Client MAY redirect on a 3XX responses (depend on your API), but it MUST
not throw errors on 4XX and 5XX responses, as this can be handle by the generated code directly.

Recommended way of creating an HTTP Client is by using the `discovery`_ library to create the client::

    <?php

    $httpClient = Http\Discovery\Psr18ClientDiscovery::find();

This allows user of the API to use any client respecting the standard.

.. hint::

    You can use clients such as Symfony `HttpClient`_ as `PSR18`_ client.

Creating the Serializer
-----------------------

Like in :doc:`/JsonSchema/usage`, creating a serializer is done by using the ``JaneObjectNormalizer`` class::

    <?php

    $normalizers = [
        new Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
        new Vendor\Library\Generated\Normalizer\JaneObjectNormalizer(),
    ];
    $encoders = [new Symfony\Component\Serializer\Encoder\JsonEncoder(
        new Symfony\Component\Serializer\Encoder\JsonEncode(JSON_UNESCAPED_SLASHES),
        new Symfony\Component\Serializer\Encoder\JsonDecode(false))
    ];

    $serializer = new Symfony\Component\Serializer\Serializer($normalizers, $encoders);

Creating the Request Factory
----------------------------

The generated endpoints will also need a factory to transform parameters and object of the endpoint to a `PSR7 Request`_.

Like the HTTP Client, it is recommended to use the `discovery`_ library to create it::

    <?php

    $requestFactory = Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();


Creating the Stream Factory
---------------------------

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
-------------------------

Jane OpenAPI will never generate the complete url with the host and the base path for an endpoint. Instead, it will only
do a request on the specified path.

If host and/or base path is present in the specification it is added, via the ``PluginClient``, ``AddHostPlugin`` and
``AddPathPlugin`` thanks to `php-http plugin system`_ when using the static ``create``.

This allow you to configure different host and base path given a specific environment / server, which may defer when in test,
preprod and production environment.

Jane OpenAPI will always try to use ``https`` if present in the scheme (or if there is no scheme). It will use the first scheme
present if ``https`` is not present.


.. _PSR18: https://www.php-fig.org/psr/psr-18/
.. _HttpClient: https://symfony.com/doc/current/components/http_client.html#psr-18
.. _discovery: http://docs.php-http.org/en/latest/discovery.html
.. _PSR7 Request: http://www.php-fig.org/psr/psr-7/#32-psrhttpmessagerequestinterface
.. _PSR7 Response: http://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface
.. _PSR7 Stream: https://www.php-fig.org/psr/psr-7/#34-psrhttpmessagestreaminterface
.. _PHPDoc: https://www.phpdoc.org/
.. _php-http plugin system: http://docs.php-http.org/en/latest/plugins/introduction.html
