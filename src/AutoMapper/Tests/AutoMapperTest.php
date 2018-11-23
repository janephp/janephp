<?php

namespace Jane\AutoMapper\Tests;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Accessor\ReflectionAccessorExtractor;
use Jane\AutoMapper\Compiler\FromSourcePropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\FromTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\SourceTargetPropertiesMappingExtractor;
use Jane\AutoMapper\Compiler\Transformer\ArrayTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\BuiltinTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\ChainTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\MultipleTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\NullableTransformerFactory;
use Jane\AutoMapper\Compiler\Transformer\ObjectTransformerFactory;
use Jane\AutoMapper\Context;
use Jane\AutoMapper\Extractor\PrivateReflectionExtractor;
use Jane\AutoMapper\MapperConfiguration;
use Jane\AutoMapper\MapperConfigurationFactory;
use Jane\AutoMapper\Tests\Domain\Address;
use Jane\AutoMapper\Tests\Domain\AddressDTO;
use Jane\AutoMapper\Tests\Domain\Foo;
use Jane\AutoMapper\Tests\Domain\Node;
use Jane\AutoMapper\Tests\Domain\PrivateUser;
use Jane\AutoMapper\Tests\Domain\PrivateUserDTO;
use Jane\AutoMapper\Tests\Domain\User;
use Jane\AutoMapper\Tests\Domain\UserConstructorDTO;
use Jane\AutoMapper\Tests\Domain\UserDTO;
use Jane\AutoMapper\Tests\Domain\UserDTOAddressString;
use Jane\AutoMapper\Tests\Domain\UserDTONoAge;
use Jane\AutoMapper\Tests\Domain\UserDTONoName;
use Jane\AutoMapper\Tests\Transformer\AddressToStringTransformerFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

class AutoMapperTest extends TestCase
{
    private $sourceTargetMappingExtractor;
    private $sourceTargetPrivateMappingExtractor;
    private $fromTargetMappingExtractor;
    private $fromSourceMappingExtractor;
    /** @var ChainTransformerFactory */
    private $transformerFactory;
    private $autoMapper;

    public function setUp()
    {
        $this->autoMapper = new AutoMapper();
        $reflectionExtractor = new ReflectionExtractor();
        $reflectionExtractorPrivate = new PrivateReflectionExtractor();
        $phpDocExtractor = new PhpDocExtractor();
        $this->transformerFactory = new ChainTransformerFactory();
        $this->transformerFactory->addTransformerFactory(new MultipleTransformerFactory($this->transformerFactory));
        $this->transformerFactory->addTransformerFactory(new NullableTransformerFactory($this->transformerFactory));
        $this->transformerFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $this->transformerFactory->addTransformerFactory(new ArrayTransformerFactory($this->transformerFactory));

        $this->sourceTargetMappingExtractor = new SourceTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->fromTargetMappingExtractor = new FromTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->fromSourceMappingExtractor = new FromSourcePropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$reflectionExtractor, $phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        ),
            new ReflectionAccessorExtractor(),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->sourceTargetPrivateMappingExtractor = new SourceTargetPropertiesMappingExtractor(new PropertyInfoExtractor(
            [$reflectionExtractorPrivate],
            [$reflectionExtractorPrivate, $phpDocExtractor],
            [$reflectionExtractorPrivate],
            [$reflectionExtractorPrivate]
        ),
            new ReflectionAccessorExtractor(true),
            $this->transformerFactory,
            new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()))
        );

        $this->transformerFactory->addTransformerFactory(new ObjectTransformerFactory($this->autoMapper, new MapperConfigurationFactory(
            $this->sourceTargetMappingExtractor,
            $this->fromSourceMappingExtractor,
            $this->fromTargetMappingExtractor
        )));
    }

    public function testAutoMapping()
    {
        $configurationUser = new MapperConfiguration($this->sourceTargetMappingExtractor, User::class, UserDTO::class);
        $configurationAddress = new MapperConfiguration($this->sourceTargetMappingExtractor, Address::class, AddressDTO::class);
        $configurationUser->forMember('yearOfBirth', function (User $user) {
            return ((int) date('Y')) - ((int) $user->age);
        });

        $this->autoMapper->register($configurationUser);
        $this->autoMapper->register($configurationAddress);

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
        $configurationAddress = new MapperConfiguration($this->fromTargetMappingExtractor, 'array', AddressDTO::class);
        $this->autoMapper->register($configurationUser);
        $this->autoMapper->register($configurationAddress);

        $user = [
            'id' => 1,
            'address' => [
                'city' => 'Toulon',
            ],
        ];

        /** @var UserDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
        self::assertInstanceOf(AddressDTO::class, $userDto->address);
        self::assertSame('Toulon', $userDto->address->city);
    }

    public function testAutoMapperToArray()
    {
        $configurationUser = new MapperConfiguration($this->fromSourceMappingExtractor, User::class, 'array');
        $configurationAddress = new MapperConfiguration($this->fromSourceMappingExtractor, Address::class, 'array');
        $this->autoMapper->register($configurationUser);
        $this->autoMapper->register($configurationAddress);

        $address = new Address();
        $address->setCity('Toulon');
        $user = new User(1, 'yolo', '13');
        $user->address = $address;
        $user->addresses[] = $address;

        $userData = $this->autoMapper->map($user, 'array');

        self::assertInternalType('array', $userData);
        self::assertEquals(1, $userData['id']);
        self::assertInternalType('array', $userData['address']);
    }

    public function testAutoMapperFromStdObject()
    {
        $configurationUser = new MapperConfiguration($this->fromTargetMappingExtractor, \stdClass::class, UserDTO::class);
        $configurationAddress = new MapperConfiguration($this->fromTargetMappingExtractor, \stdClass::class, AddressDTO::class);
        $this->autoMapper->register($configurationUser);
        $this->autoMapper->register($configurationAddress);

        $user = new \stdClass();
        $user->id = 1;

        /** @var UserDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
    }

    public function testAutoMapperToStdObject()
    {
        $configurationUser = new MapperConfiguration($this->fromSourceMappingExtractor, UserDTO::class, \stdClass::class);
        $this->autoMapper->register($configurationUser);

        $userDto = new UserDTO();
        $userDto->id = 1;

        $user = $this->autoMapper->map($userDto, \stdClass::class);

        self::assertInstanceOf(\stdClass::class, $user);
        self::assertEquals(1, $user->id);
    }

    public function testReverse()
    {
        $configurationUser = (new MapperConfiguration($this->fromSourceMappingExtractor, UserDTO::class, \stdClass::class))->getReverseConfiguration();
        $configurationAddress = new MapperConfiguration($this->fromTargetMappingExtractor, \stdClass::class, AddressDTO::class);
        $this->autoMapper->register($configurationUser);
        $this->autoMapper->register($configurationAddress);

        $user = new \stdClass();
        $user->id = 1;

        /** @var UserDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
    }

    public function testGroups()
    {
        $configurationUser = new MapperConfiguration($this->fromSourceMappingExtractor, Foo::class, 'array');
        $this->autoMapper->register($configurationUser);

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
        $configuration = new MapperConfiguration($this->sourceTargetMappingExtractor, Node::class, Node::class);
        $this->autoMapper->register($configuration);

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

    public function testPrivate()
    {
        $configuration = new MapperConfiguration($this->sourceTargetPrivateMappingExtractor, PrivateUser::class, PrivateUserDTO::class);
        $this->autoMapper->register($configuration);

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
        $configuration = new MapperConfiguration($this->sourceTargetPrivateMappingExtractor, UserDTO::class, UserConstructorDTO::class);
        $this->autoMapper->register($configuration);

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
        $configuration = new MapperConfiguration($this->sourceTargetPrivateMappingExtractor, UserDTONoAge::class, UserConstructorDTO::class);
        $this->autoMapper->register($configuration);

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
        $configuration = new MapperConfiguration($this->sourceTargetPrivateMappingExtractor, UserDTONoName::class, UserConstructorDTO::class);
        $this->autoMapper->register($configuration);

        $user = new UserDTONoName();
        $user->id = 10;
        /** @var UserConstructorDTO $userDto */
        $userDto = $this->autoMapper->map($user, UserConstructorDTO::class);

        self::assertInstanceOf(UserConstructorDTO::class, $userDto);
        self::assertSame('10', $userDto->getId());
        self::assertNull($userDto->getName());
        self::assertNull($userDto->getAge());
    }

    public function testCustomValueTransformer()
    {
        $this->transformerFactory->addTransformerFactory(new AddressToStringTransformerFactory());

        $configuration = new MapperConfiguration($this->sourceTargetPrivateMappingExtractor, User::class, UserDTOAddressString::class);
        $this->autoMapper->register($configuration);

        $user = new User(10, 'test', 13);
        $user->address = new Address();
        $user->address->setCity('Paris');

        /** @var UserDTOAddressString $userDto */
        $userDto = $this->autoMapper->map($user, UserDTOAddressString::class);

        self::assertInstanceOf(UserDTOAddressString::class, $userDto);
        self::assertSame('Paris', $userDto->address);
    }
}
