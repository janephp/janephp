<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemControlPlaneListListItem
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
     * Identifier of the control plane
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * Management IP
     *
     * @var string
     */
    protected $managementIp;
    /**
     * Cluster IP
     *
     * @var string
     */
    protected $clusterIp;
    /**
     * Control IP
     *
     * @var string
     */
    protected $controlIp;
    /**
     * Model
     *
     * @var string
     */
    protected $model;
    /**
     * Serial Number
     *
     * @var string
     */
    protected $serialNumber;
    /**
     * Total Connected APs
     *
     * @var string
     */
    protected $numOfAps;
    /**
     * Description
     *
     * @var string
     */
    protected $description;
    /**
     * Firmware
     *
     * @var string
     */
    protected $firmware;
    /**
     * Cluster Role
     *
     * @var string
     */
    protected $clusterRole;
    /**
     * Uptime
     *
     * @var string
     */
    protected $upTime;
    /**
     * Identifier of the control plane
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the control plane
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
     * Management IP
     *
     * @return string
     */
    public function getManagementIp(): string
    {
        return $this->managementIp;
    }
    /**
     * Management IP
     *
     * @param string $managementIp
     *
     * @return self
     */
    public function setManagementIp(string $managementIp): self
    {
        $this->initialized['managementIp'] = true;
        $this->managementIp = $managementIp;
        return $this;
    }
    /**
     * Cluster IP
     *
     * @return string
     */
    public function getClusterIp(): string
    {
        return $this->clusterIp;
    }
    /**
     * Cluster IP
     *
     * @param string $clusterIp
     *
     * @return self
     */
    public function setClusterIp(string $clusterIp): self
    {
        $this->initialized['clusterIp'] = true;
        $this->clusterIp = $clusterIp;
        return $this;
    }
    /**
     * Control IP
     *
     * @return string
     */
    public function getControlIp(): string
    {
        return $this->controlIp;
    }
    /**
     * Control IP
     *
     * @param string $controlIp
     *
     * @return self
     */
    public function setControlIp(string $controlIp): self
    {
        $this->initialized['controlIp'] = true;
        $this->controlIp = $controlIp;
        return $this;
    }
    /**
     * Model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * Model
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
     * Serial Number
     *
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }
    /**
     * Serial Number
     *
     * @param string $serialNumber
     *
     * @return self
     */
    public function setSerialNumber(string $serialNumber): self
    {
        $this->initialized['serialNumber'] = true;
        $this->serialNumber = $serialNumber;
        return $this;
    }
    /**
     * Total Connected APs
     *
     * @return string
     */
    public function getNumOfAps(): string
    {
        return $this->numOfAps;
    }
    /**
     * Total Connected APs
     *
     * @param string $numOfAps
     *
     * @return self
     */
    public function setNumOfAps(string $numOfAps): self
    {
        $this->initialized['numOfAps'] = true;
        $this->numOfAps = $numOfAps;
        return $this;
    }
    /**
     * Description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description
     *
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
     * Firmware
     *
     * @return string
     */
    public function getFirmware(): string
    {
        return $this->firmware;
    }
    /**
     * Firmware
     *
     * @param string $firmware
     *
     * @return self
     */
    public function setFirmware(string $firmware): self
    {
        $this->initialized['firmware'] = true;
        $this->firmware = $firmware;
        return $this;
    }
    /**
     * Cluster Role
     *
     * @return string
     */
    public function getClusterRole(): string
    {
        return $this->clusterRole;
    }
    /**
     * Cluster Role
     *
     * @param string $clusterRole
     *
     * @return self
     */
    public function setClusterRole(string $clusterRole): self
    {
        $this->initialized['clusterRole'] = true;
        $this->clusterRole = $clusterRole;
        return $this;
    }
    /**
     * Uptime
     *
     * @return string
     */
    public function getUpTime(): string
    {
        return $this->upTime;
    }
    /**
     * Uptime
     *
     * @param string $upTime
     *
     * @return self
     */
    public function setUpTime(string $upTime): self
    {
        $this->initialized['upTime'] = true;
        $this->upTime = $upTime;
        return $this;
    }
}