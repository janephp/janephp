<?php

namespace Jane\Component\OpenApiCommon;

use Jane\Component\JsonSchema\Application as JsonSchemaApplication;
use Jane\Component\OpenApiCommon\Console\Command\DumpConfigCommand;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;

class Application extends JsonSchemaApplication
{
    protected function boot(): void
    {
        $configLoader = new ConfigLoader();

        $this->add(new GenerateCommand($configLoader, new SchemaLoader(), new OpenApiMatcher()));
        $this->add(new DumpConfigCommand($configLoader));
    }
}
