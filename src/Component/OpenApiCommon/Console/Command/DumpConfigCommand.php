<?php

namespace Jane\Component\OpenApiCommon\Console\Command;

use Jane\Component\JsonSchema\Console\Command\DumpConfigCommand as BaseDumpConfigCommand;
use Symfony\Component\Console\Input\InputOption;

class DumpConfigCommand extends BaseDumpConfigCommand
{
    public function configure()
    {
        $this->setName('dump-config');
        $this->setDescription('Dump Jane OpenAPI configuration for debugging purpose');
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration', '.jane-openapi');
    }
}
