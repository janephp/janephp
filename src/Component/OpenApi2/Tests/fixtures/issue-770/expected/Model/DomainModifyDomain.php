<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DomainModifyDomain
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
    protected $name;
    /**
     * domain type
     *
     * @var string
     */
    protected $domainType;
    /**
     * @var string
     */
    protected $description;
    /**
     * Zero Touch enable/disable
     *
     * @var bool
     */
    protected $zeroTouchStatus;
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
     * domain type
     *
     * @return string
     */
    public function getDomainType(): string
    {
        return $this->domainType;
    }
    /**
     * domain type
     *
     * @param string $domainType
     *
     * @return self
     */
    public function setDomainType(string $domainType): self
    {
        $this->initialized['domainType'] = true;
        $this->domainType = $domainType;
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
     * Zero Touch enable/disable
     *
     * @return bool
     */
    public function getZeroTouchStatus(): bool
    {
        return $this->zeroTouchStatus;
    }
    /**
     * Zero Touch enable/disable 
     *
     * @param bool $zeroTouchStatus
     *
     * @return self
     */
    public function setZeroTouchStatus(bool $zeroTouchStatus): self
    {
        $this->initialized['zeroTouchStatus'] = true;
        $this->zeroTouchStatus = $zeroTouchStatus;
        return $this;
    }
}