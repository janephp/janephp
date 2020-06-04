<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Application as JsonSchemaApplication;
use Jane\OpenApiCommon\Console\Command\DumpConfigCommand;
use Jane\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\OpenApiCommon\Console\Loader\SchemaLoader;

class Application extends JsonSchemaApplication
{
    protected function boot(): void
    {
        $configLoader = new ConfigLoader();

        $this->add(new GenerateCommand($configLoader, new SchemaLoader(), new OpenApiMatcher()));
        $this->add(new DumpConfigCommand($configLoader));
    }
}
