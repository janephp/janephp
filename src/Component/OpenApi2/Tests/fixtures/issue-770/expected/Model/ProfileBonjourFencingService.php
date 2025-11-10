<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBonjourFencingService
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
    protected $sourceType;
    /**
     * @var string
     */
    protected $neighborApMac;
    /**
     * @var string
     */
    protected $neighborApName;
    /**
     * Bonjour Service Type
     *
     * @var string
     */
    protected $serviceType;
    /**
     * @return string
     */
    public function getSourceType(): string
    {
        return $this->sourceType;
    }
    /**
     * @param string $sourceType
     *
     * @return self
     */
    public function setSourceType(string $sourceType): self
    {
        $this->initialized['sourceType'] = true;
        $this->sourceType = $sourceType;
        return $this;
    }
    /**
     * @return string
     */
    public function getNeighborApMac(): string
    {
        return $this->neighborApMac;
    }
    /**
     * @param string $neighborApMac
     *
     * @return self
     */
    public function setNeighborApMac(string $neighborApMac): self
    {
        $this->initialized['neighborApMac'] = true;
        $this->neighborApMac = $neighborApMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getNeighborApName(): string
    {
        return $this->neighborApName;
    }
    /**
     * @param string $neighborApName
     *
     * @return self
     */
    public function setNeighborApName(string $neighborApName): self
    {
        $this->initialized['neighborApName'] = true;
        $this->neighborApName = $neighborApName;
        return $this;
    }
    /**
     * Bonjour Service Type
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Bonjour Service Type
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
}