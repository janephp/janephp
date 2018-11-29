<?php

namespace Jane\AutoMapper\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jane_auto_mapper');

        $rootNode
            ->children()
                ->booleanNode('private')->end()
                ->booleanNode('autoregister')->defaultTrue()->end()
                ->booleanNode('normalizer')->defaultTrue()->end()
                ->scalarNode('cache_dir')->defaultValue('%kernel.cache_dir%/automapper')->end()
                ->arrayNode('mappings')
                    ->prototype('array')
                    ->children()
                        ->scalarNode('source')->isRequired()->end()
                        ->scalarNode('target')->isRequired()->end()
                        ->scalarNode('pass')->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
