<?php

namespace Jane\Component\AutoMapper\Tests\Transformer;

use Jane\Component\AutoMapper\MapperMetadata;
use Jane\Component\AutoMapper\Transformer\SymfonyUidCopyTransformer;
use Jane\Component\AutoMapper\Transformer\SymfonyUidTransformerFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Uid\Ulid;

class SymfonyUidTransformerFactoryTest extends TestCase
{
    public function testNoTransformer(): void
    {
        $factory = new SymfonyUidTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer([new Type('object', false, null)], [new Type('object', false, null)], $mapperMetadata);

        self::assertNull($transformer);
    }

    public function testGetUlidCopyTransformer(): void
    {
        $factory = new SymfonyUidTransformerFactory();
        $mapperMetadata = $this->getMockBuilder(MapperMetadata::class)->disableOriginalConstructor()->getMock();

        $transformer = $factory->getTransformer(
            [new Type('object', false, Ulid::class)],
            [new Type('object', false, Ulid::class)],
            $mapperMetadata
        );

        self::assertNotNull($transformer);
        self::assertInstanceOf(SymfonyUidCopyTransformer::class, $transformer);
    }
}
