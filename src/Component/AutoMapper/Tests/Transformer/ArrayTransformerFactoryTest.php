<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Component\AutoMapper\Transformer\ArrayTransformerFactory;
use Jane\Component\AutoMapper\Transformer\ChainTransformerFactory;
use Jane\Component\AutoMapper\Transformer\CopyTransformer;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Type;

class ArrayTransformerFactoryTest extends TestCase
{
    public function testGetTransformer(): void
    {
        $chainFactory = new ChainTransformerFactory();
        $factory = new ArrayTransformerFactory($chainFactory);
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('array', false, null, true)], [new Type('array', false, null, true)], $mapperMetadata);

        self::assertInstanceOf(CopyTransformer::class, $transformer);
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
