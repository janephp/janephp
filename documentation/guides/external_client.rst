External API Client
===================

Here is a demo Symfony application of Jane with an external API integration.
We will see a working example of OpenApi v3 client onto a simple API that gives facts about cats and
comment it. You can find this API documentation on following url:
`https://alexwohlbruck.github.io/cat-facts/`_.

.. _`https://alexwohlbruck.github.io/cat-facts/`: https://alexwohlbruck.github.io/cat-facts/

You can find the fully working example on this repository: `janephp/demo-external-api`_.

.. _`janephp/demo-external-api`: https://github.com/janephp/demo-external-api/

OpenAPI schema
--------------

First, we need a valid OpenAPI schema. Since this API doesn't have one I made my own, for some big API, there is
existing OpenAPI schema, but be carefull with theses, they're often really big and you won't use all endpoints and
models. A solution to this is to use the ``whitelisted-paths`` option in Jane configuration, or you can write your own
schema to have only endpoints and models you need.

Here is the schema I made:

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

Declaring services
------------------

Here we will create services for Symfony. When requiring package ``jane-php/open-api-3``, a recipe will be installed, it
contains a ``config/packages/jane.yaml`` file, this file will contains wiring for the Normalizer, I added service for the
API client here:

.. code-block:: yaml

    services:
        _defaults:
            autowire: true
            autoconfigure: true

        CatFacts\Api\Normalizer\JaneObjectNormalizer: ~

        CatFacts\Api\Client:
            factory: ['CatFacts\Api\Client', 'create']
            lazy: true

Using your client
-----------------

Finally, we create a controller that will fetch the data from the API and show a twig template to show the fact on
``/fact`` url.

.. code-block:: php

    use CatFacts\Api\Client;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class FactController extends AbstractController
    {
        // Here we will inject the Jane Client, this will allow us to recover the cat fact from the API!
        public function index(Client $client)
        {
            // We will render our home template with the cat fact from the API
            // Thanks to the OpenAPI scheme, Jane knows where is the server `https://cat-fact.herokuapp.com` and the path
            // to use, so we only have to call related operation (defined by `operationId` in OpenAPI)
            // Jane will call the endpoint and return a list of `CatFacts\Api\Model\Fact` models
            return $this->render('fact.html.twig', [
                'fact' => $client->randomFact(),
            ]);
        }
    }
