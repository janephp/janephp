<?php

namespace Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler;

use Jane\Bridge\ApiPlatform\Normalizer\AutoMapperNormalizer as ApiPlatformNormalizer;
use Jane\Component\AutoMapper\Normalizer\AutoMapperNormalizer;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ApiPlatformPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->has('api_platform.resource_class_resolver') && class_exists(ApiPlatformNormalizer::class)) {
            $container
                ->register(ApiPlatformNormalizer::class, ApiPlatformNormalizer::class)
                ->addArgument($container->getDefinition(AutoMapperNormalizer::class))
                ->addArgument($container->getDefinition('api_platform.resource_class_resolver'))
                ->addTag('serializer.normalizer', ['priority' => 1000])
            ;

            $container
                ->getDefinition(AutoMapperNormalizer::class)
                ->clearTag('serializer.normalizer')
            ;
        }
    }
}
