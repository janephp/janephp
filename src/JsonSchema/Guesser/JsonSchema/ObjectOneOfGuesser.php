<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\Guess\MultipleType;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\Tools\JsonSchemaMerger;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry\Registry;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\SerializerInterface;

class ObjectOneOfGuesser implements GuesserInterface, TypeGuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    /**
     * @var \Jane\JsonSchema\JsonSchemaMerger
     */
    private $jsonSchemaMerger;

    public function __construct(JsonSchemaMerger $jsonSchemaMerger, SerializerInterface $serializer)
    {
        $this->jsonSchemaMerger = $jsonSchemaMerger;
        $this->serializer = $serializer;
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
