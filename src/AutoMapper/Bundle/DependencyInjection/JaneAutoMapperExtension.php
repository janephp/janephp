<?php

namespace Jane\AutoMapper\Bundle\DependencyInjection;

use Jane\AutoMapper\AutoMapperNormalizer;
use Jane\AutoMapper\Bundle\AutoMapper;
use Jane\AutoMapper\Bundle\Configuration\RestrictConfigurationPass;
use Jane\AutoMapper\Extractor\PrivateReflectionExtractor;
use Jane\AutoMapper\MapperConfiguration;
use Jane\AutoMapper\MapperConfigurationFactory;
use Jane\AutoMapper\MapperConfigurationInterface;
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

        $container->registerForAutoconfiguration(MapperConfigurationInterface::class)->addTag('jane_auto_mapper.mapper_configuration');

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        foreach ($config['mappings'] as $mapping) {
            $this->createMapperConfigurationDefinition($container, $mapping);
        }

        if ($config['private']) {
            $container
                ->getDefinition(PrivateReflectionExtractor::class)
                ->addTag('property_info.list_extractor', ['priority' => -500])
                ->addTag('property_info.access_extractor', ['priority' => -1500])
            ;
        }

        if ($config['autoregister']) {
            $container
                ->getDefinition(AutoMapper::class)
                ->setArgument(1, new Reference(MapperConfigurationFactory::class))
            ;
        }

        if ($config['normalizer']) {
            $container
                ->getDefinition(AutoMapperNormalizer::class)
                ->addTag('serializer.normalizer', ['priority' => 1000])
            ;
        }

        $container->setParameter('automapper.cache_dir', $config['cache_dir']);
    }

    private function createMapperConfigurationDefinition(ContainerBuilder $container, $config)
    {
        $serviceName = 'Mapping_' . $config['source'] . '_' . $config['target'];
        $definition = $container->register($serviceName, MapperConfiguration::class);
        $definition->setFactory([new Reference(MapperConfigurationFactory::class), 'create']);
        $definition->addArgument($config['source']);
        $definition->addArgument($config['target']);
        $definition->addTag('jane_auto_mapper.mapper_configuration');

        if (isset($config['pass'])) {
            $restrictConfigurationPass = $container->register($serviceName . '_RestrictPass', RestrictConfigurationPass::class);
            $restrictConfigurationPass->addArgument($config['source']);
            $restrictConfigurationPass->addArgument($config['target']);
            $restrictConfigurationPass->addArgument(new Reference($config['pass']));

            $definition = $container->getDefinition(AutoMapper::class);
            $definition->addMethodCall('addConfigurationPass', [new Reference($serviceName . '_RestrictPass')]);
        }
    }
}
