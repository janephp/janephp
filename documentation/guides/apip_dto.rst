API Platform DTO
================

Introduction
------------

In this guide, we will work with an API Platform-based API and use Input and Output DTO. Since v2.1, API Platform
`allows us to use custom representation of a model`_ through DTOs, since Jane JSON Schema library does generate DTO and
their normalizers, we will use theses to improve the DTO experience with API Platform.

For all installation and setup steps, you can read ":doc:`/documentation/JsonSchema`" page.

Output
------

Schema
~~~~~~

First, we will need a JSON Schema representation of the ouput you need. For our example we will take the `Book` entity
from API Platform documentation and output a simple BookOutput object with the following schema:

.. code-block:: javascript

    {
      "description": "Book description",
      "type": "object",
      "properties": {
        "title": {
          "type": "string"
        },
        "author": {
          "type": "string"
        }
      }
    }

With following JSON Schema configuration::

    <?php

    return [
        'json-schema-file' => __DIR__ . '/json-schema.json',
        'root-class' => 'BookOutput',
        'namespace' => 'App\Generated',
        'directory' => __DIR__ . '/../../generated',
    ];

With this schema, we will have a ``BookOutput`` model and his normalizer.

Entity
~~~~~~

Now on the entity we have to specify that we have an output class, for this we gonna use annotations::

    use Doctrine\ORM\Mapping as ORM;
    use ApiPlatform\Core\Annotation\ApiResource;
    use App\Generated\Model\BookOutput;

    /**
     * A book.
     *
     * @ORM\Entity
     * @ApiResource(
     *     output=BookOutput::class
     * )
     */
    class Book
    {

    // ...

Here we have the classic ``@ApiResource`` annotation to declare this entity as an API Platform resource, then we added
an ``output`` parameter that is used to define which DTO we are using as a resource output.

Transformer
~~~~~~~~~~~

Then API Platform needs a Transformer to go from an Entity to your DTO, the trick is that with the Jane normalizer, you
have almost everything already done, you will need a class that implements
``ApiPlatform\Core\DataTransformer\DataTransformerInterface``::

    <?php

    namespace App\Transformer;

    use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
    use App\Entity\Book;
    use App\Generated\Model\BookOutput;
    use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

    class BookOutputTransformer implements DataTransformerInterface
    {
        private $denormalizer;

        public function __construct(DenormalizerInterface $janeSerializer)
        {
            $this->denormalizer = $janeSerializer;
        }

        /**
         * {@inheritdoc}
         */
        public function transform($data, string $to, array $context = [])
        {
            return $this->denormalizer->denormalize($data, $to, null, $context);
        }

        /**
         * {@inheritdoc}
         */
        public function supportsTransformation($data, string $to, array $context = []): bool
        {
            return BookOutput::class === $to && $data instanceof Book;
        }
    }

This class will handle transformation from entity to

Model
~~~~~

todo

.. _`allows us to use custom representation of a model`: https://api-platform.com/docs/core/dto/

