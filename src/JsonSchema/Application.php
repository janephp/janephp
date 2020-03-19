<?php

namespace Jane\JsonSchema;

use Jane\JsonSchema\Command\GenerateCommand;
use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public const COMMAND_CLASS = GenerateCommand::class;
    public const VERSION = '6.x-dev';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('Jane', self::VERSION);

        $commandClass = static::COMMAND_CLASS;
        $this->add(new $commandClass());
    }
}
