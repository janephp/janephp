<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiAgentGuardrail extends \ArrayObject
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
     * @var string
     */
    protected $agentUuid;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $defaultResponse;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $guardrailUuid;
    /**
     * @var bool
     */
    protected $isAttached;
    /**
     * @var bool
     */
    protected $isDefault;
    /**
     * @var array<string, mixed>
     */
    protected $metadata;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $priority;
    /**
     * @var string
     */
    protected $type = 'GUARDRAIL_TYPE_UNKNOWN';
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var string
     */
    protected $uuid;
    /**
     * @return string
     */
    public function getAgentUuid(): string
    {
        return $this->agentUuid;
    }
    /**
     * @param string $agentUuid
     *
     * @return self
     */
    public function setAgentUuid(string $agentUuid): self
    {
        $this->initialized['agentUuid'] = true;
        $this->agentUuid = $agentUuid;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getDefaultResponse(): string
    {
        return $this->defaultResponse;
    }
    /**
     * @param string $defaultResponse
     *
     * @return self
     */
    public function setDefaultResponse(string $defaultResponse): self
    {
        $this->initialized['defaultResponse'] = true;
        $this->defaultResponse = $defaultResponse;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getGuardrailUuid(): string
    {
        return $this->guardrailUuid;
    }
    /**
     * @param string $guardrailUuid
     *
     * @return self
     */
    public function setGuardrailUuid(string $guardrailUuid): self
    {
        $this->initialized['guardrailUuid'] = true;
        $this->guardrailUuid = $guardrailUuid;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }
    /**
     * @param bool $isAttached
     *
     * @return self
     */
    public function setIsAttached(bool $isAttached): self
    {
        $this->initialized['isAttached'] = true;
        $this->isAttached = $isAttached;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * @return array<string, mixed>
     */
    public function getMetadata(): iterable
    {
        return $this->metadata;
    }
    /**
     * @param array<string, mixed> $metadata
     *
     * @return self
     */
    public function setMetadata(iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
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