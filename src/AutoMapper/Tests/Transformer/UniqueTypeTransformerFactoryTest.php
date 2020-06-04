<?php

namespace Jane\AutoMapper\Tests\Transformer;

use Jane\AutoMapper\MapperMetadata;
use Jane\AutoMapper\Transformer\BuiltinTransformer;
use Jane\AutoMapper\Transformer\BuiltinTransformerFactory;
use Jane\AutoMapper\Transformer\ChainTransformerFactory;
use Jane\AutoMapper\Transformer\UniqueTypeTransformerFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Type;

class UniqueTypeTransformerFactoryTest extends TestCase
{
    public function testGetTransformer(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new UniqueTypeTransformerFactory($chainFactory);

        $chainFactory->addTransformerFactory($factory);
        $chainFactory->addTransformerFactory(new BuiltinTransformerFactory());

        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('string')], [new Type('string'), new Type('string')], $mapperMetadata);

        self::assertNotNull($transformer);
        self::assertInstanceOf(BuiltinTransformer::class, $transformer);
    }

    public function testNullTransformer(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new UniqueTypeTransformerFactory($chainFactory);

        $chainFactory->addTransformerFactory($factory);
        $chainFactory->addTransformerFactory(new BuiltinTransformerFactory());

        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer(null, [], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([], [], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('string')], [], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('string'), new Type('string')], [], $mapperMetadata);

        self::assertNull($transformer);

        $transformer = $factory->getTransformer([new Type('string')], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);
    }
}
