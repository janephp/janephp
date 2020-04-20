<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Generator\ChainGenerator;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Generator\NormalizerGenerator;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\JsonSchema\Guesser\JsonSchema\JsonSchemaGuesserFactory;
use Jane\JsonSchema\Normalizer\JaneObjectNormalizer;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class Jane extends ChainGenerator
{
    public const VERSION = '4.x-dev';

    private $serializer;

    private $chainGuesser;

    private $strict;

    private $naming;

    public function __construct(SerializerInterface $serializer, ChainGuesser $chainGuesser, Naming $naming, bool $strict = true)
    {
        $this->serializer = $serializer;
        $this->chainGuesser = $chainGuesser;
        $this->strict = $strict;
        $this->naming = $naming;
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
                $names = [];

                foreach ($properties as $property) {
                    $property->setPhpName($this->naming->getPropertyName($property->getName()));

                    $i = 2;
                    $newName = $property->getPhpName();

                    while (\in_array(strtolower($newName), $names, true)) {
                        $newName = $property->getPhpName() . $i;
                        ++$i;
                    }

                    if ($newName !== $property->getPhpName()) {
                        $property->setPhpName($newName);
                    }

                    $names[] = strtolower($property->getPhpName());

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

    public static function build(array $options = []): self
    {
        $serializer = self::buildSerializer();
        $chainGuesser = JsonSchemaGuesserFactory::create($serializer, $options);
        $naming = new Naming();
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
        $modelGenerator = new ModelGenerator($naming, $parser);
        $normGenerator = new NormalizerGenerator($naming, $parser, $options['reference'], $options['use-cacheable-supports-method'] ?? false, $options['skip-null-values'] ?? true);

        $self = new self($serializer, $chainGuesser, $naming, $options['strict']);
        $self->addGenerator($modelGenerator);
        $self->addGenerator($normGenerator);

        return $self;
    }

    public static function buildSerializer(): SerializerInterface
    {
        $encoders = [new JsonEncoder(new JsonEncode([JsonEncode::OPTIONS => JSON_UNESCAPED_SLASHES]), new JsonDecode([JsonDecode::ASSOCIATIVE => true]))];

        return new Serializer([new JaneObjectNormalizer()], $encoders);
    }
}
