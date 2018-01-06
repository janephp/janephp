<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Generator\ChainGenerator;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Generator\NormalizerGenerator;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\JsonSchema\Guesser\JsonSchema\JsonSchemaGuesserFactory;
use Jane\JsonSchema\Normalizer\NormalizerFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class Jane extends ChainGenerator
{
    public const VERSION = '4.x-dev';

    private $serializer;

    private $chainGuesser;

    private $strict;

    public function __construct(Serializer $serializer, ChainGuesser $chainGuesser, $strict = true)
    {
        $this->serializer = $serializer;
        $this->chainGuesser = $chainGuesser;
        $this->strict = $strict;
    }

    public function createContext(Registry $registry): Context
    {
        // List of schemas can evolve, but we don't want to generate new schema dynamically added, so we "clone" the array
        // to have a fixed list of schemas
        $schemas = array_values($registry->getSchemas());

        /** @var Schema $schema */
        foreach ($schemas as $schema) {
            $jsonSchema = $this->serializer->deserialize(file_get_contents($schema->getOrigin()), 'Jane\JsonSchema\Model\JsonSchema', 'json', [
                'document-origin' => $schema->getOrigin(),
            ]);

            $this->chainGuesser->guessClass($jsonSchema, $schema->getRootName(), $schema->getOrigin() . '#', $registry);
        }

        foreach ($registry->getSchemas() as $schema) {
            foreach ($schema->getClasses() as $class) {
                $properties = $this->chainGuesser->guessProperties($class->getObject(), $schema->getRootName(), $class->getReference(), $registry);

                foreach ($properties as $property) {
                    $property->setType($this->chainGuesser->guessType($property->getObject(), $property->getName(), $property->getReference(), $registry));
                }

                $class->setProperties($properties);

                $extensionsTypes = [];

                foreach ($class->getExtensionsObject() as $pattern => $extensionData) {
                    $extensionsTypes[$pattern] = $this->chainGuesser->guessType($extensionData['object'], $class->getName(), $extensionData['reference'], $registry);
                }

                $class->setExtensionsType($extensionsTypes);
            }
        }

        return new Context($registry, $this->strict);
    }

    public static function build($options = [])
    {
        $serializer = self::buildSerializer();
        $chainGuesser = JsonSchemaGuesserFactory::create($serializer, $options);
        $naming = new Naming();
        $modelGenerator = new ModelGenerator($naming);
        $normGenerator = new NormalizerGenerator($naming, $options['reference']);

        $self = new self($serializer, $chainGuesser, $options['strict']);
        $self->addGenerator($modelGenerator);
        $self->addGenerator($normGenerator);

        return $self;
    }

    public static function buildSerializer()
    {
        $encoders = [new JsonEncoder(new JsonEncode(JSON_UNESCAPED_SLASHES), new JsonDecode(false))];
        $normalizers = NormalizerFactory::create();

        return new Serializer($normalizers, $encoders);
    }
}
