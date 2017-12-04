<?php

namespace Jane\OpenApi;

use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlDecode;
use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlEncode;
use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlEncoder;
use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Generator\NormalizerGenerator;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\OpenApi\Generator\ClientGenerator;
use Jane\OpenApi\Generator\GeneratorFactory;
use Jane\OpenApi\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi\Model\OpenApi;
use Jane\OpenApi\Normalizer\NormalizerFactory;
use Jane\OpenApi\SchemaParser\SchemaParser;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use PhpCsFixer\ConfigInterface;
use PhpParser\PrettyPrinter\Standard as StandardPrettyPrinter;
use PhpParser\PrettyPrinterAbstract;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class JaneOpenApi
{
    /**
     * @var SchemaParser
     */
    private $schemaParser;
    /**
     * @var Generator\ClientGenerator
     */
    private $clientGenerator;

    /**
     * @var ModelGenerator
     */
    private $modelGenerator;

    /**
     * @var NormalizerGenerator
     */
    private $normalizerGenerator;

    /**
     * @var ChainGuesser
     */
    private $chainGuesser;

    /**
     * JaneOpenApi constructor.
     *
     * @param SchemaParser          $schemaParser
     * @param ChainGuesser          $chainGuesser
     * @param ModelGenerator        $modelGenerator
     * @param NormalizerGenerator   $normalizerGenerator
     * @param ClientGenerator       $clientGenerator
     * @param PrettyPrinterAbstract $prettyPrinter
     * @param ConfigInterface|null  $fixerConfig
     */
    public function __construct(
        SchemaParser $schemaParser,
        ChainGuesser $chainGuesser,
        ModelGenerator $modelGenerator,
        NormalizerGenerator $normalizerGenerator,
        ClientGenerator $clientGenerator
    ) {
        $this->schemaParser = $schemaParser;
        $this->clientGenerator = $clientGenerator;
        $this->modelGenerator = $modelGenerator;
        $this->normalizerGenerator = $normalizerGenerator;
        $this->chainGuesser = $chainGuesser;
    }

    /**
     * Return a list of class guessed.
     *
     * @param Registry $registry A registry
     *
     * @return Context
     */
    public function createContext(Registry $registry)
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

                foreach ($properties as $property) {
                    $property->setType($this->chainGuesser->guessType($property->getObject(), $property->getName(), $property->getReference(), $registry));
                }

                $class->setProperties($properties);
            }
        }

        return new Context($registry);
    }

    /**
     * Generate a list of files.
     *
     * @param Registry $registry A registry
     *
     * @return File[]
     */
    public function generate(Registry $registry)
    {
        /** @var OpenApi $openApi */
        $context = $this->createContext($registry);

        $files = [];

        foreach ($registry->getSchemas() as $schema) {
            $context->setCurrentSchema($schema);

            $this->modelGenerator->generate($schema, $schema->getRootName(), $context);
            $this->normalizerGenerator->generate($schema, $schema->getRootName(), $context);

            $clients = $this->clientGenerator->generate($schema->getParsed(), $schema->getNamespace(), $context, $schema->getOrigin() . '#');

            foreach ($clients as $node) {
                $class = $node['class'];
                $trait = $node['trait'];

                $schema->addFile(new File($schema->getDirectory() . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR . $class->stmts[1]->name . '.php', $class, ''));
                $schema->addFile(new File($schema->getDirectory() . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR . $trait->stmts[1]->name . '.php', $trait, ''));
            }
        }

        return $files;
    }

    public static function build(array $options = [])
    {
        $encoders = [
            new JsonEncoder(
                new JsonEncode(),
                new JsonDecode(false)
            ),
            new YamlEncoder(
                new YamlEncode(),
                new YamlDecode(false, true, true, true)
            ),
        ];
        $normalizers = NormalizerFactory::create();
        $serializer = new Serializer($normalizers, $encoders);
        $schemaParser = new SchemaParser($serializer);
        $clientGenerator = GeneratorFactory::build($serializer);
        $naming = new Naming();
        $modelGenerator = new ModelGenerator($naming);
        $normGenerator = new NormalizerGenerator($naming, isset($options['reference']) ? $options['reference'] : false);

        return new self(
            $schemaParser,
            GuesserFactory::create($serializer, $options),
            $modelGenerator,
            $normGenerator,
            $clientGenerator
        );
    }
}
