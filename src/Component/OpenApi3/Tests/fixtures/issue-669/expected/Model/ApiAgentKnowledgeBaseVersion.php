<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiAgentKnowledgeBaseVersion extends \ArrayObject
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
     * Deletet at date / time
     *
     * @var bool
     */
    protected $isDeleted;
    /**
     * Name of the knowledge base
     *
     * @var string
     */
    protected $name;
    /**
     * Unique id of the knowledge base
     *
     * @var string
     */
    protected $uuid;
    /**
     * Deletet at date / time
     *
     * @return bool
     */
    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }
    /**
     * Deletet at date / time
     *
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted): self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;
        return $this;
    }
    /**
     * Name of the knowledge base
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the knowledge base
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Unique id of the knowledge base
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique id of the knowledge base
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
}