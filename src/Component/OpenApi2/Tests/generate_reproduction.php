<?php

namespace Jane\Component\OpenApi2\Tests;

require __DIR__ . '/../../../../vendor/autoload.php';

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Filesystem\Filesystem;

$fs = new Filesystem();
$fs->mkdir(__DIR__ . '/fixtures/all-of-schema-with-one-of-property/generated');

$command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
$input = new ArrayInput(['--config-file' => __DIR__ . '/fixtures/all-of-schema-with-one-of-property/.jane-openapi'], $command->getDefinition());
$command->execute($input, new ConsoleOutput());
