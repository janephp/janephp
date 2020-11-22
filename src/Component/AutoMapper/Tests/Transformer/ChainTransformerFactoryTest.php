<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Component\AutoMapper\Transformer\ChainTransformerFactory;
use Jane\Component\AutoMapper\Transformer\CopyTransformer;
use Jane\Component\AutoMapper\Transformer\TransformerFactoryInterface;
use PHPUnit\Framework\TestCase;

class ChainTransformerFactoryTest extends TestCase
{
    public function testGetTransformer()
    {
        $chainTransformerFactory = new ChainTransformerFactory();
        $transformer = new CopyTransformer();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();
        $subTransformer = $this
            ->getMockBuilder(TransformerFactoryInterface::class)
            ->getMock()
        ;

        $subTransformer->expects($this->any())->method('getTransformer')->willReturn($transformer);
        $chainTransformerFactory->addTransformerFactory($subTransformer);

        $transformerReturned = $chainTransformerFactory->getTransformer([], [], $mapperMetadata);

        self::assertSame($transformer, $transformerReturned);
    }

    public function testNoTransformer()
    {
        $chainTransformerFactory = new ChainTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();
        $subTransformer = $this
            ->getMockBuilder(TransformerFactoryInterface::class)
            ->getMock()
        ;

        $subTransformer->expects($this->any())->method('getTransformer')->willReturn(null);
        $chainTransformerFactory->addTransformerFactory($subTransformer);

        $transformerReturned = $chainTransformerFactory->getTransformer([], [], $mapperMetadata);

        self::assertNull($transformerReturned);
    }
}
