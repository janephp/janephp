<?php

namespace Jane\AutoMapper\Tests;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\AutoMapper\Extractor\FromSourceMappingExtractor;
use Jane\AutoMapper\Extractor\FromTargetMappingExtractor;
use Jane\AutoMapper\Extractor\PropertyMapping;
use Jane\AutoMapper\Extractor\SourceTargetMappingExtractor;
use Jane\AutoMapper\MapperGeneratorMetadataFactory;
use Jane\AutoMapper\MapperGeneratorMetadataFactoryInterface;
use Jane\AutoMapper\Transformer\ArrayTransformerFactory;
use Jane\AutoMapper\Transformer\BuiltinTransformerFactory;
use Jane\AutoMapper\Transformer\ChainTransformerFactory;
use Jane\AutoMapper\Transformer\DateTimeTransformerFactory;
use Jane\AutoMapper\Transformer\MultipleTransformerFactory;
use Jane\AutoMapper\Transformer\NullableTransformerFactory;
use Jane\AutoMapper\Transformer\ObjectTransformerFactory;
use Jane\AutoMapper\Transformer\UniqueTypeTransformerFactory;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

/**
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
class MapperGeneratorMetadataFactoryTest extends AutoMapperBaseTest
{
    /** @var MapperGeneratorMetadataFactoryInterface */
    protected $factory;

    public function setUp(): void
    {
        parent::setUp();

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $reflectionExtractor = new ReflectionExtractor(null, null, null, true, ReflectionExtractor::ALLOW_PUBLIC | ReflectionExtractor::ALLOW_PROTECTED | ReflectionExtractor::ALLOW_PRIVATE);

        $phpDocExtractor = new PhpDocExtractor();
        $propertyInfoExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );

        $transformerFactory = new ChainTransformerFactory();
        $sourceTargetMappingExtractor = new SourceTargetMappingExtractor(
            $propertyInfoExtractor,
            $reflectionExtractor,
            $reflectionExtractor,
            $transformerFactory,
            $classMetadataFactory
        );

        $fromTargetMappingExtractor = new FromTargetMappingExtractor(
            $propertyInfoExtractor,
            $reflectionExtractor,
            $reflectionExtractor,
            $transformerFactory,
            $classMetadataFactory
        );

        $fromSourceMappingExtractor = new FromSourceMappingExtractor(
            $propertyInfoExtractor,
            $reflectionExtractor,
            $reflectionExtractor,
            $transformerFactory,
            $classMetadataFactory
        );

        $this->factory = new MapperGeneratorMetadataFactory(
            $sourceTargetMappingExtractor,
            $fromSourceMappingExtractor,
            $fromTargetMappingExtractor
        );

        $transformerFactory->addTransformerFactory(new MultipleTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new NullableTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new UniqueTypeTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new DateTimeTransformerFactory());
        $transformerFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $transformerFactory->addTransformerFactory(new ArrayTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new ObjectTransformerFactory($this->autoMapper));
    }

    public function testCreateObjectToArray(): void
    {
        $userReflection = new \ReflectionClass(Fixtures\User::class);

        $metadata = $this->factory->create($this->autoMapper, Fixtures\User::class, 'array');
        self::assertFalse($metadata->hasConstructor());
        self::assertTrue($metadata->shouldCheckAttributes());
        self::assertFalse($metadata->isTargetCloneable());
        self::assertEquals(Fixtures\User::class, $metadata->getSource());
        self::assertEquals('array', $metadata->getTarget());
        self::assertCount(\count($userReflection->getProperties()), $metadata->getPropertiesMapping());
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('id'));
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('name'));
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('email'));
    }

    public function testCreateArrayToObject(): void
    {
        $userReflection = new \ReflectionClass(Fixtures\User::class);

        $metadata = $this->factory->create($this->autoMapper, 'array', Fixtures\User::class);
        self::assertTrue($metadata->hasConstructor());
        self::assertTrue($metadata->shouldCheckAttributes());
        self::assertTrue($metadata->isTargetCloneable());
        self::assertEquals('array', $metadata->getSource());
        self::assertEquals(Fixtures\User::class, $metadata->getTarget());
        self::assertCount(\count($userReflection->getProperties()), $metadata->getPropertiesMapping());
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('id'));
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('name'));
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('email'));
    }

    public function testCreateWithBothObjects(): void
    {
        $metadata = $this->factory->create($this->autoMapper, Fixtures\UserConstructorDTO::class, Fixtures\User::class);
        self::assertTrue($metadata->hasConstructor());
        self::assertTrue($metadata->shouldCheckAttributes());
        self::assertTrue($metadata->isTargetCloneable());
        self::assertEquals(Fixtures\UserConstructorDTO::class, $metadata->getSource());
        self::assertEquals(Fixtures\User::class, $metadata->getTarget());
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('id'));
        self::assertInstanceOf(PropertyMapping::class, $metadata->getPropertyMapping('name'));
        self::assertNull($metadata->getPropertyMapping('email'));
    }

    public function testHasNotConstructor(): void
    {
        $metadata = $this->factory->create($this->autoMapper, 'array', Fixtures\UserDTO::class);

        self::assertFalse($metadata->hasConstructor());
    }
}
