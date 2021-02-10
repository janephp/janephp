<?php

namespace Jane\AutoMapper\Bundle\DependencyInjection;

use Jane\AutoMapper\Bundle\Configuration\LegacyConfigurationPassDecorator;
use Jane\AutoMapper\Bundle\Configuration\MapperConfigurationInterface;
use Jane\AutoMapper\Extractor\FromSourceMappingExtractor;
use Jane\AutoMapper\Extractor\FromTargetMappingExtractor;
use Jane\AutoMapper\Loader\FileLoader;
use Jane\AutoMapper\MapperGeneratorMetadataFactory;
use Jane\AutoMapper\MapperGeneratorMetadataInterface;
use Jane\AutoMapper\Normalizer\AutoMapperNormalizer;
use Jane\AutoMapper\Transformer\TransformerFactoryInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class JaneAutoMapperExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $container->registerForAutoconfiguration(MapperGeneratorMetadataInterface::class)->addTag('jane_auto_mapper.mapper_metadata');
        $container->registerForAutoconfiguration(MapperConfigurationInterface::class)->addTag('jane_auto_mapper.mapper_configuration');

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        $container->getDefinition(MapperGeneratorMetadataFactory::class)->replaceArgument(5, $config['date_time_format']);
        $container->getDefinition(FileLoader::class)->replaceArgument(2, $config['hot_reload']);
        $container->registerForAutoconfiguration(TransformerFactoryInterface::class)->addTag('jane_auto_mapper.transformer_factory');

        foreach ($config['mappings'] as $mapping) {
            $this->createMapperConfigurationDefinition($container, $mapping);
        }

        if ($config['normalizer']) {
            $container
                ->getDefinition(AutoMapperNormalizer::class)
                ->addTag('serializer.normalizer', ['priority' => 1000])
            ;
        }

        if (null !== $config['name_converter']) {
            $container
                ->getDefinition(FromTargetMappingExtractor::class)
                ->addArgument(new Reference($config['name_converter']));

            $container
                ->getDefinition(FromSourceMappingExtractor::class)
                ->addArgument(new Reference($config['name_converter']));
        }

        $container->setParameter('automapper.cache_dir', $config['cache_dir']);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array $config, ContainerBuilder $container)
    {
        return new Configuration($container->getParameter('kernel.debug'));
    }

    private function createMapperConfigurationDefinition(ContainerBuilder $container, $config)
    {
        $serviceName = 'LegacyDecorator_' . $config['pass'];
        $definition = $container->register($serviceName, LegacyConfigurationPassDecorator::class);
        $definition->addArgument(new Reference($config['pass']));
        $definition->addArgument($config['source']);
        $definition->addArgument($config['target']);
        $definition->addTag('jane_auto_mapper.mapper_configuration');
    }
}
