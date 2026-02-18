<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DeviceCapacityDevicesSummary
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
     * maximum ap capacity per cluster.
     *
     * @var int
     */
    protected $maxApOfCluster;
    /**
     * maximum switch capacity per cluster.
     *
     * @var int
     */
    protected $maxSwitchOfCluster;
    /**
     * maximum ap capacity of this node.
     *
     * @var int
     */
    protected $apCapacity;
    /**
     * maximum switch capacity of this node.
     *
     * @var int
     */
    protected $switchCapacity;
    /**
     * maximum total ap capacity of this node.
     *
     * @var int
     */
    protected $totalApCapacity;
    /**
     * maximum total switch capacity of this node.
     *
     * @var int
     */
    protected $totalSwitchCapacity;
    /**
     * total remaining ap capacity of this node.
     *
     * @var int
     */
    protected $totalRemainingApCapacity;
    /**
     * total remaining switch capacity of this node.
     *
     * @var int
     */
    protected $totalRemainingSwitchCapacity;
    /**
     * connected aps in this node.
     *
     * @var int
     */
    protected $aps;
    /**
     * connected Aps with dual radios type
     *
     * @var int
     */
    protected $dualRadioAps;
    /**
     * connected Aps with three radios type
     *
     * @var int
     */
    protected $triRadioAps;
    /**
     * connected switches in this node.
     *
     * @var int
     */
    protected $switches;
    /**
     * total connected aps in the cluster.
     *
     * @var int
     */
    protected $totalAps;
    /**
     * total connected switches in the cluster.
     *
     * @var int
     */
    protected $totalSwitches;
    /**
     * total remaining DPs of the cluster.
     *
     * @var int
     */
    protected $totalRemainingDps;
    /**
     * total connected DPs in the cluster.
     *
     * @var int
     */
    protected $totalConnectedDps;
    /**
     * maximum total DP capacity of the cluster.
     *
     * @var int
     */
    protected $totalDpCapacity;
    /**
     * maximum ap capacity per cluster.
     *
     * @return int
     */
    public function getMaxApOfCluster(): int
    {
        return $this->maxApOfCluster;
    }
    /**
     * maximum ap capacity per cluster.
     *
     * @param int $maxApOfCluster
     *
     * @return self
     */
    public function setMaxApOfCluster(int $maxApOfCluster): self
    {
        $this->initialized['maxApOfCluster'] = true;
        $this->maxApOfCluster = $maxApOfCluster;
        return $this;
    }
    /**
     * maximum switch capacity per cluster.
     *
     * @return int
     */
    public function getMaxSwitchOfCluster(): int
    {
        return $this->maxSwitchOfCluster;
    }
    /**
     * maximum switch capacity per cluster.
     *
     * @param int $maxSwitchOfCluster
     *
     * @return self
     */
    public function setMaxSwitchOfCluster(int $maxSwitchOfCluster): self
    {
        $this->initialized['maxSwitchOfCluster'] = true;
        $this->maxSwitchOfCluster = $maxSwitchOfCluster;
        return $this;
    }
    /**
     * maximum ap capacity of this node.
     *
     * @return int
     */
    public function getApCapacity(): int
    {
        return $this->apCapacity;
    }
    /**
     * maximum ap capacity of this node.
     *
     * @param int $apCapacity
     *
     * @return self
     */
    public function setApCapacity(int $apCapacity): self
    {
        $this->initialized['apCapacity'] = true;
        $this->apCapacity = $apCapacity;
        return $this;
    }
    /**
     * maximum switch capacity of this node.
     *
     * @return int
     */
    public function getSwitchCapacity(): int
    {
        return $this->switchCapacity;
    }
    /**
     * maximum switch capacity of this node.
     *
     * @param int $switchCapacity
     *
     * @return self
     */
    public function setSwitchCapacity(int $switchCapacity): self
    {
        $this->initialized['switchCapacity'] = true;
        $this->switchCapacity = $switchCapacity;
        return $this;
    }
    /**
     * maximum total ap capacity of this node.
     *
     * @return int
     */
    public function getTotalApCapacity(): int
    {
        return $this->totalApCapacity;
    }
    /**
     * maximum total ap capacity of this node.
     *
     * @param int $totalApCapacity
     *
     * @return self
     */
    public function setTotalApCapacity(int $totalApCapacity): self
    {
        $this->initialized['totalApCapacity'] = true;
        $this->totalApCapacity = $totalApCapacity;
        return $this;
    }
    /**
     * maximum total switch capacity of this node.
     *
     * @return int
     */
    public function getTotalSwitchCapacity(): int
    {
        return $this->totalSwitchCapacity;
    }
    /**
     * maximum total switch capacity of this node.
     *
     * @param int $totalSwitchCapacity
     *
     * @return self
     */
    public function setTotalSwitchCapacity(int $totalSwitchCapacity): self
    {
        $this->initialized['totalSwitchCapacity'] = true;
        $this->totalSwitchCapacity = $totalSwitchCapacity;
        return $this;
    }
    /**
     * total remaining ap capacity of this node.
     *
     * @return int
     */
    public function getTotalRemainingApCapacity(): int
    {
        return $this->totalRemainingApCapacity;
    }
    /**
     * total remaining ap capacity of this node.
     *
     * @param int $totalRemainingApCapacity
     *
     * @return self
     */
    public function setTotalRemainingApCapacity(int $totalRemainingApCapacity): self
    {
        $this->initialized['totalRemainingApCapacity'] = true;
        $this->totalRemainingApCapacity = $totalRemainingApCapacity;
        return $this;
    }
    /**
     * total remaining switch capacity of this node.
     *
     * @return int
     */
    public function getTotalRemainingSwitchCapacity(): int
    {
        return $this->totalRemainingSwitchCapacity;
    }
    /**
     * total remaining switch capacity of this node.
     *
     * @param int $totalRemainingSwitchCapacity
     *
     * @return self
     */
    public function setTotalRemainingSwitchCapacity(int $totalRemainingSwitchCapacity): self
    {
        $this->initialized['totalRemainingSwitchCapacity'] = true;
        $this->totalRemainingSwitchCapacity = $totalRemainingSwitchCapacity;
        return $this;
    }
    /**
     * connected aps in this node.
     *
     * @return int
     */
    public function getAps(): int
    {
        return $this->aps;
    }
    /**
     * connected aps in this node.
     *
     * @param int $aps
     *
     * @return self
     */
    public function setAps(int $aps): self
    {
        $this->initialized['aps'] = true;
        $this->aps = $aps;
        return $this;
    }
    /**
     * connected Aps with dual radios type
     *
     * @return int
     */
    public function getDualRadioAps(): int
    {
        return $this->dualRadioAps;
    }
    /**
     * connected Aps with dual radios type
     *
     * @param int $dualRadioAps
     *
     * @return self
     */
    public function setDualRadioAps(int $dualRadioAps): self
    {
        $this->initialized['dualRadioAps'] = true;
        $this->dualRadioAps = $dualRadioAps;
        return $this;
    }
    /**
     * connected Aps with three radios type
     *
     * @return int
     */
    public function getTriRadioAps(): int
    {
        return $this->triRadioAps;
    }
    /**
     * connected Aps with three radios type
     *
     * @param int $triRadioAps
     *
     * @return self
     */
    public function setTriRadioAps(int $triRadioAps): self
    {
        $this->initialized['triRadioAps'] = true;
        $this->triRadioAps = $triRadioAps;
        return $this;
    }
    /**
     * connected switches in this node.
     *
     * @return int
     */
    public function getSwitches(): int
    {
        return $this->switches;
    }
    /**
     * connected switches in this node.
     *
     * @param int $switches
     *
     * @return self
     */
    public function setSwitches(int $switches): self
    {
        $this->initialized['switches'] = true;
        $this->switches = $switches;
        return $this;
    }
    /**
     * total connected aps in the cluster.
     *
     * @return int
     */
    public function getTotalAps(): int
    {
        return $this->totalAps;
    }
    /**
     * total connected aps in the cluster.
     *
     * @param int $totalAps
     *
     * @return self
     */
    public function setTotalAps(int $totalAps): self
    {
        $this->initialized['totalAps'] = true;
        $this->totalAps = $totalAps;
        return $this;
    }
    /**
     * total connected switches in the cluster.
     *
     * @return int
     */
    public function getTotalSwitches(): int
    {
        return $this->totalSwitches;
    }
    /**
     * total connected switches in the cluster.
     *
     * @param int $totalSwitches
     *
     * @return self
     */
    public function setTotalSwitches(int $totalSwitches): self
    {
        $this->initialized['totalSwitches'] = true;
        $this->totalSwitches = $totalSwitches;
        return $this;
    }
    /**
     * total remaining DPs of the cluster.
     *
     * @return int
     */
    public function getTotalRemainingDps(): int
    {
        return $this->totalRemainingDps;
    }
    /**
     * total remaining DPs of the cluster.
     *
     * @param int $totalRemainingDps
     *
     * @return self
     */
    public function setTotalRemainingDps(int $totalRemainingDps): self
    {
        $this->initialized['totalRemainingDps'] = true;
        $this->totalRemainingDps = $totalRemainingDps;
        return $this;
    }
    /**
     * total connected DPs in the cluster.
     *
     * @return int
     */
    public function getTotalConnectedDps(): int
    {
        return $this->totalConnectedDps;
    }
    /**
     * total connected DPs in the cluster.
     *
     * @param int $totalConnectedDps
     *
     * @return self
     */
    public function setTotalConnectedDps(int $totalConnectedDps): self
    {
        $this->initialized['totalConnectedDps'] = true;
        $this->totalConnectedDps = $totalConnectedDps;
        return $this;
    }
    /**
     * maximum total DP capacity of the cluster.
     *
     * @return int
     */
    public function getTotalDpCapacity(): int
    {
        return $this->totalDpCapacity;
    }
    /**
     * maximum total DP capacity of the cluster.
     *
     * @param int $totalDpCapacity
     *
     * @return self
     */
    public function setTotalDpCapacity(int $totalDpCapacity): self
    {
        $this->initialized['totalDpCapacity'] = true;
        $this->totalDpCapacity = $totalDpCapacity;
        return $this;
    }
}