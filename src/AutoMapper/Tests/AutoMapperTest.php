<?php

namespace Jane\AutoMapper\Tests;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Accessor\ReflectionAccessorExtractor;
use Jane\AutoMapper\Compiler\FromSourcePropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\FromTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\SourceTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactory;
use Jane\AutoMapper\Context;
use Jane\AutoMapper\Extractor\ReflectionExtractor;
use Jane\AutoMapper\MapperConfiguration;
use Jane\AutoMapper\Tests\Domain\Address;
use Jane\AutoMapper\Tests\Domain\AddressDTO;
use Jane\AutoMapper\Tests\Domain\Foo;
use Jane\AutoMapper\Tests\Domain\Node;
use Jane\AutoMapper\Tests\Domain\PrivateUser;
use Jane\AutoMapper\Tests\Domain\PrivateUserDTO;
use Jane\AutoMapper\Tests\Domain\User;
use Jane\AutoMapper\Tests\Domain\UserDTO;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

class AutoMapperTest extends TestCase
{
    private $sourceTargetMappingExtractor;
    private $sourceTargetPrivateMappingExtractor;
    private $fromTargetMappingExtractor;
    private $fromSourceMappingExtractor;

    public function setUp()
    {
        $reflectionExtractor = new ReflectionExtractor();
        $reflectionExtractorPrivate = new ReflectionExtractor(true);
        $phpDocExtractor = new PhpDocExtractor();

        $this->sourceTargetMappingExtractor = new SourceTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            new TransformerFactory(),
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->fromTargetMappingExtractor = new FromTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            new TransformerFactory(),
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->fromSourceMappingExtractor = new FromSourcePropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            new TransformerFactory(),
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->sourceTargetPrivateMappingExtractor = new SourceTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractorPrivate],
            [$reflectionExtractorPrivate, $phpDocExtractor],
            [$reflectionExtractorPrivate],
            [$reflectionExtractorPrivate]
        ),
            new ReflectionAccessorExtractor(true),
            new TransformerFactory(),
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
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

    public function testReverse()
    {
        $configurationUser = (new MapperConfiguration($this->fromSourceMappingExtractor, UserDTO::class, \stdClass::class))->getReverseConfiguration();
        $autoMapper = new AutoMapper();
        $autoMapper->register($configurationUser);

        $user = new \stdClass();
        $user->id = 1;

        /** @var UserDTO $userDto */
        $userDto = $autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
    }

    public function testGroups()
    {
        $configurationUser = new MapperConfiguration($this->fromSourceMappingExtractor, Foo::class, 'array');
        $autoMapper = new AutoMapper();
        $autoMapper->register($configurationUser);

        $foo = new Foo();
        $foo->setId(10);

        $fooArray = $autoMapper->map($foo, 'array', new Context(['test']));

        self::assertInternalType('array', $fooArray);
        self::assertEquals(10, $fooArray['id']);

        $fooArray = $autoMapper->map($foo, 'array', new Context([]));

        self::assertInternalType('array', $fooArray);
        self::assertArrayNotHasKey('id', $fooArray);

        $fooArray = $autoMapper->map($foo, 'array');

        self::assertInternalType('array', $fooArray);
        self::assertArrayNotHasKey('id', $fooArray);
    }

    public function testDeepCloning()
    {
        $configuration = new MapperConfiguration($this->sourceTargetMappingExtractor, Node::class, Node::class);
        $autoMapper = new AutoMapper();
        $autoMapper->register($configuration);

        $nodeA = new Node();
        $nodeB = new Node();
        $nodeB->parent = $nodeA;
        $nodeC = new Node();
        $nodeC->parent = $nodeB;
        $nodeA->parent = $nodeC;

        $newNode = $autoMapper->map($nodeA, Node::class);

        self::assertInstanceOf(Node::class, $newNode);
        self::assertNotSame($newNode, $nodeA);
        self::assertInstanceOf(Node::class, $newNode->parent);
        self::assertNotSame($newNode->parent, $nodeA->parent);
        self::assertInstanceOf(Node::class, $newNode->parent->parent);
        self::assertNotSame($newNode->parent->parent, $nodeA->parent->parent);
        self::assertInstanceOf(Node::class, $newNode->parent->parent->parent);
        self::assertSame($newNode, $newNode->parent->parent->parent);
    }

    public function testPrivate()
    {
        $configuration = new MapperConfiguration($this->sourceTargetPrivateMappingExtractor, PrivateUser::class, PrivateUserDTO::class);
        $autoMapper = new AutoMapper();
        $autoMapper->register($configuration);

        $user = new PrivateUser(10, 'foo', 'bar');
        /** @var PrivateUserDTO $userDto */
        $userDto = $autoMapper->map($user, PrivateUserDTO::class);

        self::assertInstanceOf(PrivateUserDTO::class, $userDto);
        self::assertSame(10, $userDto->getId());
        self::assertSame('foo', $userDto->getFirstName());
        self::assertSame('bar', $userDto->getLastName());
    }

    public function testConstructor()
    {
        $configuration = new MapperConfiguration($this->sourceTargetPrivateMappingExtractor, PrivateUser::class, PrivateUserDTO::class);
        $autoMapper = new AutoMapper();
        $autoMapper->register($configuration);

        $user = new PrivateUser(10, 'foo', 'bar');
        /** @var PrivateUserDTO $userDto */
        $userDto = $autoMapper->map($user, PrivateUserDTO::class);

        self::assertInstanceOf(PrivateUserDTO::class, $userDto);
        self::assertSame(10, $userDto->getId());
        self::assertSame('foo', $userDto->getFirstName());
        self::assertSame('bar', $userDto->getLastName());
    }
}
