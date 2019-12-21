<?php

namespace Jane\OpenApiCommon\Command;

use Jane\JsonSchema\Printer;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use Jane\OpenApi\Registry as OpenApiRegistry;
use Jane\OpenApiCommon\JaneOpenApi;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class GenerateCommand extends Command
{
    protected const REGISTRY_CLASS = Registry::class;
    protected const OPEN_API_CLASS = '';
    protected const SCHEMA_CLASS = Schema::class;

    public function configure()
    {
        $this->setName('generate');
        $this->setDescription('Generate an api client: class, normalizers and resources given a specific Json OpenApi file');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration', '.jane-openapi');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $configFile = $input->getOption('config-file');

        if (!file_exists($configFile)) {
            throw new \RuntimeException(sprintf('Config file %s does not exist', $configFile));
        }

        $options = require $configFile;

        if (!\is_array($options)) {
            throw new \RuntimeException(sprintf('Invalid config file specified or invalid return type in file %s', $configFile));
        }

        $options = $this->resolveConfiguration($options);
        $registryClass = static::REGISTRY_CLASS;
        /** @var Registry $registry */
        $registry = new $registryClass();

        if (\array_key_exists('openapi-file', $options)) {
            $registry->addSchema($this->resolveSchema($options['openapi-file'], $options));

            if ($registry instanceof OpenApiRegistry) {
                $registry->addOutputDirectory($options['directory']);
            }
        } else {
            foreach ($options['mapping'] as $schema => $schemaOptions) {
                $registry->addSchema($this->resolveSchema($schema, $schemaOptions));

                if ($registry instanceof OpenApiRegistry) {
                    $registry->addOutputDirectory($schemaOptions['directory']);
                }
            }
        }

        $janeOpenApiClass = static::OPEN_API_CLASS;
        /** @var JaneOpenApi $janeOpenApi */
        $janeOpenApi = $janeOpenApiClass::build($options);
        $fixerConfigFile = '';

        if (\array_key_exists('fixer-config-file', $options) && null !== $options['fixer-config-file']) {
            $fixerConfigFile = $options['fixer-config-file'];
        }

        $printer = new Printer(new Standard(), $fixerConfigFile);

        if (\array_key_exists('use-fixer', $options) && \is_bool($options['use-fixer'])) {
            $printer->setUseFixer($options['use-fixer']);
        }
        if (\array_key_exists('clean-generated', $options) && \is_bool($options['clean-generated'])) {
            $printer->setCleanGenerated($options['clean-generated']);
        }

        $janeOpenApi->generate($registry);
        $printer->output($registry);

        return 0;
    }

    protected function resolveConfiguration(array $options = [])
    {
        $optionsResolver = new OptionsResolver();
        $optionsResolver->setDefaults([
            'reference' => false,
            'date-format' => \DateTime::RFC3339,
            'async' => false,
            'strict' => true,
            'use-fixer' => false,
            'fixer-config-file' => null,
            'clean-generated' => true,
            'use-cacheable-supports-method' => null,
            'client' => JaneOpenApi::CLIENT_HTTPLUG,
        ]);

        if (\array_key_exists('openapi-file', $options)) {
            $optionsResolver->setRequired([
                'openapi-file',
                'namespace',
                'directory',
            ]);

            $optionsResolver->setDefault('version', 3);
        } else {
            $optionsResolver->setRequired([
                'mapping',
            ]);
        }

        $optionsResolver->setAllowedValues('client', [
            JaneOpenApi::CLIENT_PSR18,
            JaneOpenApi::CLIENT_HTTPLUG,
        ]);

        return $optionsResolver->resolve($options);
    }

    protected function resolveSchema($schema, array $options = [])
    {
        $optionsResolver = new OptionsResolver();

        // To support old schema
        $optionsResolver->setDefined([
            'openapi-file',
            'reference',
            'date-format',
            'async',
            'strict',
            'use-fixer',
            'fixer-config-file',
            'clean-generated',
            'use-cacheable-supports-method',
            'client',
        ]);

        $optionsResolver->setDefault('version', 3);

        $optionsResolver->setRequired([
            'namespace',
            'directory',
        ]);

        $options = $optionsResolver->resolve($options);
        $schemaClass = static::SCHEMA_CLASS;

        return new $schemaClass($schema, $options['namespace'], $options['directory'], '');
    }
}
