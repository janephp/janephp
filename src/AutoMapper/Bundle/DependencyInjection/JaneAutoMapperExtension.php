<?php

namespace Jane\AutoMapper\Bundle\DependencyInjection;

use Jane\AutoMapper\Bundle\AutoMapper;
use Jane\AutoMapper\Bundle\Configuration\RestrictConfigurationPass;
use Jane\AutoMapper\Extractor\FromSourceMappingExtractor;
use Jane\AutoMapper\Extractor\FromTargetMappingExtractor;
use Jane\AutoMapper\MapperGeneratorMetadataFactory;
use Jane\AutoMapper\MapperGeneratorMetadataInterface;
use Jane\AutoMapper\MapperMetadata;
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

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        $container->getDefinition(MapperGeneratorMetadataFactory::class)->replaceArgument(5, $config['date_time_format']);
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

        if (null !== $config['nameConverter']) {
            $container
                ->getDefinition(FromTargetMappingExtractor::class)
                ->addArgument(new Reference($config['nameConverter']));

            $container
                ->getDefinition(FromSourceMappingExtractor::class)
                ->addArgument(new Reference($config['nameConverter']));
        }

        $container->setParameter('automapper.cache_dir', $config['cache_dir']);
    }

    private function createMapperConfigurationDefinition(ContainerBuilder $container, $config)
    {
        $serviceName = 'Mapping_' . $config['source'] . '_' . $config['target'];
        $definition = $container->register($serviceName, MapperMetadata::class);
        $definition->setFactory([new Reference(MapperGeneratorMetadataFactory::class), 'create']);
        $definition->addArgument(new Reference(AutoMapper::class));
        $definition->addArgument($config['source']);
        $definition->addArgument($config['target']);
        $definition->addTag('jane_auto_mapper.mapper_metadata');

        if (\array_key_exists('pass', $config)) {
            $restrictConfigurationPass = $container->register($serviceName . '_RestrictPass', RestrictConfigurationPass::class);
            $restrictConfigurationPass->addArgument($config['source']);
            $restrictConfigurationPass->addArgument($config['target']);
            $restrictConfigurationPass->addArgument(new Reference($config['pass']));

            $definition = $container->getDefinition(AutoMapper::class);
            $definition->addMethodCall('addConfigurationPass', [new Reference($serviceName . '_RestrictPass')]);
        }
    }
}
