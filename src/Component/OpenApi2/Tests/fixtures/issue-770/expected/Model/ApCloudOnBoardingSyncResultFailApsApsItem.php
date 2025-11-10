<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApCloudOnBoardingSyncResultFailApsApsItem
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
    protected $mac;
    /**
     * @var string
     */
    protected $serial;
    /**
     * The error message of failed provisions AP
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
     * @param string $mac
     *
     * @return self
     */
    public function setMac(string $mac): self
    {
        $this->initialized['mac'] = true;
        $this->mac = $mac;
        return $this;
    }
    /**
     * @return string
     */
    public function getSerial(): string
    {
        return $this->serial;
    }
    /**
     * @param string $serial
     *
     * @return self
     */
    public function setSerial(string $serial): self
    {
        $this->initialized['serial'] = true;
        $this->serial = $serial;
        return $this;
    }
    /**
     * The error message of failed provisions AP
     *
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
    /**
     * The error message of failed provisions AP
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
}