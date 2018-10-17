<?php

namespace Jane\OpenApi;

use Jane\JsonSchema\Generator\ChainGenerator;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Generator\NormalizerGenerator;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\OpenApi\Generator\GeneratorFactory;
use Jane\OpenApi\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi\SchemaParser\Converter;
use Jane\OpenApi\SchemaParser\SchemaParser;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

class JaneOpenApi extends ChainGenerator
{
    public const VERSION = '4.x-dev';

    private $schemaParser;

    private $chainGuesser;

    private $strict;

    public function __construct(
        SchemaParser $schemaParser,
        ChainGuesser $chainGuesser,
        bool $strict = true
    ) {
        $this->schemaParser = $schemaParser;
        $this->chainGuesser = $chainGuesser;
        $this->strict = $strict;
    }

    public function createContext(Registry $registry): Context
    {
        $schemas = array_values($registry->getSchemas());

        /** @var Schema $schema */
        foreach ($schemas as $schema) {
            $openApiSpec = $this->schemaParser->parseSchema($schema->getOrigin(), $schema->getVersion());
            $this->chainGuesser->guessClass($openApiSpec, $schema->getRootName(), $schema->getOrigin() . '#', $registry);
            $schema->setParsed($openApiSpec);
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

    public static function build(array $options = [])
    {
        $encoders = [
            new JsonEncoder(
                new JsonEncode(),
                new JsonDecode(false)
            ),
            new YamlEncoder(
                new Dumper(),
                new Parser()
            ),
        ];

        $normalizers = array_merge(JsonSchema\Version2\Normalizer\NormalizerFactory::create(), JsonSchema\Version3\Normalizer\NormalizerFactory::create());
        $serializer = new Serializer($normalizers, $encoders);
        $schemaParser = new SchemaParser($serializer, new Converter());
        $generators = GeneratorFactory::build($serializer, $options);
        $naming = new Naming();
        $modelGenerator = new ModelGenerator($naming);
        $normGenerator = new NormalizerGenerator($naming, $options['reference'] ?? false);

        $self = new self(
            $schemaParser,
            GuesserFactory::create($serializer, $options),
            $options['strict'] ?? true
        );

        $self->addGenerator($modelGenerator);
        $self->addGenerator($normGenerator);

        foreach ($generators as $generator) {
            $self->addGenerator($generator);
        }

        return $self;
    }
}
