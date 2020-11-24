<?php

namespace Jane\Bundle\AutoMapperBundle;

use Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler\MapperConfigurationPass;
use Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler\TransformerFactoryPass;
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
