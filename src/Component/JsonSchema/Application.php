<?php

namespace Jane\Component\JsonSchema;

use Composer\InstalledVersions;
use Jane\Component\JsonSchema\Console\Command\DumpConfigCommand;
use Jane\Component\JsonSchema\Console\Command\GenerateCommand;
use Jane\Component\JsonSchema\Console\Loader\ConfigLoader;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Command\Command;

class Application extends BaseApplication
{
    public const VERSION = '7.x-dev';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('Jane', self::resolveVersion());

        $this->boot();
    }

    final protected function boot(): void
    {
        $this->addCommands($this->getDefaultCommands());
    }

    /**
     * Called from the constructor: implementations must not depend on uninitialized instance state.
     *
     * @return list<Command>
     */
    protected function getDefaultCommands(): array
    {
        $configLoader = new ConfigLoader();

        return [
            new GenerateCommand($configLoader, new SchemaLoader()),
            new DumpConfigCommand($configLoader),
        ];
    }

    private static function resolveVersion(): string
    {
        if (!class_exists(InstalledVersions::class)) {
            return self::VERSION;
        }

        try {
            return InstalledVersions::getPrettyVersion('jane-php/jane-php')
                ?? InstalledVersions::getPrettyVersion('jane-php/json-schema')
                ?? self::VERSION;
        } catch (\Throwable) {
            return self::VERSION;
        }
    }
}
