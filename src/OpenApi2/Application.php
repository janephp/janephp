<?php

namespace Jane\OpenApi2;

use Jane\JsonSchema\Application as JsonSchemaApplication;
use Jane\OpenApi2\Command\GenerateCommand;

class Application extends JsonSchemaApplication
{
    public const COMMAND_CLASS = GenerateCommand::class;
}
