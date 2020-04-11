<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Application as JsonSchemaApplication;
use Jane\OpenApiCommon\Command\DumpConfigCommand;
use Jane\OpenApiCommon\Command\GenerateCommand;

class Application extends JsonSchemaApplication
{
    public const GENERATE_COMMAND = GenerateCommand::class;
    public const DUMP_CONFIG_COMMAND = DumpConfigCommand::class;
}
