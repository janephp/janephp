<?php

namespace Jane\Component\OpenApiCommon;

use Jane\Component\JsonSchema\Generator\ChainGenerator;
use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\Guesser\Guess\NonObjectGuessInterface;
use Jane\Component\JsonSchema\Guesser\Validator\ChainValidatorFactory;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\ReferenceResolver;
use Jane\Component\OpenApiCommon\Contracts\WhitelistFetchInterface;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Jane\Component\OpenApiCommon\Registry\Registry as OpenApiRegistry;
use Jane\Component\OpenApiCommon\Registry\Schema;
use Jane\Component\OpenApiCommon\SchemaParser\SchemaParser;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

abstract class JaneOpenApi extends ChainGenerator
{
    protected const OBJECT_NORMALIZER_CLASS = null;
    protected const WHITELIST_FETCH_CLASS = null;

    protected SchemaParser $schemaParser;
    protected Naming $naming;

    protected ChainValidatorFactory $chainValidatorFactory;

    /** @var array<string, mixed> */
    protected array $options = [];

    protected NormalizerInterface|DenormalizerInterface $serializer;

    /**
     * @param class-string $schemaParserClass
     */
    public function __construct(
        string $schemaParserClass,
        protected ChainGuesser $chainGuesser,
        protected bool $strict = true,
    ) {
        $this->serializer = static::buildSerializer();
        $this->schemaParser = new $schemaParserClass($this->serializer);
        $this->naming = new Naming();
    }

    public function getSerializer(): NormalizerInterface|DenormalizerInterface
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

        $chainValidator = $this->chainValidatorFactory->create($this->naming, $registry, $this->serializer);
        $checkWhitelistedPaths = \count($registry->getWhitelistedPaths()) > 0;

        foreach ($schemas as $schema) {
            /** @var array<string, \RuntimeException> Guessing failures indexed by class reference */
            $guessingFailures = [];

            foreach ($schema->getClasses() as $class) {
                if ($class instanceof NonObjectGuessInterface) {
                    continue;
                }

                try {
                    $properties = $this->chainGuesser->guessProperties($class->getObject(), $schema->getRootName(), $class->getReference(), $registry);

                    $names = [];
                    foreach ($properties as $property) {
                        $deduplicatedName = $this->naming->getDeduplicatedName($property->getName(), $names);

                        $property->setAccessorName($deduplicatedName);
                        $property->setPhpName($this->naming->getPropertyName($deduplicatedName));

                        $property->setType($this->chainGuesser->guessType($property->getObject(), $property->getName(), $property->getReference(), $registry));
                    }

                    $class->setProperties($properties);
                    $schema->addClassRelations($class);

                    $extensionsTypes = [];
                    foreach ($class->getExtensionsObject() as $pattern => $extensionData) {
                        $extensionsTypes[$pattern] = $this->chainGuesser->guessType($extensionData['object'], $class->getName(), $extensionData['reference'], $registry);
                    }
                    $class->setExtensionsType($extensionsTypes);

                    $chainValidator->guess($class->getObject(), $class->getName(), $class);
                } catch (\RuntimeException $exception) {
                    if (!$checkWhitelistedPaths) {
                        throw $exception;
                    }

                    // the class might be pruned by the whitelist filtering, so the failure is deferred until we know if it is needed
                    $guessingFailures[$class->getReference()] = $exception;
                }
            }

            $this->hydrateDiscriminatedClasses($schema, $registry);

            // when we have a whitelist, we want to have only needed models to be generated
            if ($checkWhitelistedPaths) {
                $this->whitelistFetch($schema, $registry);

                // a deferred guessing failure only matters if the class survived the whitelist filtering,
                // meaning it is needed by one of the whitelisted operations
                foreach ($guessingFailures as $reference => $exception) {
                    if (null !== $schema->getClass($reference)) {
                        throw $exception;
                    }
                }
            }
        }

        return new Context($registry, $this->strict);
    }

    /**
     * @param OpenApiRegistry $registry
     */
    protected function whitelistFetch(Schema $schema, Registry $registry): void
    {
        $whitelistFetchClass = static::WHITELIST_FETCH_CLASS;
        $naming = OperationNamingFactory::create($this->options['operation-namings'] ?? []);
        /** @var WhitelistFetchInterface $whitelistedSchema */
        $whitelistedSchema = new $whitelistFetchClass($schema, static::buildSerializer(), $naming);

        foreach ($schema->getOperations() as $operation) {
            $whitelistedSchema->addOperationRelations($operation, $registry);
        }

        $schema->filterRelations();
    }

    protected function hydrateDiscriminatedClasses(Schema $schema, Registry $registry)
    {
        foreach ($schema->getClasses() as $class) {
            if ($class instanceof ParentClass) { // is parent class
                $class->setModelNamespace($this->naming->getModelNamespace($schema->getNamespace(), $class->getSubNamespace()));

                foreach ($class->getChildReferences() as $reference) {
                    $guess = $registry->getClass($reference);
                    if ($guess instanceof ClassGuess) { // is child class
                        $guess->setParentClass($class);
                    }
                }
            }
        }
    }

    public static function buildSerializer(): SerializerInterface|DenormalizerInterface|NormalizerInterface
    {
        $encoders = [
            new JsonEncoder(new JsonEncode([JsonEncode::OPTIONS => \JSON_UNESCAPED_SLASHES]), new JsonDecode()),
            new YamlEncoder(new Dumper(), new Parser()),
        ];

        $objectNormalizerClass = static::OBJECT_NORMALIZER_CLASS;

        return new Serializer([new $objectNormalizerClass()], $encoders);
    }

    abstract protected static function create(array $options = [], ?ChainValidatorFactory $chainValidatorFactory = null): self;

    abstract protected static function generators(DenormalizerInterface $denormalizer, array $options = []): \Generator;

    public static function build(array $options = [])
    {
        ReferenceResolver::default()->applyOptions($options);

        $chainValidatorFactory = new ChainValidatorFactory(
            $options['full-date-format'] ?? 'Y-m-d',
            $options['date-format'] ?? \DateTimeInterface::RFC3339,
            $options['date-input-format'] ?? null,
        );
        foreach ($options['validators'] ?? [] as $validator) {
            $chainValidatorFactory->addValidator($validator);
        }

        $instance = static::create($options, $chainValidatorFactory);
        $instance->options = $options;
        $instance->chainValidatorFactory = $chainValidatorFactory;

        /** @var DenormalizerInterface $denormalizer */
        $denormalizer = $instance->getSerializer();
        $generators = static::generators($denormalizer, $options);

        foreach ($generators as $generator) {
            $instance->addGenerator($generator);
        }

        return $instance;
    }
}
