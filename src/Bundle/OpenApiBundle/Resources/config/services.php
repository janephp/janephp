<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Jane\Bundle\OpenApiBundle\Command\OpenApiGenerateCommand;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set(OpenApiGenerateCommand::class)
            ->tag('console.command', ['command' => 'jane:open-api:generate']);
};
