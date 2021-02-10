<?php

namespace Jane\AutoMapper\Bundle\DependencyInjection;

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

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('jane_auto_mapper');
        $rootNode = $treeBuilder->getRootNode($treeBuilder, 'jane_auto_mapper');

        $rootNode
            ->children()
                ->booleanNode('normalizer')->defaultFalse()->end()
                ->scalarNode('name_converter')->defaultNull()->end()
                ->scalarNode('cache_dir')->defaultValue('%kernel.cache_dir%/automapper')->end()
                ->scalarNode('date_time_format')->defaultValue(\DateTime::RFC3339)->end()
                ->booleanNode('hot_reload')->defaultValue($this->debug)->end()
                ->arrayNode('mappings')
                    ->setDeprecated(
                        'jane-php/automapper',
                        '6.3',
                        'The "%node%" option is deprecated. Use the new ' . MapperConfigurationInterface::class . ' interface to automatically register your mapper configuration.'
                    )
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
