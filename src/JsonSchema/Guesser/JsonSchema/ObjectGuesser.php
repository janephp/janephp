<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchema\Guesser\Guess\ObjectType;
use Jane\JsonSchema\Guesser\Guess\Property;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\JsonSchema\Guesser\PropertiesGuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\SerializerInterface;

class ObjectGuesser implements GuesserInterface, PropertiesGuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    /**
     * @var \Jane\JsonSchema\Generator\Naming
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
    public function supportObject($object)
    {
        return ($object instanceof JsonSchema) && (\is_array($object->getType()) ? \in_array('object', $object->getType()) : 'object' === $object->getType()) && null !== $object->getProperties();
    }

    /**
     * {@inheritdoc}
     *
     * @param JsonSchema $object
     */
    public function guessClass($object, $name, $reference, Registry $registry)
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
            } elseif (method_exists($object, 'getPatternProperties') && $object->getPatternProperties() !== null) {
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
    public function guessProperties($object, $name, $reference, Registry $registry)
    {
        $properties = [];

        foreach ($object->getProperties() as $key => $property) {
            $propertyObj = $property;

            if ($propertyObj instanceof Reference) {
                $propertyObj = $this->resolve($propertyObj, $this->getSchemaClass());
            }

            $nullable = $this->isPropertyNullable($propertyObj);

            $properties[$key] = new Property($property, $key, $reference . '/properties/' . $key, $nullable, null, $propertyObj->getDescription(), $propertyObj->getDefault(), $propertyObj->getReadOnly());
        }

        return $properties;
    }

    protected function isPropertyNullable($property): bool
    {
        return 'null' == $property->getType() || (\is_array($property->getType()) && \in_array('null', $property->getType()));
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, $name, $reference, Registry $registry)
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

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return JsonSchema::class;
    }

    protected function createClassGuess($object, $reference, $name, $extensions): ClassGuess
    {
        return new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions);
    }
}
