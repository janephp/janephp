<?php

namespace Jane\AutoMapper\Tests\Transformer;

use PHPUnit\Framework\TestCase;
use Jane\AutoMapper\MapperMetadata;
use Jane\AutoMapper\Transformer\ArrayTransformer;
use Jane\AutoMapper\Transformer\ArrayTransformerFactory;
use Jane\AutoMapper\Transformer\ChainTransformerFactory;
use Symfony\Component\PropertyInfo\Type;

class ArrayTransformerFactoryTest extends TestCase
{
    public function testGetTransformer(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new ArrayTransformerFactory($chainFactory);
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('array', false, null, true)], [new Type('array', false, null, true)], $mapperMetadata);

        self::assertInstanceOf(ArrayTransformer::class, $transformer);
    }

    public function testNoTransformerTargetNoCollection(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new ArrayTransformerFactory($chainFactory);
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('array', false, null, true)], [new Type('string')], $mapperMetadata);

        self::assertNull($transformer);
    }

    public function testNoTransformerSourceNoCollection(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new ArrayTransformerFactory($chainFactory);
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('string')], [new Type('array', false, null, true)], $mapperMetadata);

        self::assertNull($transformer);
    }

    public function testNoTransformerIfNoSubTypeTransformerNoCollection(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new ArrayTransformerFactory($chainFactory);
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $stringType = new Type('string');
        $transformer = $factory->getTransformer([new Type('array', false, null, true, null, $stringType)], [new Type('array', false, null, true, null, $stringType)], $mapperMetadata);

        self::assertNull($transformer);
    }
}
