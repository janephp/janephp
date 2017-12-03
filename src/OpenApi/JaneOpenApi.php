<?php

namespace Jane\OpenApi;

use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlDecode;
use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlEncode;
use Fitbug\SymfonySerializer\YamlEncoderDecoder\YamlEncoder;
use Jane\Encoder\RawEncoder;
use Jane\Generator\Context\Context;
use Jane\Generator\File;
use Jane\Generator\ModelGenerator;
use Jane\Generator\Naming;
use Jane\Generator\NormalizerGenerator;
use Jane\Guesser\ChainGuesser;
use Jane\OpenApi\Generator\ClientGenerator;
use Jane\OpenApi\Generator\GeneratorFactory;
use Jane\OpenApi\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi\Model\OpenApi;
use Jane\OpenApi\Normalizer\NormalizerFactory;
use Jane\OpenApi\SchemaParser\SchemaParser;
use Jane\Registry;
use Jane\Schema;
use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Console\ConfigurationResolver;
use PhpCsFixer\Differ\NullDiffer;
use PhpCsFixer\Error\ErrorsManager;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Runner;
use PhpCsFixer\ToolInfo;
use PhpParser\PrettyPrinter\Standard as StandardPrettyPrinter;
use PhpParser\PrettyPrinterAbstract;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use PhpCsFixer\Cache\NullCacheManager;
use PhpCsFixer\Linter\Linter;

class JaneOpenApi
{
    const VERSION = '1.0.x';

    /**
     * @var SchemaParser
     */
    private $schemaParser;
    /**
     * @var Generator\ClientGenerator
     */
    private $clientGenerator;

    /**
     * @var \PhpParser\PrettyPrinterAbstract
     */
    private $prettyPrinter;

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
     * @var ConfigInterface
     */
    private $fixerConfig;

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
        ClientGenerator $clientGenerator,
        PrettyPrinterAbstract $prettyPrinter,
        ConfigInterface $fixerConfig = null
    ) {
        $this->schemaParser        = $schemaParser;
        $this->clientGenerator     = $clientGenerator;
        $this->prettyPrinter       = $prettyPrinter;
        $this->modelGenerator      = $modelGenerator;
        $this->normalizerGenerator = $normalizerGenerator;
        $this->chainGuesser        = $chainGuesser;
        $this->fixer               = $fixerConfig;
    }

    /**
     * Return a list of class guessed
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
     * Generate a list of files
     *
     * @param Registry $registry A registry
     *
     * @return File[]
     */
    public function generate(Registry $registry)
    {
        /** @var OpenApi $openApi */
        $context = $this->createContext($registry);

        $files   = [];

        foreach ($registry->getSchemas() as $schema) {
            $context->setCurrentSchema($schema);

            $files = array_merge($files, $this->modelGenerator->generate($schema, $schema->getRootName(), $context));
            $files = array_merge($files, $this->normalizerGenerator->generate($schema, $schema->getRootName(), $context));
            $clients = $this->clientGenerator->generate($schema->getParsed(), $schema->getNamespace(), $context, $schema->getOrigin() . '#');

            foreach ($clients as $node) {
                $class = $node['class'];
                $trait = $node['trait'];

                $files[] = new File($schema->getDirectory() . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR . $class->stmts[1]->name . '.php', $class, '');
                $files[] = new File($schema->getDirectory() . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR . $trait->stmts[1]->name . '.php', $trait, '');
            }
        }

        return $files;
    }

    /**
     * Print files
     *
     * @param File[] $files
     * @param Registry $registry
     */
    public function printFiles($files, $registry)
    {
        foreach ($files as $file) {
            if (!file_exists(dirname($file->getFilename()))) {
                mkdir(dirname($file->getFilename()), 0755, true);
            }

            file_put_contents($file->getFilename(), $this->prettyPrinter->prettyPrintFile([$file->getNode()]));
        }

        foreach ($registry->getSchemas() as $schema) {
            $this->fix($schema->getDirectory());
        }
    }

    /**
     * Use php cs fixer to have a nice formatting of generated files
     *
     * @param string $directory
     *
     * @return array|void
     */
    protected function fix($directory)
    {
        if (!class_exists('PhpCsFixer\Config')) {
            return;
        }

        /** @var Config $fixerConfig */
        $fixerConfig = $this->fixerConfig;

        if (null === $fixerConfig) {
            $fixerConfig = Config::create()
                ->setRiskyAllowed(true)
                ->setRules(
                    array(
                        '@Symfony' => true,
                        'array_syntax' => array('syntax' => 'short'),
                        'simplified_null_return' => false,
                        'ordered_imports' => true,
                        'phpdoc_order' => true,
                        'binary_operator_spaces' => array('align_equals'=>true),
                        'concat_space' => false,
                        'yoda_style' => false,
                        'header_comment' => [
                            'header' => <<<EOH
This file has been auto generated by Jane,

Do no edit it directly.
EOH
                            ,
                        ]
                    )
                );
        }
        $resolverOptions = array('allow-risky' => true);
        $resolver = new ConfigurationResolver($fixerConfig, $resolverOptions, $directory, new ToolInfo());

        $finder = new Finder();
        $finder->in($directory);
        $fixerConfig->setFinder($finder);

        $runner = new Runner(
            $resolver->getConfig()->getFinder(),
            $resolver->getFixers(),
            new NullDiffer(),
            null,
            new ErrorsManager(),
            new Linter(),
            false,
            new NullCacheManager()
        );

        return $runner->fix();
    }

    public static function build(array $options = [])
    {
        $encoders        = [
            new JsonEncoder(
                new JsonEncode(),
                new JsonDecode(false)
            ),
            new YamlEncoder(
                new YamlEncode(),
                new YamlDecode(false, true, true, true)
            ),
        ];
        $normalizers     = NormalizerFactory::create();
        $serializer      = new Serializer($normalizers, $encoders);
        $schemaParser    = new SchemaParser($serializer);
        $clientGenerator = GeneratorFactory::build($serializer);
        $prettyPrinter   = new StandardPrettyPrinter();
        $naming          = new Naming();
        $modelGenerator  = new ModelGenerator($naming);
        $normGenerator   = new NormalizerGenerator($naming, isset($options['reference']) ? $options['reference'] : false);

        return new self(
            $schemaParser,
            GuesserFactory::create($serializer, $options),
            $modelGenerator,
            $normGenerator,
            $clientGenerator,
            $prettyPrinter
        );
    }
}
