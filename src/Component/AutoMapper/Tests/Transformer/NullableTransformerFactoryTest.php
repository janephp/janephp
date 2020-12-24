<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Component\AutoMapper\Transformer\BuiltinTransformerFactory;
use Jane\Component\AutoMapper\Transformer\ChainTransformerFactory;
use Jane\Component\AutoMapper\Transformer\NullableTransformer;
use Jane\Component\AutoMapper\Transformer\NullableTransformerFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Type;

class NullableTransformerFactoryTest extends TestCase
{
    private $isTargetNullableProperty;

    protected function setUp(): void
    {
        $this->isTargetNullableProperty = (new \ReflectionClass(NullableTransformer::class))->getProperty('isTargetNullable');
        $this->isTargetNullableProperty->setAccessible(true);
    }

    public function testGetTransformer(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new NullableTransformerFactory($chainFactory);

        $chainFactory->addTransformerFactory($factory);
        $chainFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('string', true)], [new Type('string')], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(NullableTransformer::class, $transformer);
        self::assertFalse($this->isTargetNullableProperty->getValue($transformer));

        $transformer = $factory->getTransformer([new Type('string', true)], [new Type('string', true)], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(NullableTransformer::class, $transformer);
        self::assertTrue($this->isTargetNullableProperty->getValue($transformer));

        $transformer = $factory->getTransformer([new Type('string', true)], [new Type('string'), new Type('int', true)], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(NullableTransformer::class, $transformer);
        self::assertTrue($this->isTargetNullableProperty->getValue($transformer));

        $transformer = $factory->getTransformer([new Type('string', true)], [new Type('string'), new Type('int')], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(NullableTransformer::class, $transformer);
        self::assertFalse($this->isTargetNullableProperty->getValue($transformer));
    }

    public function testNullTransformerIfSourceTypeNotNullable(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new NullableTransformerFactory($chainFactory);

        $chainFactory->addTransformerFactory($factory);
        $chainFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('string')], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);
    }

    public function testNullTransformerIfMultipleSource(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new NullableTransformerFactory($chainFactory);

        $chainFactory->addTransformerFactory($factory);
        $chainFactory->addTransformerFactory(new BuiltinTransformerFactory());
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('string', true), new Type('string')], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);
    }
}
