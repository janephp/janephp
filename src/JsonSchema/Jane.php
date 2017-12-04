<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Generator\NormalizerGenerator;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\JsonSchema\Guesser\JsonSchema\JsonSchemaGuesserFactory;
use Jane\JsonSchema\Normalizer\NormalizerFactory;
use PhpCsFixer\Cache\NullCacheManager;
use PhpCsFixer\Differ\NullDiffer;
use PhpCsFixer\Error\ErrorsManager;
use PhpCsFixer\Linter\Linter;
use PhpCsFixer\Runner\Runner;
use PhpCsFixer\ToolInfo;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Console\ConfigurationResolver;
use PhpCsFixer\Finder;

class Jane
{
    public const VERSION = '4.x-dev';

    private $serializer;

    private $modelGenerator;

    private $normalizerGenerator;

    private $chainGuesser;

    public function __construct(Serializer $serializer, ChainGuesser $chainGuesser, ModelGenerator $modelGenerator, NormalizerGenerator $normalizerGenerator)
    {
        $this->serializer = $serializer;
        $this->chainGuesser = $chainGuesser;
        $this->modelGenerator = $modelGenerator;
        $this->normalizerGenerator = $normalizerGenerator;
    }

    /**
     * Return a list of class guessed.
     *
     * @param $registry
     *
     * @return Context
     */
    public function createContext(Registry $registry)
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
            }
        }

        return new Context($registry);
    }

    /**
     * Generate code.
     *
     * @param Registry $registry
     *
     * @return array
     */
    public function generate($registry)
    {
        $context = $this->createContext($registry);

        foreach ($registry->getSchemas() as $schema) {
            $context->setCurrentSchema($schema);

            $this->modelGenerator->generate($schema, $schema->getRootName(), $context);
            $this->normalizerGenerator->generate($schema, $schema->getRootName(), $context);
        }
    }

    public static function build($options = [])
    {
        $serializer = self::buildSerializer();
        $chainGuesser = JsonSchemaGuesserFactory::create($serializer, $options);
        $naming = new Naming();
        $modelGenerator = new ModelGenerator($naming);
        $normGenerator = new NormalizerGenerator($naming, isset($options['reference']) ? $options['reference'] : true);

        return new self($serializer, $chainGuesser, $modelGenerator, $normGenerator);
    }

    public static function buildSerializer()
    {
        $encoders = [new JsonEncoder(new JsonEncode(JSON_UNESCAPED_SLASHES), new JsonDecode(false))];
        $normalizers = NormalizerFactory::create();

        return new Serializer($normalizers, $encoders);
    }
}
