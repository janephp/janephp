<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ActionsPublicKey implements AdditionalPropertiesInterface
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
     * The identifier for the key.
     *
     * @var string
     */
    protected $keyId;
    /**
     * The Base64 encoded public key.
     *
     * @var string
     */
    protected $key;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * The identifier for the key.
     *
     * @return string
     */
    public function getKeyId(): string
    {
        return $this->keyId;
    }
    /**
     * The identifier for the key.
     *
     * @param string $keyId
     *
     * @return self
     */
    public function setKeyId(string $keyId): self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * The Base64 encoded public key.
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * The Base64 encoded public key.
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['keyId' => ['key_id', 'getKeyId', 'setKeyId'], 'key' => ['key', 'getKey', 'setKey'], 'id' => ['id', 'getId', 'setId'], 'url' => ['url', 'getUrl', 'setUrl'], 'title' => ['title', 'getTitle', 'setTitle'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt']];
    }
}