<?php

namespace Jane\Bundle\AutoMapperBundle\Tests;

use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\AddressDTO;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\ClassWithPrivateProperty;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\DTOWithEnum;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\Order;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\SomeEnum;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\User;
use Jane\Bundle\AutoMapperBundle\Tests\Fixtures\UserDTO;
use Jane\Component\AutoMapper\AutoMapperInterface;
use Jane\Component\AutoMapper\MapperContext;
use Jane\Component\AutoMapper\Tests\Fixtures\ClassWithMapToContextAttribute;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Filesystem\Filesystem;

class ServiceInstantiationTest extends WebTestCase
{
    protected function setUp(): void
    {
        static::$class = null;
        $_SERVER['KERNEL_DIR'] = __DIR__ . '/Resources/app';
        $_SERVER['KERNEL_CLASS'] = 'DummyApp\AppKernel';

        (new Filesystem())->remove(__DIR__ . '/Resources/var/cache/test');
    }

    /**
     * This method needs to be the first in this test class, more details about why here: https://github.com/janephp/janephp/pull/734#discussion_r1247921885.
     *
     * @see Resources/app/config.yml
     */
    public function testWarmup(): void
    {
        static::bootKernel();

        self::assertFileExists(__DIR__ . '/Resources/var/cache/test/automapper/Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_NestedObject_array.php');
        self::assertFileExists(__DIR__ . '/Resources/var/cache/test/automapper/Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_User_array.php');
        self::assertFileExists(__DIR__ . '/Resources/var/cache/test/automapper/Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_AddressDTO_array.php');

        self::assertInstanceOf(
            \Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_NestedObject_array::class,
            new \Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_NestedObject_array()
        );
        self::assertInstanceOf(
            \Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_User_array::class,
            new \Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_User_array()
        );
        self::assertInstanceOf(
            \Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_AddressDTO_array::class,
            new \Symfony_Mapper_Jane_Bundle_AutoMapperBundle_Tests_Fixtures_AddressDTO_array()
        );
    }

    public function testAutoMapper()
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        $this->assertTrue($container->has(AutoMapperInterface::class));
        $autoMapper = $container->get(AutoMapperInterface::class);
        $this->assertInstanceOf(AutoMapperInterface::class, $autoMapper);

        $address = new AddressDTO();
        $address->city = 'Toulon';
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        /** @var UserDTO $userDto */
        $userDto = $autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertSame(1, $userDto->id);
        self::assertSame('yolo', $userDto->getName());
        self::assertSame(13, $userDto->age);
        self::assertSame(((int) date('Y')) - 13, $userDto->yearOfBirth);
        self::assertNull($userDto->email);
        self::assertInstanceOf(AddressDTO::class, $userDto->address);
        self::assertCount(1, $userDto->addresses);
        self::assertInstanceOf(AddressDTO::class, $userDto->addresses[0]);
        self::assertSame('Toulon', $userDto->address->city);
        self::assertSame('Toulon', $userDto->addresses[0]->city);

        $userArray = $autoMapper->map($user, 'array');
        self::assertIsArray($userArray);
        self::assertArrayHasKey('@id', $userArray);
        self::assertSame(1, $userArray['@id']);

        $data = [
            '@id' => 4582,
            'price' => [
                'amount' => 1000,
                'currency' => 'EUR',
            ],
        ];
        $order = $autoMapper->map($data, Order::class);

        self::assertInstanceOf(Order::class, $order);
        self::assertInstanceOf(\Money\Money::class, $order->price);
        self::assertEquals(1000, $order->price->getAmount());
        self::assertEquals('EUR', $order->price->getCurrency()->getCode());
    }

    public function testDiscriminator(): void
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        $this->assertTrue($container->has(AutoMapperInterface::class));
        $autoMapper = $container->get(AutoMapperInterface::class);
        $this->assertInstanceOf(AutoMapperInterface::class, $autoMapper);

        $data = [
            'type' => 'cat',
        ];

        $pet = $autoMapper->map($data, Fixtures\Pet::class);
        self::assertInstanceOf(Fixtures\Cat::class, $pet);
    }

    /**
     * @requires PHP 8.1
     */
    public function testItCanMapEnums(): void
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        $autoMapper = $container->get(AutoMapperInterface::class);

        $dto = new DTOWithEnum();
        $dto->enum = SomeEnum::FOO;
        self::assertSame(['enum' => 'foo'], $autoMapper->map($dto, 'array'));
    }

    /**
     * @requires PHP 8.0
     * This test validates that PropertyInfoPass is correctly applied.
     */
    public function testMapClassWithPrivateProperty(): void
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        $autoMapper = $container->get(AutoMapperInterface::class);

        self::assertEquals(
            new ClassWithPrivateProperty('bar'),
            $autoMapper->map(['foo' => 'bar'], ClassWithPrivateProperty::class)
        );
    }

    /**
     * @requires PHP 8.0
     * We need to test that the mapToContext attribute is correctly used,
     * because this behavior is dependent of the dependency injection.
     */
    public function testMapToContextAttribute(): void
    {
        static::bootKernel();
        $container = static::$kernel->getContainer();
        $autoMapper = $container->get(AutoMapperInterface::class);

        self::assertSame(
            [
                'value' => 'foo_bar_baz',
                'virtualProperty' => 'foo_bar_baz',
                'propertyWithDefaultValue' => 'foo',
            ],
            $autoMapper->map(
                new ClassWithMapToContextAttribute('bar'),
                'array',
                [MapperContext::MAP_TO_ACCESSOR_PARAMETER => ['suffix' => 'baz', 'prefix' => 'foo']]
            )
        );
    }
}
