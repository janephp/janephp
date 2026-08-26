<?php

namespace Jane\Component\OpenApi31\JsonSchema\Runtime;

trait AdditionalAndPatternProperties
{
    private array $extraProperties = [];
    /**
     * @return array<string, array{0: string, 1: string, 2: string}>
     */
    public function definedProperties(): array
    {
        return [];
    }
    public function offsetExists(mixed $offset): bool
    {
        foreach ($this->definedProperties() as $phpName => $definition) {
            if ($definition[0] === $offset) {
                return $this->isInitialized($phpName) || null !== $this->{$definition[1]}();
            }
        }
        return \array_key_exists($offset, $this->extraProperties);
    }
    public function offsetGet(mixed $offset): mixed
    {
        foreach ($this->definedProperties() as $definition) {
            if ($definition[0] === $offset) {
                return $this->{$definition[1]}();
            }
        }
        return $this->extraProperties[$offset] ?? null;
    }
    public function offsetSet(mixed $offset, mixed $value): void
    {
        foreach ($this->definedProperties() as $definition) {
            if ($definition[0] === $offset) {
                $this->{$definition[2]}($value);
                return;
            }
        }
        $this->extraProperties[$offset] = $value;
    }
    public function offsetUnset(mixed $offset): void
    {
        foreach ($this->definedProperties() as $definition) {
            if ($definition[0] === $offset) {
                $this->{$definition[2]}(null);
                return;
            }
        }
        unset($this->extraProperties[$offset]);
    }
    public function count(): int
    {
        return \count($this->extraProperties);
    }
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->extraProperties);
    }
    /**
     * Only the additional/extension properties are exposed here, as well as
     * while iterating or counting, mirroring the legacy storage behaviour of
     * these extension-container models: declared properties lived in real
     * class properties and were invisible to iteration. They stay reachable
     * through their getters, offsetExists() and offsetGet().
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->extraProperties;
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
        // An empty PHP array would encode as [], so hand out an empty object instead,
        // keeping json_encode consistent with every other JSON object payload.
        if ([] === $values) {
            return new \stdClass();
        }
        return $values;
    }
}