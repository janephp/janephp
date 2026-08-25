<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseKeyUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var Key
     */
    protected $key;
    /**
     * @return Key
     */
    public function getKey(): Key
    {
        return $this->key;
    }
    /**
     * @param Key $key
     *
     * @return self
     */
    public function setKey(Key $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['key' => ['key', 'getKey', 'setKey']];
    }
}