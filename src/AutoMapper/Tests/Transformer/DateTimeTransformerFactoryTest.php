<?php

namespace Jane\AutoMapper\Tests\Transformer;

use PHPUnit\Framework\TestCase;
use Jane\AutoMapper\MapperMetadata;
use Jane\AutoMapper\Transformer\CopyTransformer;
use Jane\AutoMapper\Transformer\DateTimeImmutableToMutableTransformer;
use Jane\AutoMapper\Transformer\DateTimeMutableToImmutableTransformer;
use Jane\AutoMapper\Transformer\DateTimeToStringTansformer;
use Jane\AutoMapper\Transformer\DateTimeTransformerFactory;
use Jane\AutoMapper\Transformer\StringToDateTimeTransformer;
use Symfony\Component\PropertyInfo\Type;

class DateTimeTransformerFactoryTest extends TestCase
{
    public function testGetTransformer()
    {
        $factory = new DateTimeTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('object', false, \DateTime::class)], [new Type('object', false, \DateTime::class)], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(CopyTransformer::class, $transformer);

        $transformer = $factory->getTransformer([new Type('object', false, \DateTime::class)], [new Type('string')], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(DateTimeToStringTansformer::class, $transformer);

        $transformer = $factory->getTransformer([new Type('string')], [new Type('object', false, \DateTime::class)], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(StringToDateTimeTransformer::class, $transformer);
    }

    public function testGetTransformerImmutable()
    {
        $factory = new DateTimeTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('object', false, \DateTimeImmutable::class)], [new Type('object', false, \DateTime::class)], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(DateTimeImmutableToMutableTransformer::class, $transformer);
    }

    public function testGetTransformerMutable()
    {
        $factory = new DateTimeTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('object', false, \DateTime::class)], [new Type('object', false, \DateTimeImmutable::class)], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(DateTimeMutableToImmutableTransformer::class, $transformer);
    }

    public function testNoTransformer()
    {
        $factory = new DateTimeTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('string')], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('object', false, \DateTime::class)], [new Type('bool')], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('bool')], [new Type('object', false, \DateTime::class)], $mapperMetadata);

        self::assertNull($transformer);
    }
}
