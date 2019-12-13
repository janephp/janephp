<?php

namespace Jane\OpenApi;

use Jane\JsonSchema\Application as JsonSchemaApplication;
use Jane\OpenApi\Command\GenerateCommand;

class Application extends JsonSchemaApplication
{
    public const COMMAND_CLASS = GenerateCommand::class;
}
