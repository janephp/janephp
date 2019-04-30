<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Exception\CircularReferenceException;

class Context
{
    private $referenceRegistry = [];

    private $countReferenceRegistry = [];

    private $groups;

    private $depth;

    private $object;

    private $circularReferenceLimit;

    private $circularReferenceHandler;

    private $attributes;

    private $ignoredAttributes;

    private $constructorArguments = [];

    public function __construct(array $groups = null, array $attributes = null, array $ignoredAttributes = null)
    {
        $this->groups = $groups;
        $this->depth = 0;
        $this->attributes = $attributes;
        $this->ignoredAttributes = $ignoredAttributes;
    }

    public function shouldHandleCircularReference($reference, ?int $circularReferenceLimit = null): bool
    {
        if (!isset($this->referenceRegistry[$reference])) {
            return false;
        }

        if (null === $circularReferenceLimit) {
            $circularReferenceLimit = $this->circularReferenceLimit;
        }

        if (null !== $circularReferenceLimit) {
            return $this->countReferenceRegistry[$reference] >= $circularReferenceLimit;
        }

        return true;
    }

    public function &handleCircularReference(string $reference, $object, ?int $circularReferenceLimit = null, callable $callback = null)
    {
        if (null === $callback) {
            $callback = $this->circularReferenceHandler;
        }

        if (null !== $callback) {
            $value = $callback($object, $this);

            return $value;
        }

        if (null === $circularReferenceLimit) {
            $circularReferenceLimit = $this->circularReferenceLimit;
        }

        if (null !== $circularReferenceLimit && $this->countReferenceRegistry[$reference] >= $circularReferenceLimit) {
            throw new CircularReferenceException(sprintf('A circular reference has been detected when mapping the object of type "%s" (configured limit: %d)', \is_object($object) ? \get_class($object) : 'array', $circularReferenceLimit));
        }

        // When no limit defined return the object referenced
        ++$this->countReferenceRegistry[$reference];

        return $this->referenceRegistry[$reference];
    }

    public function getGroups(): ?array
    {
        return $this->groups;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function setObjectToPopulate($object)
    {
        $this->object = $object;
    }

    public function getObjectToPopulate()
    {
        $object = $this->object;

        if ($object !== null) {
            $this->object = null;
        }

        return $object;
    }

    public function setCircularReferenceLimit(?int $circularReferenceLimit): void
    {
        $this->circularReferenceLimit = $circularReferenceLimit;
    }

    public function setCircularReferenceHandler(?callable $circularReferenceHandler): void
    {
        $this->circularReferenceHandler = $circularReferenceHandler;
    }

    public function withReference($reference, &$object): self
    {
        $new = clone $this;

        $new->referenceRegistry[$reference] = &$object;
        $new->countReferenceRegistry[$reference] = 1;

        return $new;
    }

    public function isAllowedAttribute(string $attribute): bool
    {
        if ($this->ignoredAttributes !== null && \in_array($attribute, $this->ignoredAttributes, true)) {
            return false;
        }

        if ($this->attributes === null) {
            return true;
        }

        return \in_array($attribute, $this->attributes, true);
    }

    public function withIncrementedDepth(): self
    {
        $new = clone $this;
        ++$new->depth;

        return $new;
    }

    public function setConstructorArgument(string $class, string $key, $value): void
    {
        if ($this->constructorArguments[$class] ?? false) {
            $this->constructorArguments[$class] = [];
        }

        $this->constructorArguments[$class][$key] = $value;
    }

    public function hasConstructorArgument(string $class, string $key): bool
    {
        return \array_key_exists($key, $this->constructorArguments[$class] ?? []);
    }

    public function getConstructorArgument(string $class, string $key)
    {
        return $this->constructorArguments[$class][$key];
    }

    public function withNewContext(string $attribute): self
    {
        if ($this->attributes === null) {
            return $this;
        }

        $new = clone $this;

        if ($this->ignoredAttributes !== null && isset($this->ignoredAttributes[$attribute]) && \is_array($this->ignoredAttributes[$attribute])) {
            $new->ignoredAttributes = $this->ignoredAttributes[$attribute];
        }

        if ($this->attributes !== null && isset($this->attributes[$attribute]) && \is_array($this->attributes[$attribute])) {
            $new->attributes = $this->attributes[$attribute];
        }

        return $new;
    }
}
