<?php

namespace Jane\AutoMapper\Tests;

use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Accessor\ReflectionAccessorExtractor;
use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactory;
use Jane\AutoMapper\MapperConfiguration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;

class AutoMapperTest extends TestCase
{
    private $compiler;

    public function setUp()
    {
        $this->compiler = new Compiler(new PropertyInfoExtractor(
            [new ReflectionExtractor()],
            [new ReflectionExtractor(), new PhpDocExtractor()],
            [new ReflectionExtractor()],
            [new ReflectionExtractor()]
        ),
            new ReflectionAccessorExtractor(),
            new TransformerFactory()
        );
    }

    public function testAutoMapping()
    {
        $configurationUser = new MapperConfiguration($this->compiler, User::class, UserDTO::class);
        $configurationAddress = new MapperConfiguration($this->compiler, Address::class, AddressDTO::class);

        $automapper = new AutoMapper();
        $automapper->register($configurationUser);
        $automapper->register($configurationAddress);

        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        /** @var UserDTO $userDto */
        $userDto = $automapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
        self::assertEquals('yolo', $userDto->name);
        self::assertEquals('13', $userDto->age);
        self::assertNull($userDto->email);
        self::assertCount(1, $userDto->addresses);
        self::assertInstanceOf(AddressDTO::class, $userDto->address);
        self::assertInstanceOf(AddressDTO::class, $userDto->addresses[0]);
        self::assertEquals('Toulon', $userDto->address->city);
        self::assertEquals('Toulon', $userDto->addresses[0]->city);
    }
}

class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string|int
     */
    public $age;
    /**
     * @var string
     */
    private $email;

    /**
     * @var Address
     */
    public $address;

    /**
     * @var Address[]
     */
    public $addresses = [];

    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->email = 'test';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

class Address
{
    /**
     * @var string|null
     */
    private $city;

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }
}

class UserDTO
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string|int
     */
    public $age;
    /**
     * @var string
     */
    public $email;

    /**
     * @var AddressDTO
     */
    public $address;

    /**
     * @var AddressDTO[]
     */
    public $addresses = [];
}

class AddressDTO
{
    /**
     * @var string|null
     */
    public $city;
}
