<?php

namespace DummyApp;

use Jane\AutoMapper\Bundle\Configuration\ConfigurationPassInterface;
use Jane\AutoMapper\Bundle\JaneAutoMapperBundle;
use Jane\AutoMapper\MapperConfiguration;
use Jane\AutoMapper\MapperConfigurationInterface;
use Jane\AutoMapper\Tests\Domain\User;
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
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new JaneAutoMapperBundle(),
        ];

//        if (\in_array($this->getEnvironment(), array('dev', 'test'))) {
//            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
//        }

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
    public function process(MapperConfigurationInterface $configuration)
    {
        if (!$configuration instanceof MapperConfiguration) {
            return;
        }

        $configuration->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });
    }
}
