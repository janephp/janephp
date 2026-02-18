<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ToolSpeedFlex
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
     * SpeedFlex tool
     *
     * @var string
     */
    protected $tool;
    /**
     * Protocol used in the SpeedFlex test
     *
     * @var string
     */
    protected $protocol;
    /**
     * Test model
     *
     * @var string
     */
    protected $model;
    /**
     * @var string
     */
    protected $clientIp;
    /**
     * @var string
     */
    protected $clientMac;
    /**
     * @var string
     */
    protected $serverIp;
    /**
     * @var string
     */
    protected $serverMac;
    /**
     * Packet Length
     *
     * @var int
     */
    protected $syspmtu = 1472;
    /**
     * SpeedFlex tool
     *
     * @return string
     */
    public function getTool(): string
    {
        return $this->tool;
    }
    /**
     * SpeedFlex tool
     *
     * @param string $tool
     *
     * @return self
     */
    public function setTool(string $tool): self
    {
        $this->initialized['tool'] = true;
        $this->tool = $tool;
        return $this;
    }
    /**
     * Protocol used in the SpeedFlex test
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * Protocol used in the SpeedFlex test
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Test model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * Test model
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
     * @return string
     */
    public function getClientIp(): string
    {
        return $this->clientIp;
    }
    /**
     * @param string $clientIp
     *
     * @return self
     */
    public function setClientIp(string $clientIp): self
    {
        $this->initialized['clientIp'] = true;
        $this->clientIp = $clientIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getClientMac(): string
    {
        return $this->clientMac;
    }
    /**
     * @param string $clientMac
     *
     * @return self
     */
    public function setClientMac(string $clientMac): self
    {
        $this->initialized['clientMac'] = true;
        $this->clientMac = $clientMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getServerIp(): string
    {
        return $this->serverIp;
    }
    /**
     * @param string $serverIp
     *
     * @return self
     */
    public function setServerIp(string $serverIp): self
    {
        $this->initialized['serverIp'] = true;
        $this->serverIp = $serverIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getServerMac(): string
    {
        return $this->serverMac;
    }
    /**
     * @param string $serverMac
     *
     * @return self
     */
    public function setServerMac(string $serverMac): self
    {
        $this->initialized['serverMac'] = true;
        $this->serverMac = $serverMac;
        return $this;
    }
    /**
     * Packet Length
     *
     * @return int
     */
    public function getSyspmtu(): int
    {
        return $this->syspmtu;
    }
    /**
     * Packet Length
     *
     * @param int $syspmtu
     *
     * @return self
     */
    public function setSyspmtu(int $syspmtu): self
    {
        $this->initialized['syspmtu'] = true;
        $this->syspmtu = $syspmtu;
        return $this;
    }
}