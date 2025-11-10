<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemAuthenticationKey
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
     * Authentication Key ID
     *
     * @var int
     */
    protected $keyId;
    /**
     * Authentication Key value
     *
     * @var string
     */
    protected $key;
    /**
     * Authentication Key Type
     *
     * @var string
     */
    protected $keyType;
    /**
     * Authentication Key ID
     *
     * @return int
     */
    public function getKeyId(): int
    {
        return $this->keyId;
    }
    /**
     * Authentication Key ID
     *
     * @param int $keyId
     *
     * @return self
     */
    public function setKeyId(int $keyId): self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * Authentication Key value
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * Authentication Key value
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * Authentication Key Type
     *
     * @return string
     */
    public function getKeyType(): string
    {
        return $this->keyType;
    }
    /**
     * Authentication Key Type
     *
     * @param string $keyType
     *
     * @return self
     */
    public function setKeyType(string $keyType): self
    {
        $this->initialized['keyType'] = true;
        $this->keyType = $keyType;
        return $this;
    }
}