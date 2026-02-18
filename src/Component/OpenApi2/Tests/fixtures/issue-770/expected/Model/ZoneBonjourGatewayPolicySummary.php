<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneBonjourGatewayPolicySummary
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
     * Identifier of the bonjour gateway policy
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the bonjour gateway policy
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the bonjour gateway policy
     *
     * @var string
     */
    protected $description;
    /**
     * Last modified user of the bonjour gateway policy
     *
     * @var string
     */
    protected $lastModifiedBy;
    /**
     * Last modified time of the bonjour gateway policy
     *
     * @var string
     */
    protected $lastModifiedOn;
    /**
     * Identifier of the bonjour gateway policy
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the bonjour gateway policy
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
     * Name of the bonjour gateway policy
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the bonjour gateway policy
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
     * Description of the bonjour gateway policy
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the bonjour gateway policy
     *
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
     * Last modified user of the bonjour gateway policy
     *
     * @return string
     */
    public function getLastModifiedBy(): string
    {
        return $this->lastModifiedBy;
    }
    /**
     * Last modified user of the bonjour gateway policy
     *
     * @param string $lastModifiedBy
     *
     * @return self
     */
    public function setLastModifiedBy(string $lastModifiedBy): self
    {
        $this->initialized['lastModifiedBy'] = true;
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }
    /**
     * Last modified time of the bonjour gateway policy
     *
     * @return string
     */
    public function getLastModifiedOn(): string
    {
        return $this->lastModifiedOn;
    }
    /**
     * Last modified time of the bonjour gateway policy
     *
     * @param string $lastModifiedOn
     *
     * @return self
     */
    public function setLastModifiedOn(string $lastModifiedOn): self
    {
        $this->initialized['lastModifiedOn'] = true;
        $this->lastModifiedOn = $lastModifiedOn;
        return $this;
    }
}