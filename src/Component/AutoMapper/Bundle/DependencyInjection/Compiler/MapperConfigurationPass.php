<?php

namespace Jane\Component\AutoMapper\Bundle\DependencyInjection\Compiler;

use Jane\Component\AutoMapper\Bundle\AutoMapper;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MapperConfigurationPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    public function process(ContainerBuilder $container)
    {
        $autoMapper = $container->getDefinition(AutoMapper::class);

        foreach ($this->findAndSortTaggedServices('jane_auto_mapper.mapper_configuration', $container) as $mapperConfiguration) {
            $autoMapper->addMethodCall('addMapperConfiguration', [$mapperConfiguration]);
        }
    }
}
