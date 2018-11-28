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

    public function __construct(array $groups = null)
    {
        $this->groups = $groups;
        $this->depth = 0;
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
            return $callback($object, $this);
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
        return $this->object;
    }

    public function getCircularReferenceLimit(): ?int
    {
        return $this->circularReferenceLimit;
    }

    public function setCircularReferenceLimit(?int $circularReferenceLimit): void
    {
        $this->circularReferenceLimit = $circularReferenceLimit;
    }

    public function withReference($reference, &$object): self
    {
        $new = clone $this;

        $new->referenceRegistry[$reference] = &$object;
        $new->countReferenceRegistry[$reference] = 1;

        return $new;
    }

    public function withIncrementedDepth(): self
    {
        $new = clone $this;
        ++$new->depth;

        return $new;
    }
}
