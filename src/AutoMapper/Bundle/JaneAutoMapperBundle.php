<?php

namespace Jane\AutoMapper\Bundle;

use Jane\AutoMapper\Bundle\DependencyInjection\Compiler\MapperMetadataPass;
use Jane\AutoMapper\Bundle\DependencyInjection\Compiler\TransformerFactoryPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JaneAutoMapperBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MapperMetadataPass());
        $container->addCompilerPass(new TransformerFactoryPass());
    }
}
