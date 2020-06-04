<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Console\Command\DumpConfigCommand;
use Jane\JsonSchema\Console\Command\GenerateCommand;
use Jane\JsonSchema\Console\Loader\ConfigLoader;
use Jane\JsonSchema\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public const VERSION = '6.x-dev';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('Jane', self::VERSION);

        $this->boot();
    }

    protected function boot(): void
    {
        $configLoader = new ConfigLoader();

        $this->add(new GenerateCommand($configLoader, new SchemaLoader()));
        $this->add(new DumpConfigCommand($configLoader));
    }
}
