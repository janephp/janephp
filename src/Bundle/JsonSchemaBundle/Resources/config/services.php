<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Jane\Bundle\JsonSchemaBundle\Command\JsonSchemaGenerateCommand;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set(JsonSchemaGenerateCommand::class)
            ->tag('console.command', ['command' => 'jane:json-schema:generate']);
};
