<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Generator\ChainGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use Jane\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\OpenApiCommon\Guesser\Guess\MultipleClass;
use Jane\OpenApiCommon\SchemaParser\SchemaParser;
use Jane\JsonSchema\Generator\Context\Context;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

abstract class JaneOpenApi extends ChainGenerator
{
    public const CLIENT_PSR18 = 'psr18';
    public const CLIENT_HTTPLUG = 'httplug';

    protected const NORMALIZER_FACTORY_CLASS = null;

    /** @var SchemaParser $schemaParser */
    protected $schemaParser;

    /** @var ChainGuesser $chainGuesser */
    protected $chainGuesser;

    /** @var Naming $naming */
    protected $naming;

    /** @var bool $strict */
    protected $strict;

    public function __construct(
        SchemaParser $schemaParser,
        ChainGuesser $chainGuesser,
        Naming $naming,
        bool $strict = true
    ) {
        $this->schemaParser = $schemaParser;
        $this->chainGuesser = $chainGuesser;
        $this->strict = $strict;
        $this->naming = $naming;
    }

    public function createContext(Registry $registry): Context
    {
        $schemas = array_values($registry->getSchemas());

        /** @var Schema $schema */
        foreach ($schemas as $schema) {
            $openApiSpec = $this->schemaParser->parseSchema($schema->getOrigin());
            $this->chainGuesser->guessClass($openApiSpec, $schema->getRootName(), $schema->getOrigin() . '#', $registry);
            $schema->setParsed($openApiSpec);
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

            $this->hydrateDiscriminatedClasses($schema, $registry);
        }

        return new Context($registry, $this->strict);
    }

    protected function hydrateDiscriminatedClasses(Schema $schema, Registry $registry)
    {
        foreach ($schema->getClasses() as $class) {
            if ($class instanceof MultipleClass) { // is parent class
                foreach ($class->getReferences() as $reference) {
                    $guess = $registry->getClass($reference);
                    if ($guess instanceof ClassGuess) { // is child class
                        $guess->setMultipleClass($class);
                    }
                }
            }
        }
    }

    public static function buildSerializer()
    {
        $encoders = [
            new JsonEncoder(new JsonEncode([JsonEncode::OPTIONS => JSON_UNESCAPED_SLASHES]), new JsonDecode()),
            new YamlEncoder(new Dumper(), new Parser()),
        ];

        $normalizerFactoryClass = static::NORMALIZER_FACTORY_CLASS;
        $normalizers = $normalizerFactoryClass::create();

        return new Serializer($normalizers, $encoders);
    }
}
