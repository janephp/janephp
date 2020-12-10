<?php

namespace Bridge\ApiPlatform\App;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Bridge\Symfony\Bundle\ApiPlatformBundle;
use Jane\Bridge\ApiPlatform\Normalizer\AutoMapperNormalizer as ApiPlatformNormalizer;
use Jane\Bundle\AutoMapperBundle\JaneAutoMapperBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\Serializer\Annotation\Groups;

class AppKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new ApiPlatformBundle(),
            new JaneAutoMapperBundle(),
            new TwigBundle(),
        ];
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->add('/', 'kernel::indexAction');
        $routes->import(__DIR__ . '/routes.yaml');
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

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new TestPass());
    }
}

class TestPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $container->getDefinition(ApiPlatformNormalizer::class)->setPublic(true);
        $container->getDefinition('serializer')->setPublic(true);
    }
}

final class Foo
{
    /**
     * @var int
     * @ApiProperty(identifier=true)
     * @Groups({"foo:read", "foo:write"})
     */
    public $id;

    /**
     * @Groups({"foo:read", "foo:write"})
     */
    public $name;
}
