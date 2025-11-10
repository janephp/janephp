<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileEthernetPortProfileConfig
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
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $userSidePortMaxClient = 8;
    /**
     * @var int
     */
    protected $userSidePortUplinkLimit = 0;
    /**
     * @var int
     */
    protected $userSidePortDownlinkLimit = 0;
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
     * @return int
     */
    public function getUserSidePortMaxClient(): int
    {
        return $this->userSidePortMaxClient;
    }
    /**
     * @param int $userSidePortMaxClient
     *
     * @return self
     */
    public function setUserSidePortMaxClient(int $userSidePortMaxClient): self
    {
        $this->initialized['userSidePortMaxClient'] = true;
        $this->userSidePortMaxClient = $userSidePortMaxClient;
        return $this;
    }
    /**
     * @return int
     */
    public function getUserSidePortUplinkLimit(): int
    {
        return $this->userSidePortUplinkLimit;
    }
    /**
     * @param int $userSidePortUplinkLimit
     *
     * @return self
     */
    public function setUserSidePortUplinkLimit(int $userSidePortUplinkLimit): self
    {
        $this->initialized['userSidePortUplinkLimit'] = true;
        $this->userSidePortUplinkLimit = $userSidePortUplinkLimit;
        return $this;
    }
    /**
     * @return int
     */
    public function getUserSidePortDownlinkLimit(): int
    {
        return $this->userSidePortDownlinkLimit;
    }
    /**
     * @param int $userSidePortDownlinkLimit
     *
     * @return self
     */
    public function setUserSidePortDownlinkLimit(int $userSidePortDownlinkLimit): self
    {
        $this->initialized['userSidePortDownlinkLimit'] = true;
        $this->userSidePortDownlinkLimit = $userSidePortDownlinkLimit;
        return $this;
    }
}