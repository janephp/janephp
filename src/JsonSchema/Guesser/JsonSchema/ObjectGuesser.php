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
use Jane\JsonSchema\Reference\Resolver;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Runtime\Reference;
use Jane\JsonSchema\Schema;
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
        return ($object instanceof JsonSchema) && $object->getType() === 'object' && $object->getProperties() !== null;
    }

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        if (!$registry->hasClass($reference)) {
            $registry->getSchema($reference)->addClass($reference, new ClassGuess($object, $reference, $this->naming->getClassName($name)));
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

            $type = $propertyObj->getType();
            $nullable = $type == 'null' || (is_array($type) && in_array('null', $type));

            $properties[] = new Property($property, $key, $reference . '/properties/' . $key, $nullable);
        }

        return $properties;
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, $name, $reference, Registry $registry)
    {
        $discriminants = [];
        $required = $object->getRequired() ?: [];

        foreach ($object->getProperties() as $key => $property) {
            if (!in_array($key, $required)) {
                continue;
            }

            if ($property instanceof Reference) {
                $property = $this->resolve($property, $this->getSchemaClass());
            }

            if ($property->getEnum() !== null) {
                $isSimple = true;
                foreach ($property->getEnum() as $value) {
                    if (is_array($value) || is_object($value)) {
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
}
