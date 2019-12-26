<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Application as JsonSchemaApplication;
use Jane\OpenApiCommon\Command\GenerateCommand;

class Application extends JsonSchemaApplication
{
    public const COMMAND_CLASS = GenerateCommand::class;
}
