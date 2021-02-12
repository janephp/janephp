<?php

namespace Jane\Bundle\AutoMapperBundle\DependencyInjection;

use Jane\Bundle\AutoMapperBundle\Configuration\MapperConfigurationInterface;
use Jane\Component\AutoMapper\Extractor\FromSourceMappingExtractor;
use Jane\Component\AutoMapper\Extractor\FromTargetMappingExtractor;
use Jane\Component\AutoMapper\Loader\FileLoader;
use Jane\Component\AutoMapper\MapperGeneratorMetadataFactory;
use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;
use Jane\Component\AutoMapper\Normalizer\AutoMapperNormalizer;
use Jane\Component\AutoMapper\Transformer\SymfonyUidTransformerFactory;
use Jane\Component\AutoMapper\Transformer\TransformerFactoryInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Uid\AbstractUid;

class JaneAutoMapperExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array $config, ContainerBuilder $container)
    {
        return new Configuration($container->getParameter('kernel.debug'));
    }

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

        if (class_exists(AbstractUid::class)) {
            $container
                ->getDefinition(SymfonyUidTransformerFactory::class)
                ->addTag('jane_auto_mapper.transformer_factory', ['priority' => '-1004']);
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
}
