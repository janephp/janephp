<?php

namespace Jane\Component\OpenApiCommon;

use Jane\Component\JsonSchema\Generator\ChainGenerator;
use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\MultipleClass;
use Jane\Component\OpenApiCommon\Registry\Registry as OpenApiRegistry;
use Jane\Component\OpenApiCommon\Registry\Schema;
use Jane\Component\OpenApiCommon\SchemaParser\SchemaParser;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

abstract class JaneOpenApi extends ChainGenerator
{
    protected const OBJECT_NORMALIZER_CLASS = null;
    protected const WHITELIST_FETCH_CLASS = null;

    /** @var SchemaParser */
    protected $schemaParser;

    /** @var ChainGuesser */
    protected $chainGuesser;

    /** @var Naming */
    protected $naming;

    /** @var bool */
    protected $strict;

    /** @var SerializerInterface */
    protected $serializer;

    public function __construct(string $schemaParserClass, ChainGuesser $chainGuesser, bool $strict = true)
    {
        $this->serializer = self::buildSerializer();
        $this->schemaParser = new $schemaParserClass($this->serializer);
        $this->chainGuesser = $chainGuesser;
        $this->strict = $strict;
        $this->naming = new Naming();
    }

    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    /**
     * @param OpenApiRegistry $registry
     */
    public function createContext(Registry $registry): Context
    {
        /** @var Schema[] $schemas */
        $schemas = array_values($registry->getSchemas());

        foreach ($schemas as $schema) {
            $openApiSpec = $this->schemaParser->parseSchema($schema->getOrigin());
            $this->chainGuesser->guessClass($openApiSpec, $schema->getRootName(), $schema->getOrigin() . '#', $registry);
            $schema->setParsed($openApiSpec);
        }

        foreach ($schemas as $schema) {
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
                $schema->addClassRelations($class);

                $extensionsTypes = [];

                foreach ($class->getExtensionsObject() as $pattern => $extensionData) {
                    $extensionsTypes[$pattern] = $this->chainGuesser->guessType($extensionData['object'], $class->getName(), $extensionData['reference'], $registry);
                }

                $class->setExtensionsType($extensionsTypes);
            }

            $this->hydrateDiscriminatedClasses($schema, $registry);

            // when we have a whitelist, we want to have only needed models to be generated
            if (\count($registry->getWhitelistedPaths() ?? []) > 0) {
                $this->whitelistFetch($schema, $registry);
            }
        }

        return new Context($registry, $this->strict);
    }

    public static function buildSerializer()
    {
        $encoders = [
            new JsonEncoder(new JsonEncode([JsonEncode::OPTIONS => \JSON_UNESCAPED_SLASHES]), new JsonDecode()),
            new YamlEncoder(new Dumper(), new Parser()),
        ];

        $objectNormalizerClass = static::OBJECT_NORMALIZER_CLASS;

        return new Serializer([new $objectNormalizerClass()], $encoders);
    }

    public static function build(array $options = [])
    {
        $instance = static::create($options);

        /** @var DenormalizerInterface $denormalizer */
        $denormalizer = $instance->getSerializer();
        $generators = static::generators($denormalizer, $options);

        foreach ($generators as $generator) {
            $instance->addGenerator($generator);
        }

        return $instance;
    }

    /**
     * @param OpenApiRegistry $registry
     */
    protected function whitelistFetch(Schema $schema, Registry $registry): void
    {
        $whitelistFetchClass = static::WHITELIST_FETCH_CLASS;
        /** @var WhitelistFetchInterface $whitelistedSchema */
        $whitelistedSchema = new $whitelistFetchClass($schema, self::buildSerializer());

        foreach ($schema->getOperations() as $operation) {
            $whitelistedSchema->addOperationRelations($operation, $registry);
        }

        foreach ($schema->getClasses() as $class) {
            if (!$schema->needsRelation($class->getName())) {
                $schema->removeClass($class->getReference());
            }
        }
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

    abstract protected static function create(array $options = []): self;

    abstract protected static function generators(DenormalizerInterface $denormalizer, array $options = []): \Generator;
}
