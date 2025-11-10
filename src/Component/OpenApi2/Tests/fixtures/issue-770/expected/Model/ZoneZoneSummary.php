<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneZoneSummary
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
     * Identifier of the zone
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the zone
     *
     * @var string
     */
    protected $name;
    /**
     * Name of the zone
     *
     * @var string
     */
    protected $serviceName;
    /**
     * Identifier of the zone
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the zone
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
     * Name of the zone
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the zone
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
     * Name of the zone
     *
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }
    /**
     * Name of the zone
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName): self
    {
        $this->initialized['serviceName'] = true;
        $this->serviceName = $serviceName;
        return $this;
    }
}