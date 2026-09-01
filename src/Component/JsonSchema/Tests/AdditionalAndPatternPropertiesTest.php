<?php

namespace Jane\Component\JsonSchema\Tests;

use PHPUnit\Framework\TestCase;

if (!trait_exists('AdditionalAndPatternProperties', false)) {
    eval('trait AdditionalAndPatternProperties
    {
        private array $extraProperties = [];

        public function definedProperties(): array { return []; }

        public function offsetExists(mixed $offset): bool
        {
            foreach ($this->definedProperties() as $phpName => $wireName) {
                if ($wireName === $offset) {
                    return \array_key_exists($phpName, get_object_vars($this)) || null !== ($this->{$phpName} ?? null);
                }
            }
            return \array_key_exists($offset, $this->extraProperties);
        }

        public function offsetGet(mixed $offset): mixed
        {
            foreach ($this->definedProperties() as $phpName => $wireName) {
                if ($wireName === $offset) { return $this->{$phpName} ?? null; }
            }
            return $this->extraProperties[$offset] ?? null;
        }

        public function offsetSet(mixed $offset, mixed $value): void
        {
            foreach ($this->definedProperties() as $phpName => $wireName) {
                if ($wireName === $offset) { $this->{$phpName} = $value; return; }
            }
            $this->extraProperties[$offset] = $value;
        }

        public function offsetUnset(mixed $offset): void
        {
            foreach ($this->definedProperties() as $phpName => $wireName) {
                if ($wireName === $offset) { $this->{$phpName} = null; return; }
            }
            unset($this->extraProperties[$offset]);
        }

        public function count(): int { return \count($this->toArray()); }

        public function getIterator(): \ArrayIterator { return new \ArrayIterator($this->toArray()); }

        public function toArray(): array
        {
            $publicProperties = get_object_vars($this);
            $values = [];
            foreach ($this->definedProperties() as $phpName => $wireName) {
                if (\'extraProperties\' === $phpName) { continue; }
                $value = $this->{$phpName} ?? null;
                if (\array_key_exists($phpName, $publicProperties) || null !== $value) {
                    $values[$wireName] = $value;
                }
            }
            return $values + $this->extraProperties;
        }

        public function getArrayCopy(): array { return $this->toArray(); }

        public function additionalPropertyEntries(): \Iterator { yield from $this->extraProperties; }

        public function jsonSerialize(): mixed
        {
            $values = $this->toArray();
            if ([] === $values) { return new \stdClass(); }
            return $values;
        }
    }');
}
if (!interface_exists('AdditionalPropertiesInterface', false)) {
    eval('interface AdditionalPropertiesInterface extends \IteratorAggregate, \Countable, \ArrayAccess, \JsonSerializable
    {
        public function toArray(): array;
        public function additionalPropertyEntries(): iterable;
    }');
}

class AdditionalAndPatternPropertiesTest extends TestCase
{
    private function createModel(): StubAdditionalPropertiesModel
    {
        return new StubAdditionalPropertiesModel();
    }

    public function testImplementsAdditionalPropertiesInterface(): void
    {
        self::assertInstanceOf(\AdditionalPropertiesInterface::class, $this->createModel());
    }

    public function testWireNameArrayAccessRoutesToPublicProperties(): void
    {
        $model = $this->createModel();

        $model['_attachment'] = 'a';
        $model['name'] = 'n';

        self::assertSame('a', $model->attachment);
        self::assertSame('n', $model->name);
        self::assertSame('a', $model['_attachment']);
        self::assertSame('n', $model['name']);
    }

    public function testUnknownKeysGoToAdditionalStorage(): void
    {
        $model = $this->createModel();

        $model['x-custom'] = 'value';

        self::assertSame('value', $model['x-custom']);
        self::assertTrue($model->offsetExists('x-custom'));
        self::assertNull($model['_attachment']);

        unset($model['x-custom']);

        self::assertFalse($model->offsetExists('x-custom'));
        self::assertNull($model['x-custom']);
    }

    public function testOffsetExistsGatesDefinedPropertiesOnInitializationOrValue(): void
    {
        $model = $this->createModel();

        self::assertFalse($model->offsetExists('_attachment'));
        self::assertFalse($model->offsetExists('name'));

        $model->attachment = null;

        self::assertTrue($model->offsetExists('_attachment'), 'explicitly set to null properties exist');
    }

    public function testUnsetOnDefinedPropertyResetsItToNull(): void
    {
        $model = $this->createModel();
        $model->attachment = 'a';

        unset($model['_attachment']);

        self::assertNull($model->attachment);
        self::assertSame(['_attachment' => null], $model->toArray());
    }

    public function testIterationYieldsDefinedThenAdditionalProperties(): void
    {
        $model = $this->createModel();
        $model->name = 'n';
        $model['z-first'] = 1;
        $model->attachment = 'a';
        $model['a-second'] = 2;

        self::assertSame(
            ['_attachment' => 'a', 'name' => 'n', 'z-first' => 1, 'a-second' => 2],
            iterator_to_array($model)
        );
    }

    public function testToArrayContainsAllReachableValues(): void
    {
        $model = $this->createModel();
        self::assertSame([], $model->toArray());

        $model->attachment = null;
        $model->name = 'n';
        $model['extra'] = 'e';

        self::assertSame(['_attachment' => null, 'name' => 'n', 'extra' => 'e'], $model->toArray());
    }

    public function testCountMatchesVisibleEntries(): void
    {
        $model = $this->createModel();

        self::assertCount(0, $model);

        $model->name = 'n';
        $model['extra'] = 'e';

        self::assertCount(2, $model);
    }

    public function testAdditionalPropertyEntriesYieldsOnlyAdditionalProperties(): void
    {
        $model = $this->createModel();
        $model->name = 'n';
        $model->attachment = 'a';
        $model['extra'] = 'e';

        self::assertSame(['extra' => 'e'], iterator_to_array($model->additionalPropertyEntries()));
    }

    public function testEmptyObjectEncodesAsJsonObject(): void
    {
        self::assertSame('{}', json_encode($this->createModel()));
    }

    public function testFilledObjectEncodesDefinedThenAdditionalProperties(): void
    {
        $model = $this->createModel();
        $model->name = 'n';
        $model['extra'] = 'e';
        $model->attachment = 'a';

        self::assertSame('{"_attachment":"a","name":"n","extra":"e"}', json_encode($model));
    }

    public function testGetArrayCopyMirrorsToArray(): void
    {
        $model = $this->createModel();
        $model->name = 'n';

        self::assertSame(['name' => 'n'], $model->getArrayCopy());
        self::assertSame($model->toArray(), $model->getArrayCopy());
    }

    public function testIsIterableForIterableTypeHints(): void
    {
        $consume = static fn (iterable $values): int => \count([...$values]);

        self::assertSame(0, $consume($this->createModel()));

        $model = $this->createModel();
        $model->name = 'n';
        $model['extra'] = 'e';

        self::assertSame(2, $consume($model));
    }

    public function testUninitializedNonNullablePropertyDoesNotBreakToArray(): void
    {
        $model = new StubNonNullablePropertyModel();
        $model['extra'] = 'kept';

        self::assertSame(['status' => 'draft', 'extra' => 'kept'], $model->toArray());
        self::assertSame('{"status":"draft","extra":"kept"}', json_encode($model));
        self::assertCount(2, $model);
        self::assertSame(['status' => 'draft', 'extra' => 'kept'], iterator_to_array($model));
    }

    public function testOffsetExistsOnUninitializedNonNullableProperty(): void
    {
        $model = new StubNonNullablePropertyModel();

        self::assertFalse($model->offsetExists('id'));

        $model->id = 'i';

        self::assertTrue($model->offsetExists('id'));
        self::assertSame(['id' => 'i', 'status' => 'draft'], $model->toArray());
    }

    public function testUninitializedPropertyWithDefaultValueIsStillExposed(): void
    {
        $model = new StubNonNullablePropertyModel();
        $model->id = 'i';

        self::assertTrue($model->offsetExists('status'));
        self::assertSame(['id' => 'i', 'status' => 'draft'], $model->toArray());
    }
}

/**
 * Mirrors a generated extension-container model: the `_attachment` wire name is
 * mapped onto the `attachment` public property.
 */
class StubAdditionalPropertiesModel implements \AdditionalPropertiesInterface
{
    use \AdditionalAndPatternProperties;

    public ?string $attachment;

    public ?string $name;

    public function definedProperties(): array
    {
        return [
            'attachment' => '_attachment',
            'name' => 'name',
        ];
    }
}

/**
 * Mirrors a generated model with a required property: a non-nullable public typed
 * property without a default. get_object_vars() skips uninitialized properties
 * and `?? null` reads never throw, so toArray() stays safe.
 */
class StubNonNullablePropertyModel implements \AdditionalPropertiesInterface
{
    use \AdditionalAndPatternProperties;

    public string $id;

    public string $status = 'draft';

    public function definedProperties(): array
    {
        return [
            'id' => 'id',
            'status' => 'status',
        ];
    }
}
