<?php

namespace Jane\Component\AutoMapper\Bundle\DependencyInjection\Compiler;

use Jane\Component\AutoMapper\Transformer\ChainTransformerFactory;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TransformerFactoryPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition(ChainTransformerFactory::class);

        foreach ($this->findAndSortTaggedServices('jane_auto_mapper.transformer_factory', $container) as $factory) {
            $definition->addMethodCall('addTransformerFactory', [$factory]);
        }
    }
}
