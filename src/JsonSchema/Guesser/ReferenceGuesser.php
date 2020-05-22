<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry\Registry;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\SerializerInterface;

class ReferenceGuesser implements ClassGuesserInterface, GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return $object instanceof Reference;
    }

    /**
     * {@inheritdoc}
     *
     * @param Reference $object
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if ($object->isInCurrentDocument()) {
            return;
        }

        $mergedReference = (string) $object->getMergedUri();

        if (null === $registry->getSchema($mergedReference)) {
            $schema = $registry->getSchema((string) $object->getOriginUri());
            $schema->addReference((string) $object->getMergedUri()->withFragment(''));
        }

        $this->chainGuesser->guessClass(
            $this->resolve($object, $this->getSchemaClass()),
            $name,
            (string) $object->getMergedUri()->withFragment('') === (string) $object->getMergedUri() ? (string) $object->getMergedUri()->withFragment('') . '#' : (string) $object->getMergedUri(),
            $registry
        );
    }

    /**
     * {@inheritdoc}
     *
     * @param Reference $object
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $resolved = $this->resolve($object, $this->getSchemaClass());
        $classKey = (string) $object->getMergedUri();

        if ((string) $object->getMergedUri() === (string) $object->getMergedUri()->withFragment('')) {
            $classKey .= '#';
        }

        if ($registry->hasClass($classKey)) {
            $name = $registry->getClass($classKey)->getName();
        }

        return $this->chainGuesser->guessType($resolved, $name, $classKey, $registry);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
