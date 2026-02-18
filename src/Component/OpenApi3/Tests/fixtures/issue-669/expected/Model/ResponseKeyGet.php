<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseKeyGet extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<Key>
     */
    protected $keys;
    /**
     * @return list<Key>
     */
    public function getKeys(): array
    {
        return $this->keys;
    }
    /**
     * @param list<Key> $keys
     *
     * @return self
     */
    public function setKeys(array $keys): self
    {
        $this->initialized['keys'] = true;
        $this->keys = $keys;
        return $this;
    }
}