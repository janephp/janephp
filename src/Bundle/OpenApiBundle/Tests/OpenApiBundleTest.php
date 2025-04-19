<?php

namespace Jane\Bundle\OpenApiBundle\Tests;

use Jane\Bundle\OpenApiBundle\Command\OpenApiGenerateCommand;
use Jane\Bundle\OpenApiBundle\Tests\Resources\App\AppKernel;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Filesystem\Filesystem;

class OpenApiBundleTest extends KernelTestCase
{
    public static function setUpBeforeClass(): void
    {
        static::$class = null;
        $_SERVER['KERNEL_DIR'] = __DIR__ . '/Resources/App';
        $_SERVER['KERNEL_CLASS'] = AppKernel::class;

        (new Filesystem())->remove(__DIR__ . '/Resources/var/cache/test');
    }

    public function testCommandExists(): void
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        $this->assertTrue($container->has(OpenApiGenerateCommand::class));
    }
}
