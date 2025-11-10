<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelCellularSettings
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
    protected $mobileAPName;
    /**
     * @var string
     */
    protected $mobileAPName2;
    /**
     * @var int
     */
    protected $simCardUsage;
    /**
     * @var int
     */
    protected $select3g4g;
    /**
     * @var int
     */
    protected $select3g4g2;
    /**
     * @var int
     */
    protected $dataRoaming;
    /**
     * @var int
     */
    protected $dataRoaming2;
    /**
     * @var int
     */
    protected $wanConnection;
    /**
     * @var int
     */
    protected $wanRecoveryTimer;
    /**
     * @return string
     */
    public function getMobileAPName(): string
    {
        return $this->mobileAPName;
    }
    /**
     * @param string $mobileAPName
     *
     * @return self
     */
    public function setMobileAPName(string $mobileAPName): self
    {
        $this->initialized['mobileAPName'] = true;
        $this->mobileAPName = $mobileAPName;
        return $this;
    }
    /**
     * @return string
     */
    public function getMobileAPName2(): string
    {
        return $this->mobileAPName2;
    }
    /**
     * @param string $mobileAPName2
     *
     * @return self
     */
    public function setMobileAPName2(string $mobileAPName2): self
    {
        $this->initialized['mobileAPName2'] = true;
        $this->mobileAPName2 = $mobileAPName2;
        return $this;
    }
    /**
     * @return int
     */
    public function getSimCardUsage(): int
    {
        return $this->simCardUsage;
    }
    /**
     * @param int $simCardUsage
     *
     * @return self
     */
    public function setSimCardUsage(int $simCardUsage): self
    {
        $this->initialized['simCardUsage'] = true;
        $this->simCardUsage = $simCardUsage;
        return $this;
    }
    /**
     * @return int
     */
    public function getSelect3g4g(): int
    {
        return $this->select3g4g;
    }
    /**
     * @param int $select3g4g
     *
     * @return self
     */
    public function setSelect3g4g(int $select3g4g): self
    {
        $this->initialized['select3g4g'] = true;
        $this->select3g4g = $select3g4g;
        return $this;
    }
    /**
     * @return int
     */
    public function getSelect3g4g2(): int
    {
        return $this->select3g4g2;
    }
    /**
     * @param int $select3g4g2
     *
     * @return self
     */
    public function setSelect3g4g2(int $select3g4g2): self
    {
        $this->initialized['select3g4g2'] = true;
        $this->select3g4g2 = $select3g4g2;
        return $this;
    }
    /**
     * @return int
     */
    public function getDataRoaming(): int
    {
        return $this->dataRoaming;
    }
    /**
     * @param int $dataRoaming
     *
     * @return self
     */
    public function setDataRoaming(int $dataRoaming): self
    {
        $this->initialized['dataRoaming'] = true;
        $this->dataRoaming = $dataRoaming;
        return $this;
    }
    /**
     * @return int
     */
    public function getDataRoaming2(): int
    {
        return $this->dataRoaming2;
    }
    /**
     * @param int $dataRoaming2
     *
     * @return self
     */
    public function setDataRoaming2(int $dataRoaming2): self
    {
        $this->initialized['dataRoaming2'] = true;
        $this->dataRoaming2 = $dataRoaming2;
        return $this;
    }
    /**
     * @return int
     */
    public function getWanConnection(): int
    {
        return $this->wanConnection;
    }
    /**
     * @param int $wanConnection
     *
     * @return self
     */
    public function setWanConnection(int $wanConnection): self
    {
        $this->initialized['wanConnection'] = true;
        $this->wanConnection = $wanConnection;
        return $this;
    }
    /**
     * @return int
     */
    public function getWanRecoveryTimer(): int
    {
        return $this->wanRecoveryTimer;
    }
    /**
     * @param int $wanRecoveryTimer
     *
     * @return self
     */
    public function setWanRecoveryTimer(int $wanRecoveryTimer): self
    {
        $this->initialized['wanRecoveryTimer'] = true;
        $this->wanRecoveryTimer = $wanRecoveryTimer;
        return $this;
    }
}