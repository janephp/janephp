<?php

namespace Jane\Component\JsonSchema\Console\Command;

use Jane\Component\JsonSchema\Console\Loader\ConfigLoaderInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\VarDumper;

class DumpConfigCommand extends Command
{
    public function __construct(
        protected ConfigLoaderInterface $configLoader,
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        $this->setName('dump-config');
        $this->setDescription('Dump Jane configuration for debugging purpose');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane configuration', '.jane');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        VarDumper::dump($this->configLoader->load($input->getOption('config-file')));

        return Command::SUCCESS;
    }
}
