<?php

namespace Jane\Component\JsonSchema\Console\Command;

use Jane\Component\JsonSchema\Console\Loader\ConfigLoaderInterface;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoaderInterface;
use Jane\Component\JsonSchema\Jane;
use Jane\Component\JsonSchema\Printer;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\RegistryInterface;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    public function __construct(
        protected ConfigLoaderInterface $configLoader,
        protected SchemaLoaderInterface $schemaLoader,
    ) {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function configure(): void
    {
        $this->setName('generate');
        $this->setDescription('Generate a set of class and normalizers given a specific Json Schema file');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane configuration', '.jane');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $options = $this->configLoader->load($input->getOption('config-file'));
        $registries = $this->registries($options);

        foreach ($registries as $registry) {
            $jane = Jane::build($options);
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

            $jane->generate($registry);
            $printer->output($registry);
        }

        return 0;
    }

    protected function registries(array $options): array
    {
        $registries = [];
        if (\array_key_exists($fileKey = $this->configLoader->fileKey(), $options)) {
            $localRegistry = $this->newRegistry($options[$fileKey], $options);
            $localRegistry->addSchema($this->schemaLoader->resolve($options[$fileKey], $options));
            $localRegistry->addOutputDirectory($options['directory']);

            $registries[] = $localRegistry;
        } else {
            foreach ($options['mapping'] as $schema => $schemaOptions) {
                $mappedSchema = $this->schemaLoader->resolve($schema, $schemaOptions);
                $mappedRegistry = $this->newRegistry($schema, $schemaOptions);

                if (!\array_key_exists($hash = $mappedRegistry->getOptionsHash(), $registries)) {
                    $registries[$hash] = $mappedRegistry;
                }

                $registries[$hash]->addSchema($mappedSchema);
                $registries[$hash]->addOutputDirectory($schemaOptions['directory']);
            }
        }

        return $registries;
    }

    protected function newRegistry(string $schemaFile, array $options): Registry
    {
        return new Registry();
    }
}
