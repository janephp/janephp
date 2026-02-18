<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseByoipPrefixCreate extends \ArrayObject
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
     * The unique identifier for the BYOIP prefix
     *
     * @var string
     */
    protected $uuid;
    /**
     * The region where the prefix is created
     *
     * @var string
     */
    protected $region;
    /**
     * The status of the BYOIP prefix
     *
     * @var string
     */
    protected $status;
    /**
     * The unique identifier for the BYOIP prefix
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * The unique identifier for the BYOIP prefix
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
     * The region where the prefix is created
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The region where the prefix is created
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
     * The status of the BYOIP prefix
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The status of the BYOIP prefix
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}