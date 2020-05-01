<?php

namespace Jane\OpenApiCommon\Console\Command;

use Jane\JsonSchema\Console\Command\GenerateCommand as BaseGenerateCommand;
use Jane\JsonSchema\Console\Loader\ConfigLoaderInterface;
use Jane\JsonSchema\Console\Loader\SchemaLoaderInterface;
use Jane\JsonSchema\Printer;
use Jane\JsonSchema\Registry\RegistryInterface;
use Jane\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\OpenApiCommon\JaneOpenApi;
use Jane\OpenApiCommon\Registry\Registry;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends BaseGenerateCommand
{
    /** @var OpenApiMatcher */
    private $matcher;

    public function __construct(ConfigLoaderInterface $configLoader, SchemaLoaderInterface $schemaLoader, OpenApiMatcher $matcher)
    {
        parent::__construct($configLoader, $schemaLoader);
        $this->matcher = $matcher;
    }

    public function configure()
    {
        $this->setName('generate');
        $this->setDescription('Generate an api client: class, normalizers and resources given a specific Json OpenApi file');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration', '.jane-openapi');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $options = $this->configLoader->load($input->getOption('config-file'));
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

    protected function newRegistry(string $schemaFile, array $options): RegistryInterface
    {
        $registry = new Registry();
        $registry->setOpenApiClass($this->matcher->match($schemaFile));
        $registry->setWhitelistedPaths($options['whitelisted-paths'] ?? []);

        return $registry;
    }
}
