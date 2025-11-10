<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemStatisticListItem
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
     * timestamp
     *
     * @var float
     */
    protected $timestamp;
    /**
     * @var SystemStatisticListItemCpu
     */
    protected $cpu;
    /**
     * @var SystemStatisticListItemDisk
     */
    protected $disk;
    /**
     * @var SystemStatisticListItemMemory
     */
    protected $memory;
    /**
     * @var SystemPortStatistic
     */
    protected $port0;
    /**
     * @var SystemPortStatistic
     */
    protected $port1;
    /**
     * @var SystemPortStatistic
     */
    protected $port2;
    /**
     * @var SystemPortStatistic
     */
    protected $port3;
    /**
     * @var SystemPortStatistic
     */
    protected $port4;
    /**
     * @var SystemPortStatistic
     */
    protected $port5;
    /**
     * @var SystemPortStatistic
     */
    protected $control;
    /**
     * @var SystemPortStatistic
     */
    protected $cluster;
    /**
     * @var SystemPortStatistic
     */
    protected $management;
    /**
     * timestamp
     *
     * @return float
     */
    public function getTimestamp(): float
    {
        return $this->timestamp;
    }
    /**
     * timestamp
     *
     * @param float $timestamp
     *
     * @return self
     */
    public function setTimestamp(float $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * @return SystemStatisticListItemCpu
     */
    public function getCpu(): SystemStatisticListItemCpu
    {
        return $this->cpu;
    }
    /**
     * @param SystemStatisticListItemCpu $cpu
     *
     * @return self
     */
    public function setCpu(SystemStatisticListItemCpu $cpu): self
    {
        $this->initialized['cpu'] = true;
        $this->cpu = $cpu;
        return $this;
    }
    /**
     * @return SystemStatisticListItemDisk
     */
    public function getDisk(): SystemStatisticListItemDisk
    {
        return $this->disk;
    }
    /**
     * @param SystemStatisticListItemDisk $disk
     *
     * @return self
     */
    public function setDisk(SystemStatisticListItemDisk $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;
        return $this;
    }
    /**
     * @return SystemStatisticListItemMemory
     */
    public function getMemory(): SystemStatisticListItemMemory
    {
        return $this->memory;
    }
    /**
     * @param SystemStatisticListItemMemory $memory
     *
     * @return self
     */
    public function setMemory(SystemStatisticListItemMemory $memory): self
    {
        $this->initialized['memory'] = true;
        $this->memory = $memory;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getPort0(): SystemPortStatistic
    {
        return $this->port0;
    }
    /**
     * @param SystemPortStatistic $port0
     *
     * @return self
     */
    public function setPort0(SystemPortStatistic $port0): self
    {
        $this->initialized['port0'] = true;
        $this->port0 = $port0;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getPort1(): SystemPortStatistic
    {
        return $this->port1;
    }
    /**
     * @param SystemPortStatistic $port1
     *
     * @return self
     */
    public function setPort1(SystemPortStatistic $port1): self
    {
        $this->initialized['port1'] = true;
        $this->port1 = $port1;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getPort2(): SystemPortStatistic
    {
        return $this->port2;
    }
    /**
     * @param SystemPortStatistic $port2
     *
     * @return self
     */
    public function setPort2(SystemPortStatistic $port2): self
    {
        $this->initialized['port2'] = true;
        $this->port2 = $port2;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getPort3(): SystemPortStatistic
    {
        return $this->port3;
    }
    /**
     * @param SystemPortStatistic $port3
     *
     * @return self
     */
    public function setPort3(SystemPortStatistic $port3): self
    {
        $this->initialized['port3'] = true;
        $this->port3 = $port3;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getPort4(): SystemPortStatistic
    {
        return $this->port4;
    }
    /**
     * @param SystemPortStatistic $port4
     *
     * @return self
     */
    public function setPort4(SystemPortStatistic $port4): self
    {
        $this->initialized['port4'] = true;
        $this->port4 = $port4;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getPort5(): SystemPortStatistic
    {
        return $this->port5;
    }
    /**
     * @param SystemPortStatistic $port5
     *
     * @return self
     */
    public function setPort5(SystemPortStatistic $port5): self
    {
        $this->initialized['port5'] = true;
        $this->port5 = $port5;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getControl(): SystemPortStatistic
    {
        return $this->control;
    }
    /**
     * @param SystemPortStatistic $control
     *
     * @return self
     */
    public function setControl(SystemPortStatistic $control): self
    {
        $this->initialized['control'] = true;
        $this->control = $control;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getCluster(): SystemPortStatistic
    {
        return $this->cluster;
    }
    /**
     * @param SystemPortStatistic $cluster
     *
     * @return self
     */
    public function setCluster(SystemPortStatistic $cluster): self
    {
        $this->initialized['cluster'] = true;
        $this->cluster = $cluster;
        return $this;
    }
    /**
     * @return SystemPortStatistic
     */
    public function getManagement(): SystemPortStatistic
    {
        return $this->management;
    }
    /**
     * @param SystemPortStatistic $management
     *
     * @return self
     */
    public function setManagement(SystemPortStatistic $management): self
    {
        $this->initialized['management'] = true;
        $this->management = $management;
        return $this;
    }
}