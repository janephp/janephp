<?php

namespace Jane\Bundle\JsonSchemaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('jane_json_schema');

        $treeBuilder->getRootNode()
            ->info('The Jane JSON Schema bundle declares no configuration options; Jane is configured through the config file used by the generate command.')
            ->treatNullLike([])
        ;

        return $treeBuilder;
    }
}
