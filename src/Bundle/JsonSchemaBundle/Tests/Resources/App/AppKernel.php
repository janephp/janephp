<?php

declare(strict_types=1);

namespace Jane\Bundle\JsonSchemaBundle\Tests\Resources\App;

use Jane\Bundle\JsonSchemaBundle\JaneJsonSchemaBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollection;

class AppKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles(): iterable
    {
        yield new FrameworkBundle();
        yield new JaneJsonSchemaBundle();
    }

    public function getProjectDir(): string
    {
        return __DIR__ . '/..';
    }

    public function loadRoutes(LoaderInterface $loader): RouteCollection
    {
        return new RouteCollection(); // we don't want any routes
    }
}
