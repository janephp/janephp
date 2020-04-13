<?php

namespace Jane\JsonSchema\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\VarDumper;

class DumpConfigCommand extends Command
{
    use ConfigLoader;

    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this->setName('dump-config');
        $this->setDescription('Dump Jane configuration for debugging purpose');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane configuration', '.jane');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        VarDumper::dump($this->loadConfig($input->getOption('config-file')));

        return 0;
    }
}
