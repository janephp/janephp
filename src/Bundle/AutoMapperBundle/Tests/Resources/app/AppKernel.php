<?php

namespace DummyApp;

require_once __DIR__ . '/Transformer/MoneyTransformerFactory.php';
require_once __DIR__ . '/Transformer/ArrayToMoneyTransformer.php';
require_once __DIR__ . '/Transformer/MoneyToArrayTransformer.php';
require_once __DIR__ . '/Transformer/MoneyToMoneyTransformer.php';

namespace DummyApp;

use Jane\Bundle\AutoMapperBundle\Configuration\ConfigurationPassInterface;
use Jane\Bundle\AutoMapperBundle\Configuration\MapperConfigurationInterface;
use Jane\Bundle\AutoMapperBundle\JaneAutoMapperBundle;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\UserDTO;
use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;
use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\User;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;

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

class UserMapperConfiguration implements MapperConfigurationInterface
{
    public function getSource(): string
    {
        return User::class;
    }

    public function getTarget(): string
    {
        return UserDTO::class;
    }

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

class IdNameConverter implements AdvancedNameConverterInterface
{
    public function normalize($propertyName, string $class = null, string $format = null, array $context = [])
    {
        if ('id' === $propertyName) {
            return '@id';
        }

        return $propertyName;
    }

    public function denormalize($propertyName, string $class = null, string $format = null, array $context = [])
    {
        if ('@id' === $propertyName) {
            return 'id';
        }

        return $propertyName;
    }
}
