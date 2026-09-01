<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Jane\Bundle\OpenApiBundle\Command\OpenApiGenerateCommand;
use Jane\Component\JsonSchema\Console\Loader\ConfigLoaderInterface;
use Jane\Component\JsonSchema\Console\Loader\ConfigLocator;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoaderInterface;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;

return static function (ContainerConfigurator $container) {
    $services = $container->services()
        ->defaults()
            ->autowire()
            ->autoconfigure();

    $services->set(ConfigLocator::class)
        ->arg('$projectDir', '%kernel.project_dir%');

    $services->set(ConfigLoader::class);
    $services->alias(ConfigLoaderInterface::class, ConfigLoader::class);

    $services->set(SchemaLoader::class);
    $services->alias(SchemaLoaderInterface::class, SchemaLoader::class);

    $services->set(OpenApiMatcher::class);

    // Delegated to by OpenApiGenerateCommand; not exposed as a console command itself.
    $services->set(GenerateCommand::class)
        ->autoconfigure(false);

    $services->set(OpenApiGenerateCommand::class);
};
