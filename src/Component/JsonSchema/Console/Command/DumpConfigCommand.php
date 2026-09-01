<?php

namespace Jane\Component\JsonSchema\Console\Command;

use Jane\Component\JsonSchema\Console\Loader\ConfigLoaderInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\VarDumper;

#[AsCommand(name: 'dump-config', description: 'Dump Jane configuration for debugging purpose')]
class DumpConfigCommand extends Command
{
    public function __construct(
        protected ConfigLoaderInterface $configLoader,
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane configuration', '.jane');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        VarDumper::dump($this->configLoader->load($this->configFileOption($input)));

        return Command::SUCCESS;
    }

    private function configFileOption(InputInterface $input): string
    {
        $configFile = $input->getOption('config-file');

        if (!\is_string($configFile) || '' === $configFile) {
            throw new InvalidArgumentException('The "--config-file" option must be a non-empty file path.');
        }

        return $configFile;
    }
}
