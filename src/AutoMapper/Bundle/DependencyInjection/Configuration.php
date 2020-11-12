<?php

namespace Jane\AutoMapper\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('jane_auto_mapper');
        $rootNode = $treeBuilder->getRootNode($treeBuilder, 'jane_auto_mapper');

        $rootNode
            ->children()
                ->booleanNode('normalizer')->defaultFalse()->end()
                ->scalarNode('nameConverter')->defaultNull()->end()
                ->scalarNode('cache_dir')->defaultValue('%kernel.cache_dir%/automapper')->end()
                ->scalarNode('date_time_format')->defaultValue(\DateTime::RFC3339)->end()
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
