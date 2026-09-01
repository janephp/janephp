<?php

namespace Jane\Component\OpenApiCommon\Console\Command;

use Jane\Component\JsonSchema\Console\Command\GenerateCommand as BaseGenerateCommand;
use Jane\Component\JsonSchema\Console\Loader\ConfigLoaderInterface;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoaderInterface;
use Jane\Component\JsonSchema\Printer;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\JaneOpenApi;
use Jane\Component\OpenApiCommon\Registry\Registry;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'jane:open-api:generate', description: 'Generate an api client: class, normalizers and resources given a specific Json OpenApi file', aliases: ['generate'])]
class GenerateCommand extends BaseGenerateCommand
{
    private OpenApiMatcher $matcher;

    public function __construct(ConfigLoaderInterface $configLoader, SchemaLoaderInterface $schemaLoader, OpenApiMatcher $matcher)
    {
        parent::__construct($configLoader, $schemaLoader);
        $this->matcher = $matcher;
    }

    public function configure(): void
    {
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration', '.jane-openapi');
    }

    protected function executeGeneration(InputInterface $input, OutputInterface $output): int
    {
        $options = $this->configLoader->load($this->configFileOption($input));
        $registries = $this->registries($options);

        /** @var Registry $registry */
        foreach ($registries as $registry) {
            $openApiClass = $registry->getOpenApiClass();
            /** @var JaneOpenApi $janeOpenApi */
            $janeOpenApi = $openApiClass::build($options);
            $fixerConfigFile = '';

            if (\array_key_exists('fixer-config-file', $options) && null !== $options['fixer-config-file']) {
                $fixerConfigFile = $options['fixer-config-file'];
            }

            $printer = new Printer(new Standard(['shortArraySyntax' => true]), $fixerConfigFile);

            if (\array_key_exists('use-fixer', $options) && \is_bool($options['use-fixer'])) {
                $printer->setUseFixer($options['use-fixer']);
            }
            if (\array_key_exists('clean-generated', $options) && \is_bool($options['clean-generated'])) {
                $printer->setCleanGenerated($options['clean-generated']);
            }

            $janeOpenApi->generate($registry);
            $printer->output($registry);
        }

        return Command::SUCCESS;
    }

    protected function newRegistry(string $schemaFile, array $options): Registry
    {
        $registry = new Registry();
        $registry->setOpenApiClass($this->matcher->match($schemaFile));
        $registry->setWhitelistedPaths($options['whitelisted-paths'] ?? []);
        $registry->setThrowUnexpectedStatusCode($options['throw-unexpected-status-code'] ?? false);
        $registry->setGenerateErrorExceptions($options['generate-error-exceptions'] ?? true);

        $customQueryResolver = [];
        foreach ($options['custom-query-resolver'] ?? [] as $path => $methods) {
            if (!\array_key_exists($path, $customQueryResolver)) {
                $customQueryResolver[$path] = [];
            }

            foreach ($methods as $method => $parameters) {
                $method = mb_strtolower($method);
                if (!\array_key_exists($method, $customQueryResolver[$path])) {
                    $customQueryResolver[$path][$method] = [];
                }

                if ('__type' === $path) {
                    // here, variables has a different meaning:
                    // - path => '__type', meta-key to handle all types of ...
                    // - method => will contains the type of the query parameter where to apply this normalizer
                    // - parameters => will contains the class to apply
                    $customQueryResolver['__type'][$method] = $this->formatClassName($parameters);
                    continue;
                }

                foreach ($parameters as $name => $class) {
                    if (!\array_key_exists($name, $customQueryResolver[$path][$method])) {
                        $customQueryResolver[$path][$method][$name] = [];
                    }

                    $customQueryResolver[$path][$method][$name] = $this->formatClassName($class);
                }
            }
        }
        $registry->setCustomQueryResolver($customQueryResolver);

        return $registry;
    }

    private function formatClassName(string $class): string
    {
        if ('\\' === $class[0]) {
            return $class;
        }

        return '\\' . $class;
    }
}
