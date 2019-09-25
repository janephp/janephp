Example
=======

In this section, we will see a working example of OpenApi v3 client onto a simple API that gives facts about cats and comment it.

.. warning::
    We suggest you to read :doc:`/OpenAPI/generate` and :doc:`/OpenAPI/usage` first to understand this page more easily.

You can find the fully working example on the following link: https://github.com/janephp/openapi3-example

OpenAPI schema
--------------

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
------------------

We need to configure Jane before generation. So we create a ``.jane-openapi`` file::

    <?php

    return [
        'openapi-file' => __DIR__ . '/schema.yaml',
        'namespace' => 'CatFacts\Api',
        'directory' => __DIR__ . '/generated/',
        'date-format' => \DateTimeInterface::RFC3339_EXTENDED, // date-time format use by CatFact API
        'client' => 'psr18',
    ];

It will contains a reference to your main schema file (that file can be linked to other files if you want), the PHP
namespace you want for generated classes and the directory you want to use.

.. warning::

    Client argument is recommended, if you don't fill it, it will generated a HTTPlug Client which is not what we are
    showing here and deprecated since Jane v5.1.0

Jane generation
---------------

Now we can run generation, basically just require jane with composer (see :doc:`/OpenAPI/introduction` for more details
about installation) and run the following command:

.. code-block:: bash

    vendor/bin/jane-openapi generate

It will find any ``.jane-openapi`` file and use it as configuration. If your file has a different name, just add
``-c path/to/my/file`` after the command.

Creating a client
-----------------

Then you need a Client to bridge between Jane and your application. Jane use PSR18_ to make this bridge easier
which allow us to have any middleware we need. If you provide server URL in your schema and you have no authentification
needed for your API, then everything will be automated by Jane, you just have to do::

    use CatFacts\Api\Client;

    $client = Client::create();

And that's all you need. If you need authentification, please read :doc:`usage`.

.. _PSR18: https://www.php-fig.org/psr/psr-18/

Using your client
-----------------

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
