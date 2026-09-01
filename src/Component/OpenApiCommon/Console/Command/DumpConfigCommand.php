<?php

namespace Jane\Component\OpenApiCommon\Console\Command;

use Jane\Component\JsonSchema\Console\Command\DumpConfigCommand as BaseDumpConfigCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputOption;

#[AsCommand(name: 'jane:open-api:dump-config', description: 'Dump Jane OpenAPI configuration for debugging purpose', aliases: ['dump-config'])]
class DumpConfigCommand extends BaseDumpConfigCommand
{
    public function configure(): void
    {
        $this->addOption('config-file', 'c', InputOption::VALUE_REQUIRED, 'File to use for Jane OpenAPI configuration', '.jane-openapi');
    }
}
