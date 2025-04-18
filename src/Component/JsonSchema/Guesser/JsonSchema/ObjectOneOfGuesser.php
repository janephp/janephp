<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Tools\JsonSchemaMerger;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ObjectOneOfGuesser implements GuesserInterface, TypeGuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    public function __construct(
        DenormalizerInterface $denormalizer,
        private JsonSchemaMerger $jsonSchemaMerger,
    ) {
        $this->denormalizer = $denormalizer;
    }

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        foreach ($object->getOneOf() as $key => $oneOf) {
            $oneOfName = $name . 'Sub';
            $oneOfResolved = $oneOf;

            if ($oneOf instanceof Reference) {
                $fragmentParts = explode('/', $oneOf->getMergedUri()->getFragment());
                $oneOfName = array_pop($fragmentParts);
                $oneOfResolved = $this->resolve($oneOf, JsonSchema::class);
            }

            $merged = $this->jsonSchemaMerger->merge($object, $oneOfResolved);
            $this->chainGuesser->guessClass($merged, $oneOfName, $reference . '/oneOf/' . $key, $registry);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);

        foreach ($object->getOneOf() as $key => $oneOf) {
            $oneOfName = $name . 'Sub';
            $oneOfResolved = $oneOf;

            if ($oneOf instanceof Reference) {
                $fragmentParts = explode('/', $oneOf->getMergedUri()->getFragment());
                $oneOfName = array_pop($fragmentParts);
                $oneOfResolved = $this->resolve($oneOf, JsonSchema::class);
            }

            $merged = $this->jsonSchemaMerger->merge($object, $oneOfResolved);
            $type->addType($this->chainGuesser->guessType($merged, $oneOfName, $reference . '/oneOf/' . $key, $registry));
        }

        return $type;
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && 'object' === $object->getType() && \is_array($object->getOneOf()) && \count($object->getOneOf()) > 0;
    }
}
