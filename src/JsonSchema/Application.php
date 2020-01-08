<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Command\GenerateCommand;
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Command\Command;

class Application extends BaseApplication
{
    public const COMMAND_CLASS = GenerateCommand::class;
    public const VERSION = '5.x-dev';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('Jane', self::VERSION);

        $commandClass = static::COMMAND_CLASS;
        /** @var Command $generateCommand */
        $generateCommand = new $commandClass();
        $this->add($generateCommand);
    }
}
