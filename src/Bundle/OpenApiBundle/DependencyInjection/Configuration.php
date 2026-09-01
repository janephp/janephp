<?php

namespace Jane\Bundle\OpenApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('jane_open_api');

        $treeBuilder->getRootNode()
            ->info('The Jane OpenAPI bundle declares no configuration options; Jane is configured through the config file used by the generate command.')
            ->treatNullLike([])
        ;

        return $treeBuilder;
    }
}
