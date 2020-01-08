<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ReferenceGuesser implements ClassGuesserInterface, GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    public function __construct(DenormalizerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return $object instanceof Reference;
    }

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        /** @var Reference $object */
        if ($object->isInCurrentDocument()) {
            return [];
        }

        $mergedReference = (string) $object->getMergedUri();

        if (null === $registry->getSchema($mergedReference) && null !== ($schema = $registry->getSchema((string) $object->getOriginUri()))) {
            $schema->addReference((string) $object->getMergedUri()->withFragment(''));
        }

        return $this->chainGuesser->guessClass(
            $this->resolve($object, $this->getSchemaClass()),
            $name,
            (string) $object->getMergedUri()->withFragment('') === (string) $object->getMergedUri() ? (string) $object->getMergedUri()->withFragment('') . '#' : (string) $object->getMergedUri(),
            $registry
        );
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry)
    {
        $resolved = $this->resolve($object, $this->getSchemaClass());
        $classKey = (string) $object->getMergedUri();

        if ((string) $object->getMergedUri() === (string) $object->getMergedUri()->withFragment('')) {
            $classKey .= '#';
        }

        if ($registry->hasClass($classKey) && ($classGuess = $registry->getClass($classKey)) instanceof ClassGuess) {
            $name = $classGuess->getName();
        }

        return $this->chainGuesser->guessType($resolved, $name, $classKey, $registry);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
