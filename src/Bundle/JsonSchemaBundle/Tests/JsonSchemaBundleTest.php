<?php

namespace Jane\Bundle\JsonSchemaBundle\Tests;

use Jane\Bundle\JsonSchemaBundle\Command\JsonSchemaGenerateCommand;
use Jane\Bundle\JsonSchemaBundle\Tests\Resources\App\AppKernel;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Filesystem\Filesystem;

class JsonSchemaBundleTest extends KernelTestCase
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
        $this->assertTrue($container->has(JsonSchemaGenerateCommand::class));
    }
}
