<?php

namespace DummyApp;

use Jane\AutoMapper\Bundle\Configuration\ConfigurationPassInterface;
use Jane\AutoMapper\Bundle\JaneAutoMapperBundle;
use Jane\AutoMapper\MapperGeneratorMetadataInterface;
use Jane\AutoMapper\MapperMetadata;
use Jane\AutoMapper\Tests\Fixtures\User;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class AppKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        $bundles = [
            new FrameworkBundle(),
            new JaneAutoMapperBundle(),
        ];

        return $bundles;
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->add('/', 'kernel::indexAction');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config.yml');
    }

    public function indexAction()
    {
        return new Response();
    }

    public function getProjectDir()
    {
        return __DIR__ . '/..';
    }
}

class UserConfigurationPass implements ConfigurationPassInterface
{
    public function process(MapperGeneratorMetadataInterface $metadata): void
    {
        if (!$metadata instanceof MapperMetadata) {
            return;
        }

        $metadata->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });
    }
}
