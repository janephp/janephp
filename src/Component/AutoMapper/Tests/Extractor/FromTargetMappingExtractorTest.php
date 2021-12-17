<?php

namespace Jane\Component\AutoMapper\Tests\Extractor;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\Component\AutoMapper\Exception\InvalidMappingException;
use Jane\Component\AutoMapper\Extractor\FromTargetMappingExtractor;
use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Component\AutoMapper\Tests\AutoMapperBaseTest;
use Jane\Component\AutoMapper\Tests\Fixtures;
use Jane\Component\AutoMapper\Transformer\ArrayTransformerFactory;
use Jane\Component\AutoMapper\Transformer\BuiltinTransformerFactory;
use Jane\Component\AutoMapper\Transformer\ChainTransformerFactory;
use Jane\Component\AutoMapper\Transformer\DateTimeTransformerFactory;
use Jane\Component\AutoMapper\Transformer\MultipleTransformerFactory;
use Jane\Component\AutoMapper\Transformer\NullableTransformerFactory;
use Jane\Component\AutoMapper\Transformer\ObjectTransformerFactory;
use Jane\Component\AutoMapper\Transformer\UniqueTypeTransformerFactory;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

/**
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
class FromTargetMappingExtractorTest extends AutoMapperBaseTest
{
    /** @var FromTargetMappingExtractor */
    protected $fromTargetMappingExtractor;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fromTargetMappingExtractorBootstrap();
    }

    public function testWithSourceAsArray(): void
    {
        $userReflection = new \ReflectionClass(Fixtures\User::class);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromTargetMappingExtractor, 'array', Fixtures\User::class);
        $targetPropertiesMapping = $this->fromTargetMappingExtractor->getPropertiesMapping($mapperMetadata);

        self::assertCount(\count($userReflection->getProperties()), $targetPropertiesMapping);
        foreach ($targetPropertiesMapping as $propertyMapping) {
            self::assertTrue($userReflection->hasProperty($propertyMapping->getProperty()));
        }
    }

    public function testWithSourceAsStdClass(): void
    {
        $userReflection = new \ReflectionClass(Fixtures\User::class);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromTargetMappingExtractor, 'stdClass', Fixtures\User::class);
        $targetPropertiesMapping = $this->fromTargetMappingExtractor->getPropertiesMapping($mapperMetadata);

        self::assertCount(\count($userReflection->getProperties()), $targetPropertiesMapping);
        foreach ($targetPropertiesMapping as $propertyMapping) {
            self::assertTrue($userReflection->hasProperty($propertyMapping->getProperty()));
        }
    }

    public function testWithTargetAsEmpty(): void
    {
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromTargetMappingExtractor, 'array', Fixtures\Empty_::class);
        $targetPropertiesMapping = $this->fromTargetMappingExtractor->getPropertiesMapping($mapperMetadata);

        self::assertCount(0, $targetPropertiesMapping);
    }

    public function testWithTargetAsPrivate(): void
    {
        $privateReflection = new \ReflectionClass(Fixtures\Private_::class);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromTargetMappingExtractor, 'array', Fixtures\Private_::class);
        $targetPropertiesMapping = $this->fromTargetMappingExtractor->getPropertiesMapping($mapperMetadata);
        self::assertCount(\count($privateReflection->getProperties()), $targetPropertiesMapping);

        $this->fromTargetMappingExtractorBootstrap(false);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromTargetMappingExtractor, 'array', Fixtures\Private_::class);
        $targetPropertiesMapping = $this->fromTargetMappingExtractor->getPropertiesMapping($mapperMetadata);
        self::assertCount(0, $targetPropertiesMapping);
    }

    public function testWithTargetAsArray(): void
    {
        self::expectException(InvalidMappingException::class);
        self::expectExceptionMessage('Only array or stdClass are accepted as a source');

        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromTargetMappingExtractor, Fixtures\User::class, 'array');
        $this->fromTargetMappingExtractor->getPropertiesMapping($mapperMetadata);
    }

    public function testWithTargetAsStdClass(): void
    {
        self::expectException(InvalidMappingException::class);
        self::expectExceptionMessage('Only array or stdClass are accepted as a source');

        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromTargetMappingExtractor, Fixtures\User::class, 'stdClass');
        $this->fromTargetMappingExtractor->getPropertiesMapping($mapperMetadata);
    }

    private function fromTargetMappingExtractorBootstrap(bool $private = true): void
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $flags = ReflectionExtractor::ALLOW_PUBLIC;

        if ($private) {
            $flags |= ReflectionExtractor::ALLOW_PROTECTED | ReflectionExtractor::ALLOW_PRIVATE;
        }

        $reflectionExtractor = new ReflectionExtractor(null, null, null, true, $flags);

        $phpDocExtractor = new PhpDocExtractor();
        $propertyInfoExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );

        $transformerFactory = new ChainTransformerFactory();

        $this->fromTargetMappingExtractor = new FromTargetMappingExtractor(
            $propertyInfoExtractor,
            $reflectionExtractor,
            $reflectionExtractor,
            $transformerFactory,
            $classMetadataFactory
        );

        $transformerFactory->addTransformerFactory(new MultipleTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new NullableTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new UniqueTypeTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new DateTimeTransformerFactory());
        $transformerFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $transformerFactory->addTransformerFactory(new ArrayTransformerFactory($transformerFactory));
        $transformerFactory->addTransformerFactory(new ObjectTransformerFactory($this->autoMapper));
    }
}
