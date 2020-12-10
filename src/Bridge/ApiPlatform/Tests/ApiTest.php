<?php

namespace Jane\Bridge\ApiPlatform\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Bridge\ApiPlatform\App\Foo;
use Symfony\Component\Serializer\SerializerInterface;

class ApiTest extends ApiTestCase
{
    protected function setUp(): void
    {
        static::$class = null;
        $_SERVER['KERNEL_DIR'] = __DIR__ . '/Resources/app';
        $_SERVER['KERNEL_CLASS'] = 'Bridge\ApiPlatform\App\AppKernel';

        @unlink(__DIR__ . '/Resources/var/cache/test');
    }

    public function testApiRessource(): void
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        /** @var SerializerInterface $serializer */
        $serializer = $container->get('serializer');

        $foo = new Foo();
        $foo->id = 1;
        $foo->name = 'Bar';
        $output = $serializer->serialize($foo, 'json');
        $this->assertEquals('{"id":1,"name":"Bar"}', $output);

        $foo = '{"id":1,"name":"Bar"}';
        $object = $serializer->deserialize($foo, Foo::class, 'json');
        $this->assertInstanceOf(Foo::class, $object);
        $this->assertEquals(1, $object->id);
        $this->assertEquals('Bar', $object->name);
    }

    public function testNonApiResource(): void
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        /** @var SerializerInterface $serializer */
        $serializer = $container->get('serializer');

        $user = new Fixtures\User();
        $user->id = 1;
        $user->name = 'Gérard';
        $output = $serializer->serialize($user, 'json');
        $this->assertEquals('{"id":1,"name":"G\u00e9rard"}', $output);

        $user = '{"id":1,"name":"Gérard"}';
        $object = $serializer->deserialize($user, Fixtures\User::class, 'json');
        $this->assertInstanceOf(Fixtures\User::class, $object);
        $this->assertEquals(1, $object->id);
        $this->assertEquals('Gérard', $object->name);
    }
}
