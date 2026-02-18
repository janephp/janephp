<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\PropertiesGuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class AllOfGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, PropertiesGuesserInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    public function __construct(
        DenormalizerInterface $denormalizer,
        protected Naming $naming,
    ) {
        $this->denormalizer = $denormalizer;
    }

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        $hasSubObject = false;

        foreach ($object->getAllOf() as $allOf) {
            if ($allOf instanceof Reference) {
                $allOf = $this->resolve($allOf, $this->getSchemaClass());
            }
            if ('object' === $allOf->getType()) {
                $hasSubObject = true;
                break;
            }
        }

        if ($hasSubObject) {
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

                $classGuess = $this->createClassGuess($object, $reference, $name, $extensions);
                if (null !== $object->getRequired()) {
                    $classGuess->setRequired($object->getRequired());
                }

                if (($schema = $registry->getSchema($reference)) === null) {
                    throw new \RuntimeException("Schema for reference $reference could not be found");
                }
                $schema->addClass($reference, $classGuess);
            }

            foreach ($object->getAllOf() as $allOfIndex => $allOf) {
                if (is_a($allOf, $this->getSchemaClass())) {
                    if ($allOf->getProperties()) {
                        foreach ($allOf->getProperties() as $key => $property) {
                            $this->chainGuesser->guessClass($property, $name . $key, $reference . '/allOf/' . $allOfIndex . '/properties/' . $key, $registry);
                        }
                    }
                }
            }
        }
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = null;
        $allOfType = null;

        // Mainly a merged class
        if ($registry->hasClass($reference)) {
            if (($class = $registry->getClass($reference)) === null) {
                throw new \RuntimeException("Class for reference $reference could not be found");
            }
            if (($schema = $registry->getSchema($reference)) === null) {
                throw new \RuntimeException("Schema for reference $reference could not be found");
            }

            return new ObjectType($object, $class->getName(), $schema->getNamespace());
        }

        foreach ($object->getAllOf() as $allOfIndex => $allOf) {
            $allOfSchema = $allOf;
            $allOfReference = $reference . '/allOf/' . $allOfIndex;

            if ($allOfSchema instanceof Reference) {
                $allOfReference = (string) $allOf->getMergedUri();

                if ((string) $allOf->getMergedUri() === (string) $allOf->getMergedUri()->withFragment('')) {
                    $allOfReference .= '#';
                }

                $allOfSchema = $this->resolve($allOfSchema, $this->getSchemaClass());
            }

            if (null !== $allOfSchema->getType()) {
                if (null !== $type && $allOfType !== $allOfSchema->getType()) {
                    throw new \RuntimeException('an allOf instruction with 2 or more types is strictly impossible, check your schema');
                }

                $allOfType = $allOfSchema->getType();
                $type = $this->chainGuesser->guessType($allOf, $name, $allOfReference, $registry);
            }
        }

        if (null === $type) {
            return new Type($object, 'mixed');
        }

        return $type;
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && \is_array($object->getAllOf()) && \count($object->getAllOf()) > 0;
    }

    public function guessProperties($object, string $name, string $reference, Registry $registry): array
    {
        $properties = [];
        foreach ($object->getAllOf() as $allOfIndex => $allOfSchema) {
            $allOfReference = $reference . '/allOf/' . $allOfIndex;

            if ($allOfSchema instanceof Reference) {
                $allOfReference = (string) $allOfSchema->getMergedUri();

                if ((string) $allOfSchema->getMergedUri() === (string) $allOfSchema->getMergedUri()->withFragment('')) {
                    $allOfReference .= '#';
                }

                $allOfSchema = $this->resolve($allOfSchema, $this->getSchemaClass());
            }

            $properties = array_merge($properties, $this->chainGuesser->guessProperties($allOfSchema, $name, $allOfReference, $registry));
        }

        return $properties;
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }

    protected function createClassGuess($object, string $reference, string $name, array $extensions): ClassGuess
    {
        return new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions);
    }
}
