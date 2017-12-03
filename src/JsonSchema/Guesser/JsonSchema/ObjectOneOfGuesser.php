<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\Guess\MultipleType;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\JsonSchemaMerger;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;
use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchema\Schema;
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
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        foreach ($object->getOneOf() as $key => $oneOf) {
            $oneOfName = $name.'Sub';
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
    public function guessType($object, $name, $reference, Registry $registry)
    {
        $type = new MultipleType($object);

        foreach ($object->getOneOf() as $key => $oneOf) {
            $oneOfName = $name.'Sub';
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
    public function supportObject($object)
    {
        return ($object instanceof JsonSchema) && $object->getType() === 'object' && is_array($object->getOneOf()) && count($object->getOneOf()) > 0;
    }
}
