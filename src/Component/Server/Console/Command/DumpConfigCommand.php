<?php

namespace Jane\Component\Server\Console\Command;

use Jane\Component\Server\Console\Loader\ConfigLoaderInterface;
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
        $this
            ->setName('dump-config')
            ->setDescription('Dump Jane Server configuration for debugging purpose')
            ->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane Server configuration', '.jane-server');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        VarDumper::dump($this->configLoader->load($input->getOption('config-file')));

        return Command::SUCCESS;
    }
}
