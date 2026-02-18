<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonBaseServiceInfo
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
     * ID of service
     *
     * @var string
     */
    protected $id;
    /**
     * ID of service
     *
     * @var string
     */
    protected $serviceId;
    /**
     * Name of service
     *
     * @var string
     */
    protected $serviceName;
    /**
     * Type of service
     *
     * @var string
     */
    protected $serviceType;
    /**
     * ID of service
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of service
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
     * ID of service
     *
     * @return string
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }
    /**
     * ID of service
     *
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId(string $serviceId): self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;
        return $this;
    }
    /**
     * Name of service
     *
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }
    /**
     * Name of service
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
    /**
     * Type of service
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Type of service
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