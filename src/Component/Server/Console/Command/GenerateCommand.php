<?php

namespace Jane\Component\Server\Console\Command;

use Jane\Component\Server\Printer;
use Jane\Component\Server\Console\Loader\ConfigLoaderInterface;
use Jane\Component\Server\Console\Loader\ServerLoaderInterface;
use Jane\Component\Server\JaneServer;
use Jane\Component\Server\Registry\Registry;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    public function __construct(
        protected ConfigLoaderInterface $configLoader,
        protected ServerLoaderInterface $serverLoader,
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        $this->setName('generate');
        $this->setDescription('Generate a set of endpoints given a specific Json Server file');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane Server configuration', '.jane-server');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $options = $this->configLoader->load($input->getOption('config-file'));
        $registries = $this->registries($options);

        foreach ($registries as $registry) {
            $jane = JaneServer::build($options);
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

        return Command::SUCCESS;
    }

    protected function registries(array $options): array
    {
        $registries = [];
        if (\array_key_exists($fileKey = $this->configLoader->fileKey(), $options)) {
            $localRegistry = new Registry();
            $localRegistry->addServer($this->serverLoader->resolve($options[$fileKey], $options));
            $localRegistry->outputDirectories[] = $options['directory'];

            $registries[] = $localRegistry;
        } else {
            foreach ($options['mapping'] as $schema => $serverOptions) {
                $mappedSchema = $this->serverLoader->resolve($schema, $serverOptions);
                $mappedRegistry = new Registry();

                if (!\array_key_exists($mappedRegistryHash = $mappedRegistry->getOptionsHash(), $registries)) {
                    $registries[$mappedRegistryHash] = $mappedRegistry;
                }

                $registries[$mappedRegistryHash]->addServer($mappedSchema);
                $registries[$mappedRegistryHash]->outputDirectories[] = $serverOptions['directory'];
            }
        }

        return $registries;
    }
}
