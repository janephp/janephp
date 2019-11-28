<?php

namespace Jane\OpenApi;

use Jane\JsonSchema\Generator\ChainGenerator;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\OpenApi\Generator\NormalizerGenerator;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\OpenApi\Generator\GeneratorFactory;
use Jane\OpenApi\Guesser\Guess\ClassGuess;
use Jane\OpenApi\Guesser\Guess\MultipleClass;
use Jane\OpenApi\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi\Normalizer\NormalizerFactory;
use Jane\OpenApi\SchemaParser\SchemaParser;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use PhpParser\ParserFactory;
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
    public const CLIENT_PSR18 = 'psr18';
    public const CLIENT_HTTPLUG = 'httplug';

    private $schemaParser;

    private $chainGuesser;

    private $strict;

    private $naming;

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

    public static function build(array $options = [])
    {
        if ($options['client'] === self::CLIENT_HTTPLUG) {
            @trigger_error(sprintf('Generating "%s" client is deprecated, use the "%s" in the "client" option', self::CLIENT_HTTPLUG, self::CLIENT_PSR18));
        }

        $encoders = [
            new JsonEncoder(
                new JsonEncode(),
                new JsonDecode()
            ),
            new YamlEncoder(
                new Dumper(),
                new Parser()
            ),
        ];
        $normalizers = NormalizerFactory::create();
        $serializer = new Serializer($normalizers, $encoders);
        $schemaParser = new SchemaParser($serializer);
        $generators = GeneratorFactory::build($serializer, $options);
        $naming = new Naming();
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
        $modelGenerator = new ModelGenerator($naming, $parser);
        $normGenerator = new NormalizerGenerator($naming, $options['reference'] ?? false, $options['use-cacheable-supports-method'] ?? false);

        $self = new self(
            $schemaParser,
            GuesserFactory::create($serializer, $options),
            $naming,
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
