<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\DefaultAdditionalPropertiesTrait;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\PropertiesGuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Validator\ChainValidatorFactory;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ObjectGuesser implements GuesserInterface, PropertiesGuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;
    use DefaultAdditionalPropertiesTrait;
    use GuesserResolverTrait;

    protected ?ValidatorInterface $chainValidator = null;

    private ?ChainValidatorFactory $chainValidatorFactory = null;

    public function __construct(
        DenormalizerInterface $denormalizer,
        protected Naming $naming,
        ?bool $defaultAdditionalProperties = null,
        ?ChainValidatorFactory $chainValidatorFactory = null,
    ) {
        $this->denormalizer = $denormalizer;
        $this->defaultAdditionalProperties = $defaultAdditionalProperties;
        $this->chainValidatorFactory = $chainValidatorFactory;
    }

    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && (\is_array($object->type ?? null) ? \in_array('object', $object->type ?? null) : 'object' === ($object->type ?? null)) && null !== ($object->properties ?? null);
    }

    /**
     * @param JsonSchema $object
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (!$registry->hasClass($reference)) {
            $this->initChainValidator($registry);
            $extensions = $this->resolveAdditionalProperties($object, $reference);

            $classGuess = $this->createClassGuess($object, $reference, $name, $extensions);
            if (null !== ($object->required ?? null)) {
                $classGuess->setRequired($object->required ?? null);
            }

            $schema = $registry->getSchema($reference);
            if (null !== $schema) {
                $schema->addClass($reference, $classGuess);
            }
        }

        foreach (($object->properties ?? null ?? []) as $key => $property) {
            $this->chainGuesser->guessClass($property, $name . ucfirst($key), $reference . '/properties/' . $key, $registry);
        }
    }

    protected function resolveAdditionalProperties($object, string $reference): array
    {
        $extensions = [];
        $additionalProperties = $this->getEffectiveAdditionalProperties($object);

        if ($additionalProperties) {
            $extensionObject = null;

            if (\is_object($additionalProperties)) {
                $extensionObject = $additionalProperties;
            }

            $extensions['.*'] = [
                'object' => $extensionObject,
                'reference' => $reference . '/additionalProperties',
            ];
        } elseif (property_exists($object, 'patternProperties') && ($object->patternProperties ?? null) !== null) {
            foreach (($object->patternProperties ?? null ?? []) as $pattern => $patternProperty) {
                $extensions[$pattern] = [
                    'object' => $patternProperty,
                    'reference' => $reference . '/patternProperties/' . $pattern,
                ];
            }
        }

        return $extensions;
    }

    public function guessProperties($object, string $name, string $reference, Registry $registry): array
    {
        /** @var JsonSchema $object */
        $properties = [];
        $this->initChainValidator($registry);

        foreach (($object->properties ?? null ?? []) as $key => $property) {
            $propertyObj = $property;

            if ($propertyObj instanceof Reference) {
                $propertyObj = $this->resolve($propertyObj, $this->getSchemaClass());
            }

            if (!\is_object($propertyObj)) {
                continue;
            }

            $nullable = $this->isPropertyNullable($propertyObj);

            $required = false;
            if (\is_array($object->required ?? null)) {
                $required = \in_array($key, $object->required ?? null);
            }

            $newProperty = new Property($property, $key, $reference . '/properties/' . $key, $nullable, $required, null, $propertyObj->description ?? null, $propertyObj->default ?? null, $propertyObj->readOnly ?? null);
            if (property_exists($propertyObj, 'deprecated')) {
                $newProperty->setDeprecated($propertyObj->deprecated ?? null);
            }
            $this->chainValidator->guess($propertyObj, $name, $newProperty);
            $properties[$key] = $newProperty;
        }

        return $properties;
    }

    protected function isPropertyNullable($property): bool
    {
        if (!\is_object($property) || !property_exists($property, 'oneOf')) {
            return false;
        }

        $oneOf = ($property->oneOf ?? null);
        if (!empty($oneOf)) {
            foreach ($oneOf as $oneOfProperty) {
                if (!($oneOfProperty instanceof JsonSchema)) {
                    continue;
                }
                if ($this->isPropertyNullable($oneOfProperty)) {
                    return true;
                }
            }

            return false;
        }

        if (property_exists($property, 'anyOf')) {
            if (\count($anyOf = (($property->anyOf ?? null) ?? [])) > 0) {
                foreach ($anyOf as $anyOfProperty) {
                    if (!($anyOfProperty instanceof JsonSchema)) {
                        continue;
                    }
                    if ($this->isPropertyNullable($anyOfProperty)) {
                        return true;
                    }
                }

                return false;
            }
        }

        if (property_exists($property, 'allOf')) {
            if (\count($allOf = (($property->allOf ?? null) ?? [])) > 0) {
                $schemaClass = $this->getSchemaClass();
                foreach ($allOf as $allOfProperty) {
                    if (!($allOfProperty instanceof $schemaClass)) {
                        continue;
                    }
                    if ($this->isPropertyNullable($allOfProperty)) {
                        return true;
                    }
                }
            }
        }

        $type = ($property->type ?? null);

        return 'null' == $type || (\is_array($type) && \in_array('null', $type));
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $discriminants = [];
        $required = ($object->required ?? null) ?: [];

        foreach (($object->properties ?? null ?? []) as $key => $property) {
            if (!\in_array($key, $required)) {
                continue;
            }

            if ($property instanceof Reference) {
                $property = $this->resolve($property, $this->getSchemaClass());
            }

            if (!\is_object($property)) {
                continue;
            }

            if (null !== ($property->enum ?? null)) {
                $isSimple = true;
                foreach (($property->enum ?? null ?? []) as $value) {
                    if (\is_array($value) || \is_object($value)) {
                        $isSimple = false;
                    }
                }
                if ($isSimple) {
                    $discriminants[$key] = ($property->enum ?? null);
                }
            } else {
                $discriminants[$key] = null;
            }
        }

        if ($registry->hasClass($reference) && null !== ($schema = $registry->getSchema($reference))) {
            return new ObjectType($object, $registry->getClass($reference)->getName(), $schema->getNamespace(), $discriminants, $registry->getClass($reference)->getSubNamespace());
        }

        return new Type($object, 'object');
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }

    protected function createClassGuess($object, string $reference, string $name, array $extensions): ClassGuess
    {
        return new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions, $object->deprecated ?? null);
    }

    private function initChainValidator(Registry $registry): void
    {
        if (null === $this->chainValidator) {
            $factory = $this->chainValidatorFactory ?? new ChainValidatorFactory();
            $this->chainValidator = $factory->create($this->naming, $registry, $this->denormalizer);
        }
    }
}
