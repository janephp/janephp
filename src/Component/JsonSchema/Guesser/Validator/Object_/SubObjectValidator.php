<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Object_;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class SubObjectValidator implements ValidatorInterface
{
    use GuesserResolverTrait;
    use ObjectCheckTrait;

    public function __construct(
        DenormalizerInterface $denormalizer,
        private readonly Naming $naming,
        private readonly Registry $registry,
    ) {
        $this->denormalizer = $denormalizer;
    }

    public function supports($object): bool
    {
        return $this->checkObject($object) && (\is_array($object->getType()) ? \in_array('object', $object->getType()) : 'object' === $object->getType());
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        if (strpos($guess->getReference(), 'properties') !== false) {
            return; // we don't want to guess on properties here, only on classes
        }

        foreach ($object->getProperties() ?? [] as $localName => $property) {
            $reference = null;
            $className = null;
            if ($property instanceof Reference) {
                $reference = (string) $property->getMergedUri();
                /** @var JsonSchema|null $propertyObj */
                $propertyObj = $this->resolve($property, \get_class($object)); // @phpstan-ignore varTag.nativeType
                $classGuess = $this->registry->getClass((string) $property->getMergedUri());
                if (null !== $classGuess) {
                    $className = $classGuess->getName();
                }
            } else {
                $schema = $this->registry->getFirstSchema();
                [$classGuess, $localReference] = $schema->findPropertyClass($name, $localName);

                $propertyObj = $property;
                if (null !== $classGuess) {
                    $className = $classGuess->getName();
                    $reference = $localReference;
                }
            }

            if (null !== $className && (\is_array($propertyObj->getType()) ? \in_array('object', $propertyObj->getType()) : 'object' === $propertyObj->getType())) {
                $guess->addValidatorGuess(new ValidatorGuess($this->naming->getConstraintName($className), [], $localName, $reference));
            }
        }
    }
}
