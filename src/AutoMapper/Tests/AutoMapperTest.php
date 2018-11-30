<?php

namespace Jane\AutoMapper\Tests;

use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Compiler\FileLoader;
use Jane\AutoMapper\Context;
use Jane\AutoMapper\Exception\CircularReferenceException;
use Jane\AutoMapper\Tests\Domain\Address;
use Jane\AutoMapper\Tests\Domain\AddressDTO;
use Jane\AutoMapper\Tests\Domain\Foo;
use Jane\AutoMapper\Tests\Domain\FooMaxDepth;
use Jane\AutoMapper\Tests\Domain\Node;
use Jane\AutoMapper\Tests\Domain\PrivateUser;
use Jane\AutoMapper\Tests\Domain\PrivateUserDTO;
use Jane\AutoMapper\Tests\Domain\User;
use Jane\AutoMapper\Tests\Domain\UserConstructorDTO;
use Jane\AutoMapper\Tests\Domain\UserDTO;
use Jane\AutoMapper\Tests\Domain\UserDTONoAge;
use Jane\AutoMapper\Tests\Domain\UserDTONoName;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;

class AutoMapperTest extends TestCase
{
    /** @var AutoMapper */
    private $autoMapper;

    public function setUp()
    {
        @unlink(__DIR__ . '/cache/registry.php');
        $loader = new FileLoader(new Compiler(), __DIR__ . '/cache');

        $this->autoMapper = AutoMapper::create(true, $loader);
    }

    public function testAutoMapping()
    {
        $configurationUser = $this->autoMapper->getConfiguration(User::class, UserDTO::class);
        $configurationUser->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });

        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        /** @var UserDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertSame(1, $userDto->id);
        self::assertSame('yolo', $userDto->name);
        self::assertSame(13, $userDto->age);
        self::assertSame(((int) date('Y')) - 13, $userDto->yearOfBirth);
        self::assertCount(1, $userDto->addresses);
        self::assertInstanceOf(AddressDTO::class, $userDto->address);
        self::assertInstanceOf(AddressDTO::class, $userDto->addresses[0]);
        self::assertSame('Toulon', $userDto->address->city);
        self::assertSame('Toulon', $userDto->addresses[0]->city);
    }

    public function testAutoMapperFromArray()
    {
        $user = [
            'id' => 1,
            'address' => [
                'city' => 'Toulon',
            ],
            'createdAt' => '1987-04-30T06:00:00Z',
        ];

        /** @var UserDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
        self::assertInstanceOf(AddressDTO::class, $userDto->address);
        self::assertSame('Toulon', $userDto->address->city);
        self::assertInstanceOf(\DateTimeInterface::class, $userDto->createdAt);
        self::assertEquals(1987, $userDto->createdAt->format('Y'));
    }

    public function testAutoMapperToArray()
    {
        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        $userData = $this->autoMapper->map($user, 'array');

        self::assertInternalType('array', $userData);
        self::assertEquals(1, $userData['id']);
        self::assertInternalType('array', $userData['address']);
        self::assertInternalType('string', $userData['createdAt']);
    }

    public function testAutoMapperFromStdObject()
    {
        $user = new \stdClass();
        $user->id = 1;

        /** @var UserDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
    }

    public function testAutoMapperToStdObject()
    {
        $userDto = new UserDTO();
        $userDto->id = 1;

        $user = $this->autoMapper->map($userDto, \stdClass::class);

        self::assertInstanceOf(\stdClass::class, $user);
        self::assertEquals(1, $user->id);
    }

    public function testGroups()
    {
        $foo = new Foo();
        $foo->setId(10);

        $fooArray = $this->autoMapper->map($foo, 'array', new Context(['test']));

        self::assertInternalType('array', $fooArray);
        self::assertEquals(10, $fooArray['id']);

        $fooArray = $this->autoMapper->map($foo, 'array', new Context([]));

        self::assertInternalType('array', $fooArray);
        self::assertArrayNotHasKey('id', $fooArray);

        $fooArray = $this->autoMapper->map($foo, 'array');

        self::assertInternalType('array', $fooArray);
        self::assertArrayNotHasKey('id', $fooArray);
    }

    public function testDeepCloning()
    {
        $nodeA = new Node();
        $nodeB = new Node();
        $nodeB->parent = $nodeA;
        $nodeC = new Node();
        $nodeC->parent = $nodeB;
        $nodeA->parent = $nodeC;

        $newNode = $this->autoMapper->map($nodeA, Node::class);

        self::assertInstanceOf(Node::class, $newNode);
        self::assertNotSame($newNode, $nodeA);
        self::assertInstanceOf(Node::class, $newNode->parent);
        self::assertNotSame($newNode->parent, $nodeA->parent);
        self::assertInstanceOf(Node::class, $newNode->parent->parent);
        self::assertNotSame($newNode->parent->parent, $nodeA->parent->parent);
        self::assertInstanceOf(Node::class, $newNode->parent->parent->parent);
        self::assertSame($newNode, $newNode->parent->parent->parent);
    }

    public function testDeepCloningArray()
    {
        $nodeA = new Node();
        $nodeB = new Node();
        $nodeB->parent = $nodeA;
        $nodeC = new Node();
        $nodeC->parent = $nodeB;
        $nodeA->parent = $nodeC;

        $newNode = $this->autoMapper->map($nodeA, 'array');

        self::assertInternalType('array', $newNode);
        self::assertInternalType('array', $newNode['parent']);
        self::assertInternalType('array', $newNode['parent']['parent']);
        self::assertInternalType('array', $newNode['parent']['parent']['parent']);
        self::assertSame($newNode, $newNode['parent']['parent']['parent']);
    }

    public function testCircularReferenceArray()
    {
        $nodeA = new Node();
        $nodeB = new Node();

        $nodeA->childs[] = $nodeB;
        $nodeB->childs[] = $nodeA;

        $newNode = $this->autoMapper->map($nodeA, 'array');

        self::assertInternalType('array', $newNode);
        self::assertInternalType('array', $newNode['childs'][0]);
        self::assertInternalType('array', $newNode['childs'][0]['childs'][0]);
        self::assertSame($newNode, $newNode['childs'][0]['childs'][0]);
    }

    public function testPrivate()
    {
        $user = new PrivateUser(10, 'foo', 'bar');
        /** @var PrivateUserDTO $userDto */
        $userDto = $this->autoMapper->map($user, PrivateUserDTO::class);

        self::assertInstanceOf(PrivateUserDTO::class, $userDto);
        self::assertSame(10, $userDto->getId());
        self::assertSame('foo', $userDto->getFirstName());
        self::assertSame('bar', $userDto->getLastName());
    }

    public function testConstructor()
    {
        $user = new UserDTO();
        $user->id = 10;
        $user->name = 'foo';
        $user->age = 3;
        /** @var UserConstructorDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserConstructorDTO::class);

        self::assertInstanceOf(UserConstructorDTO::class, $userDto);
        self::assertSame('10', $userDto->getId());
        self::assertSame('foo', $userDto->getName());
        self::assertSame(3, $userDto->getAge());
    }

    public function testConstructorWithDefault()
    {
        $user = new UserDTONoAge();
        $user->id = 10;
        $user->name = 'foo';
        /** @var UserConstructorDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserConstructorDTO::class);

        self::assertInstanceOf(UserConstructorDTO::class, $userDto);
        self::assertSame('10', $userDto->getId());
        self::assertSame('foo', $userDto->getName());
        self::assertSame(30, $userDto->getAge());
    }

    public function testConstructorDisable()
    {
        $user = new UserDTONoName();
        $user->id = 10;
        /** @var UserConstructorDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserConstructorDTO::class);

        self::assertInstanceOf(UserConstructorDTO::class, $userDto);
        self::assertSame('10', $userDto->getId());
        self::assertNull($userDto->getName());
        self::assertNull($userDto->getAge());
    }

    public function testMaxDepth()
    {
        $foo = new FooMaxDepth(0, new FooMaxDepth(1, new FooMaxDepth(2, new FooMaxDepth(3, new FooMaxDepth(4)))));
        $fooArray = $this->autoMapper->map($foo, 'array');

        self::assertNotNull($fooArray['child']);
        self::assertNotNull($fooArray['child']['child']);
        self::assertFalse(isset($fooArray['child']['child']['child']));
    }

    public function testObjectToPopulate()
    {
        $configurationUser = $this->autoMapper->getConfiguration(User::class, UserDTO::class);
        $configurationUser->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });

        $user = new User(1, 'yolo', '13');
        $userDtoToPopulate = new UserDTO();
        $context = new Context();
        $context->setObjectToPopulate($userDtoToPopulate);

        $userDto = $this->autoMapper->map($user, UserDTO::class, $context);

        self::assertSame($userDtoToPopulate, $userDto);
    }

    public function testCircularReferenceLimitOnContext()
    {
        $nodeA = new Node();
        $nodeA->parent = $nodeA;

        $context = new Context();
        $context->setCircularReferenceLimit(1);

        $this->expectException(CircularReferenceException::class);

        $this->autoMapper->map($nodeA, 'array', $context);
    }

    public function testCircularReferenceLimitOnMapper()
    {
        $nodeA = new Node();
        $nodeA->parent = $nodeA;

        $mapper = $this->autoMapper->getMapper(Node::class, 'array');
        $mapper->setCircularReferenceLimit(1);

        $this->expectException(CircularReferenceException::class);

        $mapper->map($nodeA, new Context());
    }

    public function testCircularReferenceHandlerOnContext()
    {
        $nodeA = new Node();
        $nodeA->parent = $nodeA;

        $context = new Context();
        $context->setCircularReferenceHandler(function () {
            return 'foo';
        });

        $nodeArray = $this->autoMapper->map($nodeA, 'array', $context);

        self::assertSame('foo', $nodeArray['parent']);
    }

    public function testCircularReferenceHandlerOnMapper()
    {
        $nodeA = new Node();
        $nodeA->parent = $nodeA;

        $mapper = $this->autoMapper->getMapper(Node::class, 'array');
        $mapper->setCircularReferenceHandler(function () {
            return 'foo';
        });

        $nodeArray = $mapper->map($nodeA, new Context());

        self::assertSame('foo', $nodeArray['parent']);
    }

    public function testAllowedAttributes()
    {
        $configurationUser = $this->autoMapper->getConfiguration(User::class, UserDTO::class);
        $configurationUser->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });

        $user = new User(1, 'yolo', '13');
        $context = new Context(null, ['id', 'age'], null);

        $userDto = $this->autoMapper->map($user, UserDTO::class, $context);

        self::assertNull($userDto->name);
    }

    public function testIgnoredAttributes()
    {
        $configurationUser = $this->autoMapper->getConfiguration(User::class, UserDTO::class);
        $configurationUser->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });

        $user = new User(1, 'yolo', '13');
        $context = new Context(null, null, ['name']);

        $userDto = $this->autoMapper->map($user, UserDTO::class, $context);

        self::assertNull($userDto->name);
    }

    public function testNameConverter()
    {
        $nameConverter = new class() implements AdvancedNameConverterInterface {
            public function normalize($propertyName, string $class = null, string $format = null, array $context = [])
            {
                if ($propertyName === 'id') {
                    return '@id';
                }

                return $propertyName;
            }

            public function denormalize($propertyName, string $class = null, string $format = null, array $context = [])
            {
                if ($propertyName === '@id') {
                    return 'id';
                }

                return $propertyName;
            }
        };

        $autoMapper = AutoMapper::create(true, null, $nameConverter, 'Mapper2_');
        $user = new User(1, 'yolo', '13');

        $userArray = $autoMapper->map($user, 'array', new Context());

        self::assertInternalType('array', $userArray);
        self::assertArrayHasKey('@id', $userArray);
        self::assertSame(1, $userArray['@id']);
    }
}
