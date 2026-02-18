<?php

namespace Jane\Generated\DigitalOcean\Model;

class NamespaceInfo extends \ArrayObject
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
     * The namespace's API hostname. Each function in a namespace is provided an endpoint at the namespace's hostname.
     *
     * @var string
     */
    protected $apiHost;
    /**
     * A unique string format of UUID with a prefix fn-.
     *
     * @var string
     */
    protected $namespace;
    /**
     * UTC time string.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * UTC time string.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * The namespace's unique name.
     *
     * @var string
     */
    protected $label;
    /**
     * The namespace's datacenter region.
     *
     * @var string
     */
    protected $region;
    /**
     * The namespace's Universally Unique Identifier.
     *
     * @var string
     */
    protected $uuid;
    /**
     * A random alpha numeric string. This key is used in conjunction with the namespace's UUID to authenticate
     * a user to use the namespace via `doctl`, DigitalOcean's official CLI.
     *
     * @var string
     */
    protected $key;
    /**
     * The namespace's API hostname. Each function in a namespace is provided an endpoint at the namespace's hostname.
     *
     * @return string
     */
    public function getApiHost(): string
    {
        return $this->apiHost;
    }
    /**
     * The namespace's API hostname. Each function in a namespace is provided an endpoint at the namespace's hostname.
     *
     * @param string $apiHost
     *
     * @return self
     */
    public function setApiHost(string $apiHost): self
    {
        $this->initialized['apiHost'] = true;
        $this->apiHost = $apiHost;
        return $this;
    }
    /**
     * A unique string format of UUID with a prefix fn-.
     *
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }
    /**
     * A unique string format of UUID with a prefix fn-.
     *
     * @param string $namespace
     *
     * @return self
     */
    public function setNamespace(string $namespace): self
    {
        $this->initialized['namespace'] = true;
        $this->namespace = $namespace;
        return $this;
    }
    /**
     * UTC time string.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * UTC time string.
     *
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
    /**
     * UTC time string.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * UTC time string.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The namespace's unique name.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * The namespace's unique name.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * The namespace's datacenter region.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The namespace's datacenter region.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The namespace's Universally Unique Identifier.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * The namespace's Universally Unique Identifier.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * A random alpha numeric string. This key is used in conjunction with the namespace's UUID to authenticate
     * a user to use the namespace via `doctl`, DigitalOcean's official CLI.
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
    * A random alpha numeric string. This key is used in conjunction with the namespace's UUID to authenticate
    a user to use the namespace via `doctl`, DigitalOcean's official CLI.
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
}