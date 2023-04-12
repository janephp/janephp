<?php

namespace Jane\Bundle\AutoMapperBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    private $debug;

    /**
     * @param bool $debug Whether debugging is enabled or not
     */
    public function __construct(bool $debug)
    {
        $this->debug = $debug;
    }

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('jane_auto_mapper');
        $rootNode = $treeBuilder->getRootNode($treeBuilder, 'jane_auto_mapper');

        $rootNode
            ->children()
                ->booleanNode('normalizer')->defaultFalse()->end()
                ->scalarNode('name_converter')->defaultNull()->end()
                ->scalarNode('cache_dir')->defaultValue('%kernel.cache_dir%/automapper')->end()
                ->scalarNode('date_time_format')->defaultValue(\DateTimeInterface::RFC3339)->end()
                ->booleanNode('hot_reload')->defaultValue($this->debug)->end()
                ->booleanNode('allow_readonly_target_to_populate')->defaultFalse()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
