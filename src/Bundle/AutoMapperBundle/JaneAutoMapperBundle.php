<?php

namespace Jane\Bundle\AutoMapperBundle;

use Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler\ApiPlatformPass;
use Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler\MapperConfigurationPass;
use Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler\PropertyInfoPass;
use Jane\Bundle\AutoMapperBundle\DependencyInjection\Compiler\TransformerFactoryPass;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JaneAutoMapperBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MapperConfigurationPass());
        $container->addCompilerPass(new TransformerFactoryPass());
        $container->addCompilerPass(new PropertyInfoPass());
        $container->addCompilerPass(new ApiPlatformPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 100);
    }
}
