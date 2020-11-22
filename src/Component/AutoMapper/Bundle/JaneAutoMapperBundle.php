<?php

namespace Jane\Component\AutoMapper\Bundle;

use Jane\Component\AutoMapper\Bundle\DependencyInjection\Compiler\MapperConfigurationPass;
use Jane\Component\AutoMapper\Bundle\DependencyInjection\Compiler\TransformerFactoryPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JaneAutoMapperBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MapperConfigurationPass());
        $container->addCompilerPass(new TransformerFactoryPass());
    }
}
