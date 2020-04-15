<?php

namespace Jane\OpenApiCommon\Command;

use Jane\JsonSchema\Printer;
use Jane\OpenApiCommon\Exception\CouldNotParseException;
use Jane\OpenApiCommon\Exception\OpenApiVersionSupportException;
use Jane\OpenApiCommon\JaneOpenApi;
use Jane\OpenApiCommon\Registry;
use Jane\OpenApiCommon\Schema;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GenerateCommand extends Command
{
    use ConfigLoader;

    private static $schemaParsers = [];

    public function configure()
    {
        $this->setName('generate');
        $this->setDescription('Generate an api client: class, normalizers and resources given a specific Json OpenApi file');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration', '.jane-openapi');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $this->loadConfig($input->getOption('config-file'));
        $registries = [];

        if (\array_key_exists('openapi-file', $options)) {
            $localRegistry = new Registry();
            $localRegistry->addSchema($this->resolveSchema($options['openapi-file'], $options));
            $localRegistry->addOutputDirectory($options['directory']);
            $localRegistry->setWhitelistedPaths($options['whitelisted-paths']);

            $openApiClass = $this->matchOpenApiClass($localRegistry);

            $registries[$openApiClass] = $localRegistry;
        } else {
            foreach ($options['mapping'] as $schema => $schemaOptions) {
                $localRegistry = new Registry();
                $localRegistry->addSchema($localSchema = $this->resolveSchema($schema, $schemaOptions));
                $localRegistry->addOutputDirectory($localDirectory = $schemaOptions['directory']);
                $localRegistry->setWhitelistedPaths($options['whitelisted-paths']);

                $openApiClass = $this->matchOpenApiClass($localRegistry);
                if (!\array_key_exists($openApiClass, $registries)) {
                    $registries[$openApiClass] = new Registry();
                }

                $registries[$openApiClass]->addSchema($localSchema);
                $registries[$openApiClass]->addOutputDirectory($localDirectory);
            }
        }

        foreach ($registries as $openApiClass => $registry) {
            /** @var JaneOpenApi $janeOpenApi */
            $janeOpenApi = $openApiClass::build($options);
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
        }

        return 0;
    }

    protected function resolveSchema($schema, array $options = [])
    {
        $optionsResolver = new OptionsResolver();

        // To support old schema
        $optionsResolver->setDefined([
            'openapi-file',
            'reference',
            'date-format',
            'full-date-format',
            'date-prefer-interface',
            'date-input-format',
            'strict',
            'use-fixer',
            'fixer-config-file',
            'clean-generated',
            'use-cacheable-supports-method',
            'skip-null-values',
            'whitelisted-paths',
        ]);

        $optionsResolver->setDefault('version', 3);

        $optionsResolver->setRequired([
            'namespace',
            'directory',
        ]);

        $options = $optionsResolver->resolve($options);

        return new Schema($schema, $options['namespace'], $options['directory'], '');
    }

    private function matchOpenApiClass(Registry $registry): string
    {
        $firstSchema = $registry->getFirstSchema();
        $openApiClass = null;
        $openApi2ExceptionMessage = null;
        $openApi3ExceptionMessage = null;

        if (class_exists(\Jane\OpenApi2\JaneOpenApi::class)) {
            if (!\array_key_exists(\Jane\OpenApi2\JaneOpenApi::class, self::$schemaParsers)) {
                $openApi2Serializer = \Jane\OpenApi2\JaneOpenApi::buildSerializer();
                self::$schemaParsers[\Jane\OpenApi2\JaneOpenApi::class] = new \Jane\OpenApi2\SchemaParser\SchemaParser($openApi2Serializer);
            }

            try {
                self::$schemaParsers[\Jane\OpenApi2\JaneOpenApi::class]->parseSchema($firstSchema->getOrigin());
                $openApiClass = \Jane\OpenApi2\JaneOpenApi::class;
            } catch (CouldNotParseException $e) {
                $openApi2ExceptionMessage = $e->getMessage();
            } catch (OpenApiVersionSupportException $e) {
                // We don't need this exception, we will trigger another one if needed ~
            }
        }
        if (null === $openApiClass && class_exists(\Jane\OpenApi3\JaneOpenApi::class)) {
            if (!\array_key_exists(\Jane\OpenApi3\JaneOpenApi::class, self::$schemaParsers)) {
                $openApi3Serializer = \Jane\OpenApi3\JaneOpenApi::buildSerializer();
                self::$schemaParsers[\Jane\OpenApi3\JaneOpenApi::class] = new \Jane\OpenApi3\SchemaParser\SchemaParser($openApi3Serializer);
            }

            try {
                self::$schemaParsers[\Jane\OpenApi3\JaneOpenApi::class]->parseSchema($firstSchema->getOrigin());
                $openApiClass = \Jane\OpenApi3\JaneOpenApi::class;
            } catch (CouldNotParseException $e) {
                $openApi3ExceptionMessage = $e->getMessage();
            } catch (OpenApiVersionSupportException $e) {
                // We don't need this exception, we will trigger another one if needed ~
            }
        }

        if (null === $openApiClass) {
            if (null !== $openApi2ExceptionMessage || null !== $openApi3ExceptionMessage) {
                throw new CouldNotParseException(sprintf(
                    "Could not parse schema in OpenApi v2 nor v3 format:\n- OpenApi v2 error: \"%s\"\n- OpenApi v3: \"%s\"\n",
                    (string) $openApi2ExceptionMessage,
                    (string) $openApi3ExceptionMessage
                ));
            } else {
                throw new OpenApiVersionSupportException('Only OpenApi v2 / v3 specifications are supported, use an external tool to convert your api files.');
            }
        }

        return $openApiClass;
    }
}
