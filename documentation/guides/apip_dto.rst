API Platform DTO
================

Here is a demo Symfony application of Jane with API Platform integration.

You can find the fully working example on this repository: `janephp/demo-with-apiplatform`_.

*Disclaimer: This documentation is not a guide for API Platform, if you want more details about it,
please consult their documentation*

.. _`janephp/demo-with-apiplatform`: https://github.com/janephp/demo-with-apiplatform/

Resource
--------

API Platform does support a way to have custom representation for our input or output.
In this demo application, we focus on using a Jane model as our output model.

First, you will need to specify this model in your resource configuration:

.. code-block:: yaml

    resources:
      App\Entity\Beer:
        attributes:
          output: Generated\Model\BeerOutput

In this configuration we specify the class used for our resource output. You can do more with this feature such as
custom input class, read more on `related documentation`_.

.. _`related documentation`: https://api-platform.com/docs/core/dto/

DataTransformer
---------------

Then, we need a DataTransformer to transform from the ``App\Entity\Beer`` entity to a ``Generated\Model\BeerOutput``
model. Here is this transformer, called ``BeerOutputDataTransformer``, but decomposed to explain each steps::

    namespace App\DataTransformer;

    use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
    use App\Entity\Beer;
    use Generated\Model\BeerOutput;
    use Jane\AutoMapper\AutoMapperInterface;

    class BeerOutputDataTransformer implements DataTransformerInterface
    {
        private AutoMapperInterface $autoMapper;

        // Here we inject Jane AutoMapper, it's used to make the entity to model transformation
        public function __construct(AutoMapperInterface $autoMapper)
        {
            $this->autoMapper = $autoMapper;
        }

        /**
         * @param Beer $data
         *
         * @return BeerOutput
         */
        public function transform($data, string $to, array $context = [])
        {
            // Will transformer our `App\Entity\Beer` entity to a `Generated\Model\BeerOutput` model
            // thanks to the AutoMapper
            return $this->autoMapper->map($data, BeerOutput::class, $context);
        }

        /**
         * {@inheritdoc}
         */
        public function supportsTransformation($data, string $to, array $context = []): bool
        {
            // Tells to use the `transform` method only if our data is a `App\Entity\Beer` entity and if target model class
            // is `Generated\Model\BeerOutput`.
            return BeerOutput::class === $to && $data instanceof Beer;
        }
    }

With only both of theses, you will have clean custom model output with API Platform !

