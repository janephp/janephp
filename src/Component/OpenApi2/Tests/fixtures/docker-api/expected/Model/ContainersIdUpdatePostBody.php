<?php

namespace Docker\Api\Model;

class ContainersIdUpdatePostBody
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * An integer value representing this container's relative CPU weight
    versus other containers.
    
    *
    * @var int
    */
    protected $cpuShares;
    /**
     * Memory limit in bytes.
     *
     * @var int
     */
    protected $memory = 0;
    /**
    * Path to `cgroups` under which the container's `cgroup` is created. If
    the path is not absolute, the path is considered to be relative to the
    `cgroups` path of the init process. Cgroups are created if they do not
    already exist.
    
    *
    * @var string
    */
    protected $cgroupParent;
    /**
     * Block IO weight (relative weight).
     *
     * @var int
     */
    protected $blkioWeight;
    /**
    * Block IO weight (relative device weight) in the form:
    
    ```
    [{"Path": "device_path", "Weight": weight}]
    ```
    
    *
    * @var list<ResourcesBlkioWeightDeviceItem>
    */
    protected $blkioWeightDevice;
    /**
    * Limit read rate (bytes per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var list<ThrottleDevice>
    */
    protected $blkioDeviceReadBps;
    /**
    * Limit write rate (bytes per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var list<ThrottleDevice>
    */
    protected $blkioDeviceWriteBps;
    /**
    * Limit read rate (IO per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var list<ThrottleDevice>
    */
    protected $blkioDeviceReadIOps;
    /**
    * Limit write rate (IO per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var list<ThrottleDevice>
    */
    protected $blkioDeviceWriteIOps;
    /**
     * The length of a CPU period in microseconds.
     *
     * @var int
     */
    protected $cpuPeriod;
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     *
     * @var int
     */
    protected $cpuQuota;
    /**
    * The length of a CPU real-time period in microseconds. Set to 0 to
    allocate no time allocated to real-time tasks.
    
    *
    * @var int
    */
    protected $cpuRealtimePeriod;
    /**
    * The length of a CPU real-time runtime in microseconds. Set to 0 to
    allocate no time allocated to real-time tasks.
    
    *
    * @var int
    */
    protected $cpuRealtimeRuntime;
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     *
     * @var string
     */
    protected $cpusetCpus;
    /**
    * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only
    effective on NUMA systems.
    
    *
    * @var string
    */
    protected $cpusetMems;
    /**
     * A list of devices to add to the container.
     *
     * @var list<DeviceMapping>
     */
    protected $devices;
    /**
     * a list of cgroup rules to apply to the container
     *
     * @var list<string>
     */
    protected $deviceCgroupRules;
    /**
     * A list of requests for devices to be sent to device drivers.
     *
     * @var list<DeviceRequest>
     */
    protected $deviceRequests;
    /**
    * Kernel memory limit in bytes.
    
    <p><br /></p>
    
    > **Deprecated**: This field is deprecated as the kernel 5.4 deprecated
    > `kmem.limit_in_bytes`.
    
    *
    * @var int
    */
    protected $kernelMemory;
    /**
     * Hard limit for kernel TCP buffer memory (in bytes).
     *
     * @var int
     */
    protected $kernelMemoryTCP;
    /**
     * Memory soft limit in bytes.
     *
     * @var int
     */
    protected $memoryReservation;
    /**
    * Total memory limit (memory + swap). Set as `-1` to enable unlimited
    swap.
    
    *
    * @var int
    */
    protected $memorySwap;
    /**
    * Tune a container's memory swappiness behavior. Accepts an integer
    between 0 and 100.
    
    *
    * @var int
    */
    protected $memorySwappiness;
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @var int
     */
    protected $nanoCpus;
    /**
     * Disable OOM Killer for the container.
     *
     * @var bool
     */
    protected $oomKillDisable;
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @var bool|null
    */
    protected $init;
    /**
    * Tune a container's PIDs limit. Set `0` or `-1` for unlimited, or `null`
    to not change.
    
    *
    * @var int|null
    */
    protected $pidsLimit;
    /**
    * A list of resource limits to set in the container. For example:
    
    ```
    {"Name": "nofile", "Soft": 1024, "Hard": 2048}
    ```
    
    *
    * @var list<ResourcesUlimitsItem>
    */
    protected $ulimits;
    /**
    * The number of usable CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are
    mutually exclusive. The order of precedence is `CPUCount` first, then
    `CPUShares`, and `CPUPercent` last.
    
    *
    * @var int
    */
    protected $cpuCount;
    /**
    * The usable percentage of the available CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are
    mutually exclusive. The order of precedence is `CPUCount` first, then
    `CPUShares`, and `CPUPercent` last.
    
    *
    * @var int
    */
    protected $cpuPercent;
    /**
     * Maximum IOps for the container system drive (Windows only)
     *
     * @var int
     */
    protected $iOMaximumIOps;
    /**
    * Maximum IO in bytes per second for the container system drive
    (Windows only).
    
    *
    * @var int
    */
    protected $iOMaximumBandwidth;
    /**
    * The behavior to apply when the container exits. The default is not to
    restart.
    
    An ever increasing delay (double the previous delay, starting at 100ms) is
    added before each restart to prevent flooding the server.
    
    *
    * @var RestartPolicy
    */
    protected $restartPolicy;
    /**
    * An integer value representing this container's relative CPU weight
    versus other containers.
    
    *
    * @return int
    */
    public function getCpuShares() : int
    {
        return $this->cpuShares;
    }
    /**
    * An integer value representing this container's relative CPU weight
    versus other containers.
    
    *
    * @param int $cpuShares
    *
    * @return self
    */
    public function setCpuShares(int $cpuShares) : self
    {
        $this->initialized['cpuShares'] = true;
        $this->cpuShares = $cpuShares;
        return $this;
    }
    /**
     * Memory limit in bytes.
     *
     * @return int
     */
    public function getMemory() : int
    {
        return $this->memory;
    }
    /**
     * Memory limit in bytes.
     *
     * @param int $memory
     *
     * @return self
     */
    public function setMemory(int $memory) : self
    {
        $this->initialized['memory'] = true;
        $this->memory = $memory;
        return $this;
    }
    /**
    * Path to `cgroups` under which the container's `cgroup` is created. If
    the path is not absolute, the path is considered to be relative to the
    `cgroups` path of the init process. Cgroups are created if they do not
    already exist.
    
    *
    * @return string
    */
    public function getCgroupParent() : string
    {
        return $this->cgroupParent;
    }
    /**
    * Path to `cgroups` under which the container's `cgroup` is created. If
    the path is not absolute, the path is considered to be relative to the
    `cgroups` path of the init process. Cgroups are created if they do not
    already exist.
    
    *
    * @param string $cgroupParent
    *
    * @return self
    */
    public function setCgroupParent(string $cgroupParent) : self
    {
        $this->initialized['cgroupParent'] = true;
        $this->cgroupParent = $cgroupParent;
        return $this;
    }
    /**
     * Block IO weight (relative weight).
     *
     * @return int
     */
    public function getBlkioWeight() : int
    {
        return $this->blkioWeight;
    }
    /**
     * Block IO weight (relative weight).
     *
     * @param int $blkioWeight
     *
     * @return self
     */
    public function setBlkioWeight(int $blkioWeight) : self
    {
        $this->initialized['blkioWeight'] = true;
        $this->blkioWeight = $blkioWeight;
        return $this;
    }
    /**
    * Block IO weight (relative device weight) in the form:
    
    ```
    [{"Path": "device_path", "Weight": weight}]
    ```
    
    *
    * @return list<ResourcesBlkioWeightDeviceItem>
    */
    public function getBlkioWeightDevice() : array
    {
        return $this->blkioWeightDevice;
    }
    /**
    * Block IO weight (relative device weight) in the form:
    
    ```
    [{"Path": "device_path", "Weight": weight}]
    ```
    
    *
    * @param list<ResourcesBlkioWeightDeviceItem> $blkioWeightDevice
    *
    * @return self
    */
    public function setBlkioWeightDevice(array $blkioWeightDevice) : self
    {
        $this->initialized['blkioWeightDevice'] = true;
        $this->blkioWeightDevice = $blkioWeightDevice;
        return $this;
    }
    /**
    * Limit read rate (bytes per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return list<ThrottleDevice>
    */
    public function getBlkioDeviceReadBps() : array
    {
        return $this->blkioDeviceReadBps;
    }
    /**
    * Limit read rate (bytes per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @param list<ThrottleDevice> $blkioDeviceReadBps
    *
    * @return self
    */
    public function setBlkioDeviceReadBps(array $blkioDeviceReadBps) : self
    {
        $this->initialized['blkioDeviceReadBps'] = true;
        $this->blkioDeviceReadBps = $blkioDeviceReadBps;
        return $this;
    }
    /**
    * Limit write rate (bytes per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return list<ThrottleDevice>
    */
    public function getBlkioDeviceWriteBps() : array
    {
        return $this->blkioDeviceWriteBps;
    }
    /**
    * Limit write rate (bytes per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @param list<ThrottleDevice> $blkioDeviceWriteBps
    *
    * @return self
    */
    public function setBlkioDeviceWriteBps(array $blkioDeviceWriteBps) : self
    {
        $this->initialized['blkioDeviceWriteBps'] = true;
        $this->blkioDeviceWriteBps = $blkioDeviceWriteBps;
        return $this;
    }
    /**
    * Limit read rate (IO per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return list<ThrottleDevice>
    */
    public function getBlkioDeviceReadIOps() : array
    {
        return $this->blkioDeviceReadIOps;
    }
    /**
    * Limit read rate (IO per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @param list<ThrottleDevice> $blkioDeviceReadIOps
    *
    * @return self
    */
    public function setBlkioDeviceReadIOps(array $blkioDeviceReadIOps) : self
    {
        $this->initialized['blkioDeviceReadIOps'] = true;
        $this->blkioDeviceReadIOps = $blkioDeviceReadIOps;
        return $this;
    }
    /**
    * Limit write rate (IO per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return list<ThrottleDevice>
    */
    public function getBlkioDeviceWriteIOps() : array
    {
        return $this->blkioDeviceWriteIOps;
    }
    /**
    * Limit write rate (IO per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @param list<ThrottleDevice> $blkioDeviceWriteIOps
    *
    * @return self
    */
    public function setBlkioDeviceWriteIOps(array $blkioDeviceWriteIOps) : self
    {
        $this->initialized['blkioDeviceWriteIOps'] = true;
        $this->blkioDeviceWriteIOps = $blkioDeviceWriteIOps;
        return $this;
    }
    /**
     * The length of a CPU period in microseconds.
     *
     * @return int
     */
    public function getCpuPeriod() : int
    {
        return $this->cpuPeriod;
    }
    /**
     * The length of a CPU period in microseconds.
     *
     * @param int $cpuPeriod
     *
     * @return self
     */
    public function setCpuPeriod(int $cpuPeriod) : self
    {
        $this->initialized['cpuPeriod'] = true;
        $this->cpuPeriod = $cpuPeriod;
        return $this;
    }
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     *
     * @return int
     */
    public function getCpuQuota() : int
    {
        return $this->cpuQuota;
    }
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     *
     * @param int $cpuQuota
     *
     * @return self
     */
    public function setCpuQuota(int $cpuQuota) : self
    {
        $this->initialized['cpuQuota'] = true;
        $this->cpuQuota = $cpuQuota;
        return $this;
    }
    /**
    * The length of a CPU real-time period in microseconds. Set to 0 to
    allocate no time allocated to real-time tasks.
    
    *
    * @return int
    */
    public function getCpuRealtimePeriod() : int
    {
        return $this->cpuRealtimePeriod;
    }
    /**
    * The length of a CPU real-time period in microseconds. Set to 0 to
    allocate no time allocated to real-time tasks.
    
    *
    * @param int $cpuRealtimePeriod
    *
    * @return self
    */
    public function setCpuRealtimePeriod(int $cpuRealtimePeriod) : self
    {
        $this->initialized['cpuRealtimePeriod'] = true;
        $this->cpuRealtimePeriod = $cpuRealtimePeriod;
        return $this;
    }
    /**
    * The length of a CPU real-time runtime in microseconds. Set to 0 to
    allocate no time allocated to real-time tasks.
    
    *
    * @return int
    */
    public function getCpuRealtimeRuntime() : int
    {
        return $this->cpuRealtimeRuntime;
    }
    /**
    * The length of a CPU real-time runtime in microseconds. Set to 0 to
    allocate no time allocated to real-time tasks.
    
    *
    * @param int $cpuRealtimeRuntime
    *
    * @return self
    */
    public function setCpuRealtimeRuntime(int $cpuRealtimeRuntime) : self
    {
        $this->initialized['cpuRealtimeRuntime'] = true;
        $this->cpuRealtimeRuntime = $cpuRealtimeRuntime;
        return $this;
    }
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     *
     * @return string
     */
    public function getCpusetCpus() : string
    {
        return $this->cpusetCpus;
    }
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     *
     * @param string $cpusetCpus
     *
     * @return self
     */
    public function setCpusetCpus(string $cpusetCpus) : self
    {
        $this->initialized['cpusetCpus'] = true;
        $this->cpusetCpus = $cpusetCpus;
        return $this;
    }
    /**
    * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only
    effective on NUMA systems.
    
    *
    * @return string
    */
    public function getCpusetMems() : string
    {
        return $this->cpusetMems;
    }
    /**
    * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only
    effective on NUMA systems.
    
    *
    * @param string $cpusetMems
    *
    * @return self
    */
    public function setCpusetMems(string $cpusetMems) : self
    {
        $this->initialized['cpusetMems'] = true;
        $this->cpusetMems = $cpusetMems;
        return $this;
    }
    /**
     * A list of devices to add to the container.
     *
     * @return list<DeviceMapping>
     */
    public function getDevices() : array
    {
        return $this->devices;
    }
    /**
     * A list of devices to add to the container.
     *
     * @param list<DeviceMapping> $devices
     *
     * @return self
     */
    public function setDevices(array $devices) : self
    {
        $this->initialized['devices'] = true;
        $this->devices = $devices;
        return $this;
    }
    /**
     * a list of cgroup rules to apply to the container
     *
     * @return list<string>
     */
    public function getDeviceCgroupRules() : array
    {
        return $this->deviceCgroupRules;
    }
    /**
     * a list of cgroup rules to apply to the container
     *
     * @param list<string> $deviceCgroupRules
     *
     * @return self
     */
    public function setDeviceCgroupRules(array $deviceCgroupRules) : self
    {
        $this->initialized['deviceCgroupRules'] = true;
        $this->deviceCgroupRules = $deviceCgroupRules;
        return $this;
    }
    /**
     * A list of requests for devices to be sent to device drivers.
     *
     * @return list<DeviceRequest>
     */
    public function getDeviceRequests() : array
    {
        return $this->deviceRequests;
    }
    /**
     * A list of requests for devices to be sent to device drivers.
     *
     * @param list<DeviceRequest> $deviceRequests
     *
     * @return self
     */
    public function setDeviceRequests(array $deviceRequests) : self
    {
        $this->initialized['deviceRequests'] = true;
        $this->deviceRequests = $deviceRequests;
        return $this;
    }
    /**
    * Kernel memory limit in bytes.
    
    <p><br /></p>
    
    > **Deprecated**: This field is deprecated as the kernel 5.4 deprecated
    > `kmem.limit_in_bytes`.
    
    *
    * @return int
    */
    public function getKernelMemory() : int
    {
        return $this->kernelMemory;
    }
    /**
    * Kernel memory limit in bytes.
    
    <p><br /></p>
    
    > **Deprecated**: This field is deprecated as the kernel 5.4 deprecated
    > `kmem.limit_in_bytes`.
    
    *
    * @param int $kernelMemory
    *
    * @return self
    */
    public function setKernelMemory(int $kernelMemory) : self
    {
        $this->initialized['kernelMemory'] = true;
        $this->kernelMemory = $kernelMemory;
        return $this;
    }
    /**
     * Hard limit for kernel TCP buffer memory (in bytes).
     *
     * @return int
     */
    public function getKernelMemoryTCP() : int
    {
        return $this->kernelMemoryTCP;
    }
    /**
     * Hard limit for kernel TCP buffer memory (in bytes).
     *
     * @param int $kernelMemoryTCP
     *
     * @return self
     */
    public function setKernelMemoryTCP(int $kernelMemoryTCP) : self
    {
        $this->initialized['kernelMemoryTCP'] = true;
        $this->kernelMemoryTCP = $kernelMemoryTCP;
        return $this;
    }
    /**
     * Memory soft limit in bytes.
     *
     * @return int
     */
    public function getMemoryReservation() : int
    {
        return $this->memoryReservation;
    }
    /**
     * Memory soft limit in bytes.
     *
     * @param int $memoryReservation
     *
     * @return self
     */
    public function setMemoryReservation(int $memoryReservation) : self
    {
        $this->initialized['memoryReservation'] = true;
        $this->memoryReservation = $memoryReservation;
        return $this;
    }
    /**
    * Total memory limit (memory + swap). Set as `-1` to enable unlimited
    swap.
    
    *
    * @return int
    */
    public function getMemorySwap() : int
    {
        return $this->memorySwap;
    }
    /**
    * Total memory limit (memory + swap). Set as `-1` to enable unlimited
    swap.
    
    *
    * @param int $memorySwap
    *
    * @return self
    */
    public function setMemorySwap(int $memorySwap) : self
    {
        $this->initialized['memorySwap'] = true;
        $this->memorySwap = $memorySwap;
        return $this;
    }
    /**
    * Tune a container's memory swappiness behavior. Accepts an integer
    between 0 and 100.
    
    *
    * @return int
    */
    public function getMemorySwappiness() : int
    {
        return $this->memorySwappiness;
    }
    /**
    * Tune a container's memory swappiness behavior. Accepts an integer
    between 0 and 100.
    
    *
    * @param int $memorySwappiness
    *
    * @return self
    */
    public function setMemorySwappiness(int $memorySwappiness) : self
    {
        $this->initialized['memorySwappiness'] = true;
        $this->memorySwappiness = $memorySwappiness;
        return $this;
    }
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @return int
     */
    public function getNanoCpus() : int
    {
        return $this->nanoCpus;
    }
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @param int $nanoCpus
     *
     * @return self
     */
    public function setNanoCpus(int $nanoCpus) : self
    {
        $this->initialized['nanoCpus'] = true;
        $this->nanoCpus = $nanoCpus;
        return $this;
    }
    /**
     * Disable OOM Killer for the container.
     *
     * @return bool
     */
    public function getOomKillDisable() : bool
    {
        return $this->oomKillDisable;
    }
    /**
     * Disable OOM Killer for the container.
     *
     * @param bool $oomKillDisable
     *
     * @return self
     */
    public function setOomKillDisable(bool $oomKillDisable) : self
    {
        $this->initialized['oomKillDisable'] = true;
        $this->oomKillDisable = $oomKillDisable;
        return $this;
    }
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @return bool|null
    */
    public function getInit() : ?bool
    {
        return $this->init;
    }
    /**
    * Run an init inside the container that forwards signals and reaps
    processes. This field is omitted if empty, and the default (as
    configured on the daemon) is used.
    
    *
    * @param bool|null $init
    *
    * @return self
    */
    public function setInit(?bool $init) : self
    {
        $this->initialized['init'] = true;
        $this->init = $init;
        return $this;
    }
    /**
    * Tune a container's PIDs limit. Set `0` or `-1` for unlimited, or `null`
    to not change.
    
    *
    * @return int|null
    */
    public function getPidsLimit() : ?int
    {
        return $this->pidsLimit;
    }
    /**
    * Tune a container's PIDs limit. Set `0` or `-1` for unlimited, or `null`
    to not change.
    
    *
    * @param int|null $pidsLimit
    *
    * @return self
    */
    public function setPidsLimit(?int $pidsLimit) : self
    {
        $this->initialized['pidsLimit'] = true;
        $this->pidsLimit = $pidsLimit;
        return $this;
    }
    /**
    * A list of resource limits to set in the container. For example:
    
    ```
    {"Name": "nofile", "Soft": 1024, "Hard": 2048}
    ```
    
    *
    * @return list<ResourcesUlimitsItem>
    */
    public function getUlimits() : array
    {
        return $this->ulimits;
    }
    /**
    * A list of resource limits to set in the container. For example:
    
    ```
    {"Name": "nofile", "Soft": 1024, "Hard": 2048}
    ```
    
    *
    * @param list<ResourcesUlimitsItem> $ulimits
    *
    * @return self
    */
    public function setUlimits(array $ulimits) : self
    {
        $this->initialized['ulimits'] = true;
        $this->ulimits = $ulimits;
        return $this;
    }
    /**
    * The number of usable CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are
    mutually exclusive. The order of precedence is `CPUCount` first, then
    `CPUShares`, and `CPUPercent` last.
    
    *
    * @return int
    */
    public function getCpuCount() : int
    {
        return $this->cpuCount;
    }
    /**
    * The number of usable CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are
    mutually exclusive. The order of precedence is `CPUCount` first, then
    `CPUShares`, and `CPUPercent` last.
    
    *
    * @param int $cpuCount
    *
    * @return self
    */
    public function setCpuCount(int $cpuCount) : self
    {
        $this->initialized['cpuCount'] = true;
        $this->cpuCount = $cpuCount;
        return $this;
    }
    /**
    * The usable percentage of the available CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are
    mutually exclusive. The order of precedence is `CPUCount` first, then
    `CPUShares`, and `CPUPercent` last.
    
    *
    * @return int
    */
    public function getCpuPercent() : int
    {
        return $this->cpuPercent;
    }
    /**
    * The usable percentage of the available CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are
    mutually exclusive. The order of precedence is `CPUCount` first, then
    `CPUShares`, and `CPUPercent` last.
    
    *
    * @param int $cpuPercent
    *
    * @return self
    */
    public function setCpuPercent(int $cpuPercent) : self
    {
        $this->initialized['cpuPercent'] = true;
        $this->cpuPercent = $cpuPercent;
        return $this;
    }
    /**
     * Maximum IOps for the container system drive (Windows only)
     *
     * @return int
     */
    public function getIOMaximumIOps() : int
    {
        return $this->iOMaximumIOps;
    }
    /**
     * Maximum IOps for the container system drive (Windows only)
     *
     * @param int $iOMaximumIOps
     *
     * @return self
     */
    public function setIOMaximumIOps(int $iOMaximumIOps) : self
    {
        $this->initialized['iOMaximumIOps'] = true;
        $this->iOMaximumIOps = $iOMaximumIOps;
        return $this;
    }
    /**
    * Maximum IO in bytes per second for the container system drive
    (Windows only).
    
    *
    * @return int
    */
    public function getIOMaximumBandwidth() : int
    {
        return $this->iOMaximumBandwidth;
    }
    /**
    * Maximum IO in bytes per second for the container system drive
    (Windows only).
    
    *
    * @param int $iOMaximumBandwidth
    *
    * @return self
    */
    public function setIOMaximumBandwidth(int $iOMaximumBandwidth) : self
    {
        $this->initialized['iOMaximumBandwidth'] = true;
        $this->iOMaximumBandwidth = $iOMaximumBandwidth;
        return $this;
    }
    /**
    * The behavior to apply when the container exits. The default is not to
    restart.
    
    An ever increasing delay (double the previous delay, starting at 100ms) is
    added before each restart to prevent flooding the server.
    
    *
    * @return RestartPolicy
    */
    public function getRestartPolicy() : RestartPolicy
    {
        return $this->restartPolicy;
    }
    /**
    * The behavior to apply when the container exits. The default is not to
    restart.
    
    An ever increasing delay (double the previous delay, starting at 100ms) is
    added before each restart to prevent flooding the server.
    
    *
    * @param RestartPolicy $restartPolicy
    *
    * @return self
    */
    public function setRestartPolicy(RestartPolicy $restartPolicy) : self
    {
        $this->initialized['restartPolicy'] = true;
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
}