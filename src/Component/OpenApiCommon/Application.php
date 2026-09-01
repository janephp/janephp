<?php

namespace Jane\Component\OpenApiCommon;

use Jane\Component\JsonSchema\Application as JsonSchemaApplication;
use Jane\Component\OpenApiCommon\Console\Command\DumpConfigCommand;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Command\Command;

class Application extends JsonSchemaApplication
{
    /**
     * @return list<Command>
     */
    protected function getDefaultCommands(): array
    {
        $configLoader = new ConfigLoader();

        return [
            new GenerateCommand($configLoader, new SchemaLoader(), new OpenApiMatcher()),
            new DumpConfigCommand($configLoader),
        ];
    }
}
