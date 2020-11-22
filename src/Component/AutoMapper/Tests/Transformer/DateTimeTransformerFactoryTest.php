<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Component\AutoMapper\Transformer\CopyTransformer;
use Jane\Component\AutoMapper\Transformer\DateTimeImmutableToMutableTransformer;
use Jane\Component\AutoMapper\Transformer\DateTimeMutableToImmutableTransformer;
use Jane\Component\AutoMapper\Transformer\DateTimeToStringTransformer;
use Jane\Component\AutoMapper\Transformer\DateTimeTransformerFactory;
use Jane\Component\AutoMapper\Transformer\StringToDateTimeTransformer;
use PHPUnit\Framework\TestCase;
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
        self::assertInstanceOf(DateTimeToStringTransformer::class, $transformer);

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
