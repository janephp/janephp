<?php

namespace Jane\Component\JsonSchema\Tests;

use PHPUnit\Framework\TestCase;

class JsonObjectTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        if (!class_exists('JsonObject', false)) {
            eval('class JsonObject extends \stdClass implements \ArrayAccess, \Countable, \IteratorAggregate
            {
                public function __construct(iterable $values = [])
                {
                    foreach ($values as $key => $value) {
                        $this->{$key} = $value;
                    }
                }
                public function offsetExists(mixed $offset): bool { return \array_key_exists($offset, get_object_vars($this)); }
                public function offsetGet(mixed $offset): mixed { return $this->{$offset} ?? null; }
                public function offsetSet(mixed $offset, mixed $value): void { $this->{$offset} = $value; }
                public function offsetUnset(mixed $offset): void { unset($this->{$offset}); }
                public function count(): int { return \count(get_object_vars($this)); }
                public function getIterator(): \ArrayIterator { return new \ArrayIterator(get_object_vars($this)); }
                public function toArray(): array { return get_object_vars($this); }
            }');
        }
    }

    public function testEmptyObjectEncodesAsJsonObject(): void
    {
        self::assertSame('{}', json_encode(new \JsonObject()));
    }

    public function testFilledObjectEncodesAsJsonObject(): void
    {
        $object = new \JsonObject(['443/tcp' => 'ok', 'nested' => new \JsonObject(), 'list' => [1, 2]]);

        self::assertSame('{"443\/tcp":"ok","nested":{},"list":[1,2]}', json_encode($object));
    }

    public function testValuesAddedAfterConstructionAreEncoded(): void
    {
        $object = new \JsonObject();
        $object['key'] = 'value';

        self::assertSame('{"key":"value"}', json_encode($object));
    }

    public function testArrayAccess(): void
    {
        $object = new \JsonObject(['a' => 1]);
        $object['b'] = null;

        self::assertTrue(isset($object['a']));
        self::assertSame(1, $object['a']);
        self::assertNull($object['missing']);
        self::assertTrue($object->offsetExists('b'));
        self::assertFalse($object->offsetExists('missing'));

        unset($object['a']);

        self::assertFalse($object->offsetExists('a'));
    }

    public function testTraversableAndCountable(): void
    {
        $object = new \JsonObject(['a' => 1, 'b' => 2]);

        self::assertCount(2, $object);
        self::assertSame(['a' => 1, 'b' => 2], iterator_to_array($object));
    }

    public function testToArray(): void
    {
        $object = new \JsonObject(['a' => 1]);

        self::assertSame(['a' => 1], $object->toArray());
    }

    public function testIsIterableForIterableTypeHints(): void
    {
        $object = new \JsonObject();

        self::assertInstanceOf(\Traversable::class, $object);

        $consume = static fn (iterable $values): int => \count([...$values]);

        self::assertSame(0, $consume($object));
    }
}
