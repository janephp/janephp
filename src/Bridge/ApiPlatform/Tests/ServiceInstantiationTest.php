<?php

namespace Jane\Bridge\ApiPlatform\Tests;

use Jane\Bridge\ApiPlatform\Normalizer\AutoMapperNormalizer;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServiceInstantiationTest extends WebTestCase
{
    protected function setUp(): void
    {
        static::$class = null;
        $_SERVER['KERNEL_DIR'] = __DIR__ . '/Resources/app';
        $_SERVER['KERNEL_CLASS'] = 'Bridge\ApiPlatform\App\AppKernel';

        @unlink(__DIR__ . '/Resources/var/cache/test');
    }

    public function testAutoMapper()
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        $this->assertTrue($container->has(AutoMapperNormalizer::class), sprintf('Service %s not found.', AutoMapperNormalizer::class));
        $this->assertInstanceOf(AutoMapperNormalizer::class, $normalizer = $container->get(AutoMapperNormalizer::class));
    }
}
