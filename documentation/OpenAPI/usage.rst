Using a generated client
========================

Generating a client will produce same classes as the :doc:`/JsonSchema/introduction` library:

 * Model files in the ``Model`` namespace
 * Normalizer files in the ``Normalizer`` namesapce
 * A ``NormalizerFactory`` class in the ``Normalizer`` namespace

Futhermore it generates:

 * Resources files in the ``Resource`` namespace which are a subset of the API endpoints (depends on the tags of the endpoint)
 * Client file in the root namespace containing all API endpoints
 * ClientAsync file in the root namespace containing all API endpoints with an Async API. (only present if using the ``'async' => true`` option)

Creating the API Client
-----------------------

Generated ``Client`` class, have a static method ``create`` which act like a factory to create your Client::

    <?php

    $apiClient = Vendor\Library\Generated\Client::create();

Optionally you can pass a custom ``HttpClient`` respecting the `HTTPlug`_ standard. If you which to use the constructor
to reuse existing instances, sections below describe the 3 services used by it and how to create them.

Creating the Http Client
------------------------

The main dependency on the ``Client`` class is an Http Client respecting the `HTTPlug`_ standard. We highly recommend
you to read the docs on `HTTPlug`_. This HTTP Client MAY redirect on a 3XX responses (depend on your API), but it MUST
not throw errors on 4XX and 5XX responses, as this can be handle by the generated code directly.

Recommended way of creating an HTTP Client is by using the `discovery`_ library of HTTPlug to create the client::

    <?php

    $httpClient = Http\Discovery\HttpClientDiscovery::find();

This allow, user of the API to use any client respecting the standard.

Creating the Serializer
-----------------------

Like in :doc:`/JsonSchema/usage`, creating a serializer is done by using the ``NormalizerFactory`` class::

    <?php

    $normalizers = Vendor\Library\Generated\Normalizer\NormalizerFactory::create();
    $encoders = [new Symfony\Component\Serializer\Encoder\JsonEncoder(
        new Symfony\Component\Serializer\Encoder\JsonEncode(JSON_UNESCAPED_SLASHES),
        new Symfony\Component\Serializer\Encoder\JsonDecode(false))
    ];

    $serializer = new Symfony\Component\Serializer\Serializer($normalizers, $encoders);


Creating the Message Factory
----------------------------

The generated endpoints will also need a service to transform parameters and object of the endpoint to a `PSR7 Request`_
This is done by using the `Message Factory Interface`_ from `HTTPlug`_.

Like the HTTP Client, it is recommended to use the `discovery`_ library of HTTPlug to create it::

    <?php

    $messageFactory = Http\Discovery\MessageFactoryDiscovery::find();

Using the API Client
--------------------

Generated code also generate a complete `PHPDoc`_ comment on each method, which should correctly describe the endpoint.
Method names for each endpoint depends on the ``operationId`` property of the OpenAPI specification. And if not present
it will be generated from the endpoint path::

    <?php

    $apiClient = Vendor\Library\Generated\Client::create();
    // Operation id being listFoo
    $foos = $apiClient->listFoo();

Also depending on the parameters of the endpoint it may have 2 to more arguments.

Last parameter of each endpoint, allows to specify which type of data the method must return. By default it will try to
return an object depending on the status code of your response. But you can force the method to return a `PSR7 Response`_
object::

    $apiClient = Vendor\Library\Generated\Client::create();
    // First argument is an empty list of parameters, second one being the return type
    $response = $apiClient->listFoo([], Vendor\Library\Generated\Client::FETCH_RESPONSE);

This allow to do custom work when the API does not return standard JSON body.

Using Resource instead of Client
--------------------------------

Jane OpenAPI also generated ``Resource`` class, which are exactly the same as the ``Client`` but it may contain less
endpoint. Separation of a method into a specific endpoint depends on the ``tags`` value in the OpenAPI specification.

As an example when using the following specification::

    {
        "swagger": "2.0",
        "paths": {
            "/test-simple": {
                "post": {
                    "operationId": "testSimple",
                    "tags": [
                        "Foo"
                    ]
                }
            },
            "/test-object": {
                "get": {
                    "operationId": "testObject",
                    "tags": [
                        "Bar"
                    ]
                }
            }
        }
    }

It will create 2 resources, one being ``FooResource`` and having the ``testSimple`` method, the other one
being the ``BarResource`` containing the ``testObject`` method.

This may be useful when you have large API and don't want to disclose every methods into the same service. However it is highly
recommended to always use the ``Client`` class containing all methods.

.. _HTTPlug: http://docs.php-http.org/en/latest/index.html
.. _discovery: http://docs.php-http.org/en/latest/discovery.html
.. _PSR7 Request: http://www.php-fig.org/psr/psr-7/#32-psrhttpmessagerequestinterface
.. _PSR7 Response: http://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface
.. _Message Factory Interface: http://docs.php-http.org/en/latest/message/message-factory.html
.. _PHPDoc: https://www.phpdoc.org/
