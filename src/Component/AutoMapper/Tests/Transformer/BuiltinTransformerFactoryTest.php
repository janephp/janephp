<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Component\AutoMapper\Transformer\BuiltinTransformer;
use Jane\Component\AutoMapper\Transformer\BuiltinTransformerFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Type;

class BuiltinTransformerFactoryTest extends TestCase
{
    public function testGetTransformer(): void
    {
        $factory = new BuiltinTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('string')], [new Type('string')], $mapperMetadata);

        self::assertInstanceOf(BuiltinTransformer::class, $transformer);

        $transformer = $factory->getTransformer([new Type('bool')], [new Type('string')], $mapperMetadata);

        self::assertInstanceOf(BuiltinTransformer::class, $transformer);
    }

    public function testNoTransformer(): void
    {
        $factory = new BuiltinTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer(null, [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer(['test'], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('string'), new Type('string')], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('array')], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('object')], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);
    }
}
