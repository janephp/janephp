<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseKeyCreate extends \ArrayObject
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
     * @var KeyCreateResponse
     */
    protected $key;
    /**
     * @return KeyCreateResponse
     */
    public function getKey(): KeyCreateResponse
    {
        return $this->key;
    }
    /**
     * @param KeyCreateResponse $key
     *
     * @return self
     */
    public function setKey(KeyCreateResponse $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}