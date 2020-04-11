<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Command\DumpConfigCommand;
use Jane\JsonSchema\Command\GenerateCommand;
use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public const GENERATE_COMMAND = GenerateCommand::class;
    public const DUMP_CONFIG_COMMAND = DumpConfigCommand::class;
    public const VERSION = '6.x-dev';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('Jane', self::VERSION);

        $generateCommand = static::GENERATE_COMMAND;
        $dumpConfigCommand = static::DUMP_CONFIG_COMMAND;

        $this->add(new $generateCommand());
        $this->add(new $dumpConfigCommand());
    }
}
