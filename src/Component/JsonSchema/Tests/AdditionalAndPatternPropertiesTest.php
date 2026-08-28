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
            foreach ($this->definedProperties() as $phpName => $definition) {
                if ($definition[0] === $offset) {
                    return $this->isInitialized($phpName) || null !== $this->{$phpName};
                }
            }
            return \array_key_exists($offset, $this->extraProperties);
        }

        public function offsetGet(mixed $offset): mixed
        {
            foreach ($this->definedProperties() as $definition) {
                if ($definition[0] === $offset) { return $this->{$definition[1]}(); }
            }
            return $this->extraProperties[$offset] ?? null;
        }

        public function offsetSet(mixed $offset, mixed $value): void
        {
            foreach ($this->definedProperties() as $definition) {
                if ($definition[0] === $offset) { $this->{$definition[2]}($value); return; }
            }
            $this->extraProperties[$offset] = $value;
        }

        public function offsetUnset(mixed $offset): void
        {
            foreach ($this->definedProperties() as $definition) {
                if ($definition[0] === $offset) { $this->{$definition[2]}(null); return; }
            }
            unset($this->extraProperties[$offset]);
        }

        public function count(): int { return \count($this->toArray()); }

        public function getIterator(): \ArrayIterator { return new \ArrayIterator($this->toArray()); }

        public function toArray(): array
        {
            $values = [];
            foreach ($this->definedProperties() as $phpName => $definition) {
                $value = $this->{$phpName};
                if ($this->isInitialized($phpName) || null !== $value) {
                    $values[$definition[0]] = $value;
                }
            }
            return array_merge($values, $this->extraProperties);
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

    public function testWireNameArrayAccessRoutesToAccessors(): void
    {
        $model = $this->createModel();

        $model['_attachment'] = 'a';
        $model['name'] = 'n';

        self::assertSame('a', $model->getAttachment());
        self::assertSame('n', $model->getName());
        self::assertSame('a', $model['_attachment']);
        self::assertSame('n', $model['name']);
    }

    public function testUnknownKeysGoToAdditionalStorage(): void
    {
        $model = $this->createModel();

        $model['x-custom'] = 'value';

        self::assertSame('value', $model['x-custom']);
        self::assertTrue($model->offsetExists('x-custom'));
        self::assertNull($model->getAttachment());

        unset($model['x-custom']);

        self::assertFalse($model->offsetExists('x-custom'));
        self::assertNull($model['x-custom']);
    }

    public function testOffsetExistsGatesDefinedPropertiesOnInitializationOrValue(): void
    {
        $model = $this->createModel();

        self::assertFalse($model->offsetExists('_attachment'));
        self::assertFalse($model->offsetExists('name'));

        $model->setAttachment(null);

        self::assertTrue($model->offsetExists('_attachment'), 'initialized but null properties exist');
    }

    public function testUnsetOnDefinedPropertyResetsItToNull(): void
    {
        $model = $this->createModel();
        $model->setAttachment('a');

        unset($model['_attachment']);

        self::assertNull($model->getAttachment());
        self::assertSame(['_attachment' => null], $model->toArray());
    }

    public function testIterationYieldsDefinedThenAdditionalProperties(): void
    {
        $model = $this->createModel();
        $model->setName('n');
        $model['z-first'] = 1;
        $model->setAttachment('a');
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

        $model->setAttachment(null);
        $model->setName('n');
        $model['extra'] = 'e';

        self::assertSame(['_attachment' => null, 'name' => 'n', 'extra' => 'e'], $model->toArray());
    }

    public function testCountMatchesVisibleEntries(): void
    {
        $model = $this->createModel();

        self::assertCount(0, $model);

        $model->setName('n');
        $model['extra'] = 'e';

        self::assertCount(2, $model);
    }

    public function testAdditionalPropertyEntriesYieldsOnlyAdditionalProperties(): void
    {
        $model = $this->createModel();
        $model->setName('n');
        $model->setAttachment('a');
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
        $model->setName('n');
        $model['extra'] = 'e';
        $model->setAttachment('a');

        self::assertSame('{"_attachment":"a","name":"n","extra":"e"}', json_encode($model));
    }

    public function testGetArrayCopyMirrorsToArray(): void
    {
        $model = $this->createModel();
        $model->setName('n');

        self::assertSame(['name' => 'n'], $model->getArrayCopy());
        self::assertSame($model->toArray(), $model->getArrayCopy());
    }

    public function testIsIterableForIterableTypeHints(): void
    {
        $consume = static fn (iterable $values): int => \count([...$values]);

        self::assertSame(0, $consume($this->createModel()));

        $model = $this->createModel();
        $model->setName('n');
        $model['extra'] = 'e';

        self::assertSame(2, $consume($model));
    }

    public function testUninitializedNonNullableGetterDoesNotBreakToArray(): void
    {
        $model = new StubNonNullableGetterModel();
        $model['extra'] = 'kept';

        self::assertSame(['status' => 'draft', 'extra' => 'kept'], $model->toArray());
        self::assertSame('{"status":"draft","extra":"kept"}', json_encode($model));
        self::assertCount(2, $model);
        self::assertSame(['status' => 'draft', 'extra' => 'kept'], iterator_to_array($model));
    }

    public function testOffsetExistsOnUninitializedNonNullableProperty(): void
    {
        $model = new StubNonNullableGetterModel();

        self::assertFalse($model->offsetExists('id'));

        $model->setId('i');

        self::assertTrue($model->offsetExists('id'));
        self::assertSame(['id' => 'i', 'status' => 'draft'], $model->toArray());
    }

    public function testUninitializedPropertyWithDefaultValueIsStillExposed(): void
    {
        $model = new StubNonNullableGetterModel();
        $model->setId('i');

        self::assertTrue($model->offsetExists('status'));
        self::assertSame(['id' => 'i', 'status' => 'draft'], $model->toArray());
    }
}

/**
 * Mirrors a generated extension-container model: the `_attachment` wire name is
 * mapped onto the `attachment` PHP property through its accessors.
 */
class StubAdditionalPropertiesModel implements \AdditionalPropertiesInterface
{
    use \AdditionalAndPatternProperties;

    private array $initialized = [];

    public ?string $attachment = null;

    public ?string $name = null;

    public function isInitialized(string $property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function definedProperties(): array
    {
        return [
            'attachment' => ['_attachment', 'getAttachment', 'setAttachment'],
            'name' => ['name', 'getName', 'setName'],
        ];
    }

    public function getAttachment(): ?string
    {
        return $this->attachment;
    }

    public function setAttachment(?string $attachment): void
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->initialized['name'] = true;
        $this->name = $name;
    }
}

/**
 * Mirrors a generated model with a required property: the backing field is
 * untyped (defaults to null) while the getter is non-nullable, so calling the
 * getter before the property is initialized throws a TypeError (GH#1034).
 */
class StubNonNullableGetterModel implements \AdditionalPropertiesInterface
{
    use \AdditionalAndPatternProperties;

    private array $initialized = [];

    protected $id;

    protected $status = 'draft';

    public function isInitialized(string $property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function definedProperties(): array
    {
        return [
            'id' => ['id', 'getId', 'setId'],
            'status' => ['status', 'getStatus', 'setStatus'],
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->initialized['id'] = true;
        $this->id = $id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->initialized['status'] = true;
        $this->status = $status;
    }
}
