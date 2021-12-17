<?php

namespace Jane\Component\AutoMapper\Tests\Extractor;

use Doctrine\Common\Annotations\AnnotationReader;
use Jane\Component\AutoMapper\Exception\InvalidMappingException;
use Jane\Component\AutoMapper\Extractor\FromSourceMappingExtractor;
use Jane\Component\AutoMapper\Extractor\PropertyMapping;
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
class FromSourceMappingExtractorTest extends AutoMapperBaseTest
{
    /** @var FromSourceMappingExtractor */
    protected $fromSourceMappingExtractor;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fromSourceMappingExtractorBootstrap();
    }

    public function testWithTargetAsArray(): void
    {
        $userReflection = new \ReflectionClass(Fixtures\User::class);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromSourceMappingExtractor, Fixtures\User::class, 'array');
        $sourcePropertiesMapping = $this->fromSourceMappingExtractor->getPropertiesMapping($mapperMetadata);

        self::assertCount(\count($userReflection->getProperties()), $sourcePropertiesMapping);
        /** @var PropertyMapping $propertyMapping */
        foreach ($sourcePropertiesMapping as $propertyMapping) {
            self::assertTrue($userReflection->hasProperty($propertyMapping->getProperty()));
        }
    }

    public function testWithTargetAsStdClass(): void
    {
        $userReflection = new \ReflectionClass(Fixtures\User::class);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromSourceMappingExtractor, Fixtures\User::class, 'stdClass');
        $sourcePropertiesMapping = $this->fromSourceMappingExtractor->getPropertiesMapping($mapperMetadata);

        self::assertCount(\count($userReflection->getProperties()), $sourcePropertiesMapping);
        /** @var PropertyMapping $propertyMapping */
        foreach ($sourcePropertiesMapping as $propertyMapping) {
            self::assertTrue($userReflection->hasProperty($propertyMapping->getProperty()));
        }
    }

    public function testWithSourceAsEmpty(): void
    {
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromSourceMappingExtractor, Fixtures\Empty_::class, 'array');
        $sourcePropertiesMapping = $this->fromSourceMappingExtractor->getPropertiesMapping($mapperMetadata);

        self::assertCount(0, $sourcePropertiesMapping);
    }

    public function testWithSourceAsPrivate(): void
    {
        $privateReflection = new \ReflectionClass(Fixtures\Private_::class);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromSourceMappingExtractor, Fixtures\Private_::class, 'array');
        $sourcePropertiesMapping = $this->fromSourceMappingExtractor->getPropertiesMapping($mapperMetadata);
        self::assertCount(\count($privateReflection->getProperties()), $sourcePropertiesMapping);

        $this->fromSourceMappingExtractorBootstrap(false);
        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromSourceMappingExtractor, Fixtures\Private_::class, 'array');
        $sourcePropertiesMapping = $this->fromSourceMappingExtractor->getPropertiesMapping($mapperMetadata);
        self::assertCount(0, $sourcePropertiesMapping);
    }

    public function testWithSourceAsArray(): void
    {
        self::expectException(InvalidMappingException::class);
        self::expectExceptionMessage('Only array or stdClass are accepted as a target');

        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromSourceMappingExtractor, 'array', Fixtures\User::class);
        $this->fromSourceMappingExtractor->getPropertiesMapping($mapperMetadata);
    }

    public function testWithSourceAsStdClass(): void
    {
        self::expectException(InvalidMappingException::class);
        self::expectExceptionMessage('Only array or stdClass are accepted as a target');

        $mapperMetadata = new MapperMetadata($this->autoMapper, $this->fromSourceMappingExtractor, 'stdClass', Fixtures\User::class);
        $this->fromSourceMappingExtractor->getPropertiesMapping($mapperMetadata);
    }

    private function fromSourceMappingExtractorBootstrap(bool $private = true): void
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $flags = ReflectionExtractor::ALLOW_PUBLIC;

        if ($private) {
            $flags |= ReflectionExtractor::ALLOW_PROTECTED | ReflectionExtractor::ALLOW_PRIVATE;
        }

        $reflectionExtractor = new ReflectionExtractor(null, null, null, true, $flags);
        $transformerFactory = new ChainTransformerFactory();

        $phpDocExtractor = new PhpDocExtractor();
        $propertyInfoExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );

        $this->fromSourceMappingExtractor = new FromSourceMappingExtractor(
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
