<?php

namespace Jane\Component\AutoMapper\Tests;

use Jane\Component\AutoMapper\Exception\CircularReferenceException;
use Jane\Component\AutoMapper\MapperContext;
use PHPUnit\Framework\TestCase;

/**
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
class MapperContextTest extends TestCase
{
    public function testIsAllowedAttribute(): void
    {
        $context = new MapperContext();
        $context->setAllowedAttributes(['id', 'age']);
        $context->setIgnoredAttributes(['age']);

        self::assertTrue(MapperContext::isAllowedAttribute($context->toArray(), 'id', 1));
        self::assertFalse(MapperContext::isAllowedAttribute($context->toArray(), 'age', 29));
        self::assertFalse(MapperContext::isAllowedAttribute($context->toArray(), 'name', 'Baptiste'));
    }

    public function testCircularReferenceLimit(): void
    {
        // with no circularReferenceLimit
        $object = new \stdClass();
        $context = MapperContext::withReference([], 'reference', $object);

        self::assertTrue(MapperContext::shouldHandleCircularReference($context, 'reference'));

        // with circularReferenceLimit
        $object = new \stdClass();
        $context = new MapperContext();
        $context->setCircularReferenceLimit(3);
        $context = MapperContext::withReference($context->toArray(), 'reference', $object);

        for ($i = 0; $i <= 2; ++$i) {
            if (2 === $i) {
                self::assertTrue(MapperContext::shouldHandleCircularReference($context, 'reference'));

                break;
            }

            self::assertFalse(MapperContext::shouldHandleCircularReference($context, 'reference'));

            // fake handleCircularReference to increment countReferenceRegistry
            MapperContext::handleCircularReference($context, 'reference', $object);
        }

        self::expectException(CircularReferenceException::class);
        self::expectExceptionMessage('A circular reference has been detected when mapping the object of type "stdClass" (configured limit: 3)');
        MapperContext::handleCircularReference($context, 'reference', $object);
    }

    public function testCircularReferenceHandler(): void
    {
        $object = new \stdClass();
        $context = new MapperContext();
        $context->setCircularReferenceHandler(function ($object) {
            return $object;
        });
        $context = MapperContext::withReference($context->toArray(), 'reference', $object);

        self::assertTrue(MapperContext::shouldHandleCircularReference($context, 'reference'));
        self::assertEquals($object, MapperContext::handleCircularReference($context, 'reference', $object));
    }

    public function testConstructorArgument(): void
    {
        $context = new MapperContext();
        $context->setConstructorArgument(Fixtures\User::class, 'id', 10);
        $context->setConstructorArgument(Fixtures\User::class, 'age', 50);

        self::assertTrue(MapperContext::hasConstructorArgument($context->toArray(), Fixtures\User::class, 'id'));
        self::assertFalse(MapperContext::hasConstructorArgument($context->toArray(), Fixtures\User::class, 'name'));
        self::assertTrue(MapperContext::hasConstructorArgument($context->toArray(), Fixtures\User::class, 'age'));

        self::assertEquals(10, MapperContext::getConstructorArgument($context->toArray(), Fixtures\User::class, 'id'));
        self::assertEquals(50, MapperContext::getConstructorArgument($context->toArray(), Fixtures\User::class, 'age'));

        self::assertNull(MapperContext::getConstructorArgument($context->toArray(), Fixtures\User::class, 'name'));
    }

    public function testGroups(): void
    {
        $expected = ['group1', 'group4'];
        $context = new MapperContext();
        $context->setGroups($expected);

        self::assertEquals($expected, $context->toArray()[MapperContext::GROUPS]);
        self::assertContains('group1', $context->toArray()[MapperContext::GROUPS]);
        self::assertNotContains('group2', $context->toArray()[MapperContext::GROUPS]);
    }

    public function testTargetToPopulate(): void
    {
        $object = new \stdClass();
        $context = new MapperContext();
        $context->setTargetToPopulate($object);

        self::assertSame($object, $context->toArray()[MapperContext::TARGET_TO_POPULATE]);
    }

    public function testWithNewContextIgnoredAttributesNested(): void
    {
        $context = [
            MapperContext::IGNORED_ATTRIBUTES => [
                'foo' => ['bar'],
                'baz',
            ],
        ];

        $newContext = MapperContext::withNewContext($context, 'foo');

        self::assertEquals(['bar'], $newContext[MapperContext::IGNORED_ATTRIBUTES]);
    }

    public function testWithNewContextAllowedAttributesNested(): void
    {
        $context = [
            MapperContext::ALLOWED_ATTRIBUTES => [
                'foo' => ['bar'],
                'baz',
            ],
        ];

        $newContext = MapperContext::withNewContext($context, 'foo');

        self::assertEquals(['bar'], $newContext[MapperContext::ALLOWED_ATTRIBUTES]);
    }

    public function testSkipNullValues(): void
    {
        $context = [MapperContext::SKIP_NULL_VALUES => true];
        self::assertFalse(MapperContext::isAllowedAttribute($context, 'id', null));
    }
}
