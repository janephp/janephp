Between two Symfony apps
========================

Here is a demo of Jane interacting with two Symfony apps. A frontend and an API apps.

You can find the fully working example on this repository: `janephp/demo-between-two-apps`_.

.. _`janephp/demo-between-two-apps`: https://github.com/janephp/demo-between-two-apps/

A common contract
-----------------

To make this all work we need a common contract, something that will declare our common model and how our API works.
For this we will use OpenAPI 3, here is how this file will looks like:

.. code-block:: yaml

    openapi: '3.0.2'
    info:
      title: Between two apps
      description: Simple OpenAPI
      version: 1.0.0
    servers:
      - url: 'http://api/'
    paths:
      /beers:
        get:
          summary: Get beers
          operationId: getBeers
          responses:
            '200':
              description: Successful operation
              content:
                application/json:
                  schema:
                    type: array
                    items:
                      $ref: '#/components/schemas/Beer'
    components:
      schemas:
        Beer:
          type: object
          properties:
            name:
              type: string
            brewer:
              type: string
            style:
              type: string
            color:
              type: string
            alcohol:
              type: integer

Thanks to this schema, we know which endpoint will contains our data, where our server is (I'm using ``http://api/``
here because we are in docker environment and this is the service name) and how our data is structured.

API
---

First, in the API, we need an endpoint with a list of Beer models (like we described in our OpenAPI file). We will add
a ``BeerController`` and make routing point path ``/beers`` to it. In this controller, we will list all beers and
send them as JSON. Here is the controller code, decomposed to explain each steps::

    namespace App\Controller;

    use App\Entity\Beer as BeerEntity;
    use App\Repository\BeerRepository;
    use Jane\Component\AutoMapper\AutoMapperInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Generated\Model\Beer as BeerModel;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

    class BeerController extends AbstractController
    {
        public function list(BeerRepository $beerRepository, AutoMapperInterface $autoMapper, NormalizerInterface $normalizer)
        {
            // Fetch all beers from database
            $beers = $beerRepository->findAll();

            // Will map all our beers from the entity `App\Entity\Beer` to the model `Generated\Model\Beer`
            // For each entity, we use the AutoMapper to make this conversion
            $beerModels = \array_map(function (BeerEntity $beer) use ($autoMapper) {
                return $autoMapper->map($beer, BeerModel::class);
            }, $beers);

            // Return a response with `application/json` content-type from a list of `Generated\Model\Beer` models
            // We use the normalizer to transform this list to an array of data
            return new JsonResponse($normalizer->normalize($beerModels));
        }
    }

This is only our endpoint, we also have some configuration to generate Jane models (see ``project/api/config/jane/``),
entity, repository ... You can see everything in ``project/api/``.

Frontend
--------

Then in our frontend part, we will recover data from the API and show them thanks a quick twig template.
Here is the home controller code, even if he's really small, I would like to describe some stuff::

    namespace App\Controller;

    use Generated\Client;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class HomeController extends AbstractController
    {
        // Here we will inject the Jane Client, this will allow us to recover beers from the API!
        public function index(Client $client)
        {
            // We will render our home template with the beers from the API
            // Thanks to the OpenAPI scheme, Jane knows where is the server `http://api/` and the path to use, so we only
            // have to call related operation (defined by `operationId` in OpenAPI)
            // Jane will call the endpoint and return a list of `Generated\Model\Beer` models
            return $this->render('home.html.twig', [
                'beers' => $client->getBeers()
            ]);
        }
    }

This will gives us all our data and render them, but we miss a thing! How this client was injected there?
So here is the ``project/front/config/packages/jane.yaml`` file, that contains all Jane related configuration:

.. code-block:: yaml

    services:
      _defaults:
        autowire: true
        autoconfigure: true
        public: false

      # This is the usual Normalizer service, it's used to get all Jane generated normalizers
      Generated\Normalizer\JaneObjectNormalizer: ~

      # And here we create a service for the Jane Client based on Client factory
      Generated\Client:
        factory: ['Generated\Client', 'create']
        lazy: true

I only described you our home controller and specific Jane configuration, we also have all usual Symfony configuration
and code that you can see in ``project/front/``.
