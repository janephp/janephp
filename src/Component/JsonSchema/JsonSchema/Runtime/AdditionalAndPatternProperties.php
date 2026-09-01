<?php

namespace Jane\Component\JsonSchema\JsonSchema\Runtime;

trait AdditionalAndPatternProperties
{
    private array $extraProperties = [];

    /**
     * @return array<string, string> PHP property name => serialized (wire) name
     */
    public function definedProperties(): array
    {
        return [];
    }

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
            if ($wireName === $offset) {
                return $this->{$phpName} ?? null;
            }
        }

        return $this->extraProperties[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        foreach ($this->definedProperties() as $phpName => $wireName) {
            if ($wireName === $offset) {
                $this->{$phpName} = $value;

                return;
            }
        }

        $this->extraProperties[$offset] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        foreach ($this->definedProperties() as $phpName => $wireName) {
            if ($wireName === $offset) {
                $this->{$phpName} = null;

                return;
            }
        }

        unset($this->extraProperties[$offset]);
    }

    public function count(): int
    {
        return \count($this->toArray());
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->toArray());
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $publicProperties = get_object_vars($this);
        $values = [];
        foreach ($this->definedProperties() as $phpName => $wireName) {
            if ('extraProperties' === $phpName) {
                continue;
            }
            $value = $this->{$phpName} ?? null;
            if (\array_key_exists($phpName, $publicProperties) || null !== $value) {
                $values[$wireName] = $value;
            }
        }

        return $values + $this->extraProperties;
    }

    public function getArrayCopy(): array
    {
        return $this->toArray();
    }

    public function additionalPropertyEntries(): \Iterator
    {
        yield from $this->extraProperties;
    }

    public function jsonSerialize(): mixed
    {
        $values = $this->toArray();

        if ([] === $values) {
            return new \stdClass();
        }

        return $values;
    }
}