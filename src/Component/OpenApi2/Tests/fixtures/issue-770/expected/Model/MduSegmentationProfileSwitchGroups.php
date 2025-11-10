<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileSwitchGroups
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
     * Switch Group Id
     *
     * @var string
     */
    protected $id;
    /**
     * The Domain Id of Switch Group
     *
     * @var string
     */
    protected $domainId;
    /**
     * Switch Group name
     *
     * @var string
     */
    protected $name;
    /**
     * Switch Group Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Switch Group Id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The Domain Id of Switch Group
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * The Domain Id of Switch Group
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * Switch Group name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Switch Group name
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
}