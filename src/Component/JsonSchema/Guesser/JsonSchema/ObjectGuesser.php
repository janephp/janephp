<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\PropertiesGuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\SerializerInterface;

class ObjectGuesser implements GuesserInterface, PropertiesGuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    /**
     * @var \Jane\Component\JsonSchema\Generator\Naming
     */
    protected $naming;

    public function __construct(Naming $naming, SerializerInterface $serializer)
    {
        $this->naming = $naming;
        $this->serializer = $serializer;
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && (\is_array($object->getType()) ? \in_array('object', $object->getType()) : 'object' === $object->getType()) && null !== $object->getProperties();
    }

    /**
     * {@inheritdoc}
     *
     * @param JsonSchema $object
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (!$registry->hasClass($reference)) {
            $extensions = [];

            if ($object->getAdditionalProperties()) {
                $extensionObject = null;

                if (\is_object($object->getAdditionalProperties())) {
                    $extensionObject = $object->getAdditionalProperties();
                }

                $extensions['.*'] = [
                    'object' => $extensionObject,
                    'reference' => $reference . '/additionalProperties',
                ];
            } elseif (method_exists($object, 'getPatternProperties') && null !== $object->getPatternProperties()) {
                foreach ($object->getPatternProperties() as $pattern => $patternProperty) {
                    $extensions[$pattern] = [
                        'object' => $patternProperty,
                        'reference' => $reference . '/patternProperties/' . $pattern,
                    ];
                }
            }

            $registry->getSchema($reference)->addClass($reference, $this->createClassGuess($object, $reference, $name, $extensions));
        }

        foreach ($object->getProperties() as $key => $property) {
            $this->chainGuesser->guessClass($property, $name . ucfirst($key), $reference . '/properties/' . $key, $registry);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function guessProperties($object, string $name, string $reference, Registry $registry): array
    {
        /** @var JsonSchema $object */
        $properties = [];

        foreach ($object->getProperties() as $key => $property) {
            $propertyObj = $property;

            if ($propertyObj instanceof Reference) {
                $propertyObj = $this->resolve($propertyObj, $this->getSchemaClass());
            }

            $nullable = $this->isPropertyNullable($propertyObj);

            $required = false;
            if (\is_array($object->getRequired())) {
                $required = \in_array($key, $object->getRequired());
            }

            $properties[$key] = new Property($property, $key, $reference . '/properties/' . $key, $nullable, $required, null, $propertyObj->getDescription(), $propertyObj->getDefault(), $propertyObj->getReadOnly());
            if (method_exists($propertyObj, 'getDeprecated')) {
                $properties[$key]->setDeprecated($propertyObj->getDeprecated());
            }
        }

        return $properties;
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $discriminants = [];
        $required = $object->getRequired() ?: [];

        foreach ($object->getProperties() as $key => $property) {
            if (!\in_array($key, $required)) {
                continue;
            }

            if ($property instanceof Reference) {
                $property = $this->resolve($property, $this->getSchemaClass());
            }

            if (null !== $property->getEnum()) {
                $isSimple = true;
                foreach ($property->getEnum() as $value) {
                    if (\is_array($value) || \is_object($value)) {
                        $isSimple = false;
                    }
                }
                if ($isSimple) {
                    $discriminants[$key] = $property->getEnum();
                }
            } else {
                $discriminants[$key] = null;
            }
        }

        if ($registry->hasClass($reference)) {
            return new ObjectType($object, $registry->getClass($reference)->getName(), $registry->getSchema($reference)->getNamespace(), $discriminants);
        }

        return new Type($object, 'object');
    }

    protected function isPropertyNullable($property): bool
    {
        return 'null' == $property->getType() || (\is_array($property->getType()) && \in_array('null', $property->getType()));
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }

    protected function createClassGuess($object, string $reference, string $name, array $extensions): ClassGuess
    {
        return new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions, $object->getDeprecated());
    }
}
