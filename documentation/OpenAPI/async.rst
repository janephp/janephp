Asynchronous Client
===================

When setting the ``async`` option to true in the configuration, Jane OpenAPI will generate a full asynchronous API client.
Using the `Amp`_ project with the `Artax`_ library.

A different client is necessary as it doesn't use the `PSR7 standard`_ which is not compatible when doing asynchronous
execution in PHP.

.. note::
    Long story short, this is mainly due to the ``StreamInterface`` of `PSR7 standard`_ not providing read and write methods
    compatible API, as they are blocking (the read method needs to return actual data, and cannot provide some sorts of
    callback / Promise / Coroutine data necessary when doing asynchronous operations)

Creating the Api Client
-----------------------

Like the ``Client`` class, the ``ClientAsync`` class have a static method ``create`` acting like a factory::

    <?php

    $apiClientAsync = Vendor\Library\Generated\ClientAsync::create();

A custom ``Amp\Artax\Client`` can be passed to this method, also you can customize the ``Serializer`` by using the constructor::

    <?php

    $normalizers = Vendor\Library\Generated\Normalizer\NormalizerFactory::create();
    $encoders = [new Symfony\Component\Serializer\Encoder\JsonEncoder(
        new Symfony\Component\Serializer\Encoder\JsonEncode(JSON_UNESCAPED_SLASHES),
        new Symfony\Component\Serializer\Encoder\JsonDecode(false))
    ];

    $serializer = new Symfony\Component\Serializer\Serializer($normalizers, $encoders);
    $httpClient = new Amp\Artax\DefaultClient();

    $apiClientAsync = new Vendor\Library\Generated\ClientAsync($httpClient, $serializer);

Usage
-----

If it's the first time using `Amp`_, it is highly recommended to read the documentation about it. Using endpoints of your
Api is exactly the same as the ``Client`` at the exception of returning an ``Amp\Promise``::

    <?php

    Amp\Loop::run(function () {
        $apiClientAsync = Vendor\Library\Generated\ClientAsync::create();
        // Await the promise to get the final object
        $object = yield $apiClientAsync->getFoo(1);

        // Parallel api calls
        $objects = yield [
            $apiClientAsync->getFoo(1),
            $apiClientAsync->getFoo(2),
        ];
    });

.. _Amp: https://amphp.org/
.. _Artax: https://amphp.org/artax/
.. _PSR7 standard: http://www.php-fig.org/psr/psr-7/
