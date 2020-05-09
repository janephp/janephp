<?php

namespace Jane\AutoMapper\Bundle\DependencyInjection\Compiler;

use Jane\AutoMapper\Bundle\AutoMapper;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MapperMetadataPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition(AutoMapper::class);
        $services = $this->findAndSortTaggedServices('jane_auto_mapper.mapper_metadata', $container);

        foreach ($services as $mapper) {
            $definition->addMethodCall('register', [$mapper]);
        }
    }
}
