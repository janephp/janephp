<?php

namespace Jane\AutoMapper\Tests;

use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Accessor\ReflectionAccessorExtractor;
use Jane\AutoMapper\Compiler\FromSourcePropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\FromTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\SourceTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactory;
use Jane\AutoMapper\MapperConfiguration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;

class AutoMapperTest extends TestCase
{
    private $sourceTargetMappingExtractor;
    private $fromTargetMappingExtractor;
    private $fromSourceMappingExtractor;

    public function setUp()
    {
        $this->sourceTargetMappingExtractor = new SourceTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [new ReflectionExtractor()],
            [new ReflectionExtractor(), new PhpDocExtractor()],
            [new ReflectionExtractor()],
            [new ReflectionExtractor()]
        ),
            new ReflectionAccessorExtractor(),
            new TransformerFactory()
        );

        $this->fromTargetMappingExtractor = new FromTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [new ReflectionExtractor()],
            [new ReflectionExtractor(), new PhpDocExtractor()],
            [new ReflectionExtractor()],
            [new ReflectionExtractor()]
        ),
            new ReflectionAccessorExtractor(),
            new TransformerFactory()
        );

        $this->fromSourceMappingExtractor = new FromSourcePropertiesMappingExtractor(new PropertyInfoExtractor(
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
        $configurationUser = new MapperConfiguration($this->sourceTargetMappingExtractor, User::class, UserDTO::class);
        $configurationAddress = new MapperConfiguration($this->sourceTargetMappingExtractor, Address::class, AddressDTO::class);
        $configurationUser->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });

        $autoMapper = new AutoMapper();
        $autoMapper->register($configurationUser);
        $autoMapper->register($configurationAddress);

        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        /** @var UserDTO $userDto */
        $userDto = $autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertSame(1, $userDto->id);
        self::assertSame('yolo', $userDto->name);
        self::assertSame(13, $userDto->age);
        self::assertSame(((int) date('Y')) - 13, $userDto->yearOfBirth);
        self::assertNull($userDto->email);
        self::assertCount(1, $userDto->addresses);
        self::assertInstanceOf(AddressDTO::class, $userDto->address);
        self::assertInstanceOf(AddressDTO::class, $userDto->addresses[0]);
        self::assertSame('Toulon', $userDto->address->city);
        self::assertSame('Toulon', $userDto->addresses[0]->city);
    }

    public function testAutoMapperFromArray()
    {
        $configurationUser = new MapperConfiguration($this->fromTargetMappingExtractor, 'array', UserDTO::class);
        $autoMapper = new AutoMapper();
        $autoMapper->register($configurationUser);

        $user = [
            'id' => 1,
        ];

        /** @var UserDTO $userDto */
        $userDto = $autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
    }

    public function testAutoMapperToArray()
    {
        $configurationUser = new MapperConfiguration($this->fromSourceMappingExtractor, UserDTO::class, 'array');
        $autoMapper = new AutoMapper();
        $autoMapper->register($configurationUser);

        $userDto = new UserDTO();
        $userDto->id = 1;

        $user = $autoMapper->map($userDto, 'array');

        self::assertInternalType('array', $user);
        self::assertEquals(1, $user['id']);
    }

    public function testAutoMapperFromStdObject()
    {
        $configurationUser = new MapperConfiguration($this->fromTargetMappingExtractor, \stdClass::class, UserDTO::class);
        $autoMapper = new AutoMapper();
        $autoMapper->register($configurationUser);

        $user = new \stdClass();
        $user->id = 1;

        /** @var UserDTO $userDto */
        $userDto = $autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
    }

    public function testAutoMapperToStdObject()
    {
        $configurationUser = new MapperConfiguration($this->fromSourceMappingExtractor, UserDTO::class, \stdClass::class);
        $autoMapper = new AutoMapper();
        $autoMapper->register($configurationUser);

        $userDto = new UserDTO();
        $userDto->id = 1;

        $user = $autoMapper->map($userDto, \stdClass::class);

        self::assertInstanceOf(\stdClass::class, $user);
        self::assertEquals(1, $user->id);
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
     * @var int
     */
    public $age;

    /**
     * @var int
     */
    public $yearOfBirth;

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
