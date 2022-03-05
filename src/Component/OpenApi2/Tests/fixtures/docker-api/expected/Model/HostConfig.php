<?php

namespace Docker\Api\Model;

class HostConfig
{
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
    * @var ResourcesBlkioWeightDeviceItem[]
    */
    protected $blkioWeightDevice;
    /**
    * Limit read rate (bytes per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var ThrottleDevice[]
    */
    protected $blkioDeviceReadBps;
    /**
    * Limit write rate (bytes per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var ThrottleDevice[]
    */
    protected $blkioDeviceWriteBps;
    /**
    * Limit read rate (IO per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var ThrottleDevice[]
    */
    protected $blkioDeviceReadIOps;
    /**
    * Limit write rate (IO per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @var ThrottleDevice[]
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
     * @var DeviceMapping[]
     */
    protected $devices;
    /**
     * a list of cgroup rules to apply to the container
     *
     * @var string[]
     */
    protected $deviceCgroupRules;
    /**
     * A list of requests for devices to be sent to device drivers.
     *
     * @var DeviceRequest[]
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
    * @var ResourcesUlimitsItem[]
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
    * A list of volume bindings for this container. Each volume binding
    is a string in one of these forms:
    
    - `host-src:container-dest[:options]` to bind-mount a host path
     into the container. Both `host-src`, and `container-dest` must
     be an _absolute_ path.
    - `volume-name:container-dest[:options]` to bind-mount a volume
     managed by a volume driver into the container. `container-dest`
     must be an _absolute_ path.
    
    `options` is an optional, comma-delimited list of:
    
    - `nocopy` disables automatic copying of data from the container
     path to the volume. The `nocopy` flag only applies to named volumes.
    - `[ro|rw]` mounts a volume read-only or read-write, respectively.
     If omitted or set to `rw`, volumes are mounted read-write.
    - `[z|Z]` applies SELinux labels to allow or deny multiple containers
     to read and write to the same volume.
       - `z`: a _shared_ content label is applied to the content. This
         label indicates that multiple containers can share the volume
         content, for both reading and writing.
       - `Z`: a _private unshared_ label is applied to the content.
         This label indicates that only the current container can use
         a private volume. Labeling systems such as SELinux require
         proper labels to be placed on volume content that is mounted
         into a container. Without a label, the security system can
         prevent a container's processes from using the content. By
         default, the labels set by the host operating system are not
         modified.
    - `[[r]shared|[r]slave|[r]private]` specifies mount
     [propagation behavior](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt).
     This only applies to bind-mounted volumes, not internal volumes
     or named volumes. Mount propagation requires the source mount
     point (the location where the source directory is mounted in the
     host operating system) to have the correct propagation properties.
     For shared volumes, the source mount point must be set to `shared`.
     For slave volumes, the mount must be set to either `shared` or
     `slave`.
    
    *
    * @var string[]
    */
    protected $binds;
    /**
     * Path to a file where the container ID is written
     *
     * @var string
     */
    protected $containerIDFile;
    /**
     * The logging configuration for this container
     *
     * @var HostConfigLogConfig
     */
    protected $logConfig;
    /**
    * Network mode to use for this container. Supported standard values
    are: `bridge`, `host`, `none`, and `container:<name|id>`. Any
    other value is taken as a custom network's name to which this
    container should connect to.
    
    *
    * @var string
    */
    protected $networkMode;
    /**
    * PortMap describes the mapping of container ports to host ports, using the
    container's port-number and protocol as key in the format `<port>/<protocol>`,
    for example, `80/udp`.
    
    If a container's port is mapped for multiple protocols, separate entries
    are added to the mapping table.
    
    *
    * @var PortBinding[][]
    */
    protected $portBindings;
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
    * Automatically remove the container when the container's process
    exits. This has no effect if `RestartPolicy` is set.
    
    *
    * @var bool
    */
    protected $autoRemove;
    /**
     * Driver that this container uses to mount volumes.
     *
     * @var string
     */
    protected $volumeDriver;
    /**
    * A list of volumes to inherit from another container, specified in
    the form `<container name>[:<ro|rw>]`.
    
    *
    * @var string[]
    */
    protected $volumesFrom;
    /**
     * Specification for mounts to be added to the container.
     *
     * @var Mount[]
     */
    protected $mounts;
    /**
    * A list of kernel capabilities to add to the container. Conflicts
    with option 'Capabilities'.
    
    *
    * @var string[]
    */
    protected $capAdd;
    /**
    * A list of kernel capabilities to drop from the container. Conflicts
    with option 'Capabilities'.
    
    *
    * @var string[]
    */
    protected $capDrop;
    /**
    * cgroup namespace mode for the container. Possible values are:
    
    - `"private"`: the container runs in its own private cgroup namespace
    - `"host"`: use the host system's cgroup namespace
    
    If not specified, the daemon default is used, which can either be `"private"`
    or `"host"`, depending on daemon version, kernel support and configuration.
    
    *
    * @var string
    */
    protected $cgroupnsMode;
    /**
     * A list of DNS servers for the container to use.
     *
     * @var string[]
     */
    protected $dns;
    /**
     * A list of DNS options.
     *
     * @var string[]
     */
    protected $dnsOptions;
    /**
     * A list of DNS search domains.
     *
     * @var string[]
     */
    protected $dnsSearch;
    /**
    * A list of hostnames/IP mappings to add to the container's `/etc/hosts`
    file. Specified in the form `["hostname:IP"]`.
    
    *
    * @var string[]
    */
    protected $extraHosts;
    /**
     * A list of additional groups that the container process will run as.
     *
     * @var string[]
     */
    protected $groupAdd;
    /**
    * IPC sharing mode for the container. Possible values are:
    
    - `"none"`: own private IPC namespace, with /dev/shm not mounted
    - `"private"`: own private IPC namespace
    - `"shareable"`: own private IPC namespace, with a possibility to share it with other containers
    - `"container:<name|id>"`: join another (shareable) container's IPC namespace
    - `"host"`: use the host system's IPC namespace
    
    If not specified, daemon default is used, which can either be `"private"`
    or `"shareable"`, depending on daemon version and configuration.
    
    *
    * @var string
    */
    protected $ipcMode;
    /**
     * Cgroup to use for the container.
     *
     * @var string
     */
    protected $cgroup;
    /**
     * A list of links for the container in the form `container_name:alias`.
     *
     * @var string[]
     */
    protected $links;
    /**
    * An integer value containing the score given to the container in
    order to tune OOM killer preferences.
    
    *
    * @var int
    */
    protected $oomScoreAdj;
    /**
    * Set the PID (Process) Namespace mode for the container. It can be
    either:
    
    - `"container:<name|id>"`: joins another container's PID namespace
    - `"host"`: use the host's PID namespace inside the container
    
    *
    * @var string
    */
    protected $pidMode;
    /**
     * Gives the container full access to the host.
     *
     * @var bool
     */
    protected $privileged;
    /**
    * Allocates an ephemeral host port for all of a container's
    exposed ports.
    
    Ports are de-allocated when the container stops and allocated when
    the container starts. The allocated port might be changed when
    restarting the container.
    
    The port is selected from the ephemeral port range that depends on
    the kernel. For example, on Linux the range is defined by
    `/proc/sys/net/ipv4/ip_local_port_range`.
    
    *
    * @var bool
    */
    protected $publishAllPorts;
    /**
     * Mount the container's root filesystem as read only.
     *
     * @var bool
     */
    protected $readonlyRootfs;
    /**
     * A list of string values to customize labels for MLS systems, such as SELinux.
     *
     * @var string[]
     */
    protected $securityOpt;
    /**
     * Storage driver options for this container, in the form `{"size": "120G"}`.
     *
     * @var string[]
     */
    protected $storageOpt;
    /**
    * A map of container directories which should be replaced by tmpfs
    mounts, and their corresponding mount options. For example:
    
    ```
    { "/run": "rw,noexec,nosuid,size=65536k" }
    ```
    
    *
    * @var string[]
    */
    protected $tmpfs;
    /**
     * UTS namespace to use for the container.
     *
     * @var string
     */
    protected $uTSMode;
    /**
    * Sets the usernamespace mode for the container when usernamespace
    remapping option is enabled.
    
    *
    * @var string
    */
    protected $usernsMode;
    /**
     * Size of `/dev/shm` in bytes. If omitted, the system uses 64MB.
     *
     * @var int
     */
    protected $shmSize;
    /**
    * A list of kernel parameters (sysctls) to set in the container.
    For example:
    
    ```
    {"net.ipv4.ip_forward": "1"}
    ```
    
    *
    * @var string[]
    */
    protected $sysctls;
    /**
     * Runtime to use with this container.
     *
     * @var string
     */
    protected $runtime;
    /**
     * Initial console size, as an `[height, width]` array. (Windows only)
     *
     * @var int[]
     */
    protected $consoleSize;
    /**
     * Isolation technology of the container. (Windows only)
     *
     * @var string
     */
    protected $isolation;
    /**
    * The list of paths to be masked inside the container (this overrides
    the default set of paths).
    
    *
    * @var string[]
    */
    protected $maskedPaths;
    /**
    * The list of paths to be set as read-only inside the container
    (this overrides the default set of paths).
    
    *
    * @var string[]
    */
    protected $readonlyPaths;
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
        $this->blkioWeight = $blkioWeight;
        return $this;
    }
    /**
    * Block IO weight (relative device weight) in the form:
    
    ```
    [{"Path": "device_path", "Weight": weight}]
    ```
    
    *
    * @return ResourcesBlkioWeightDeviceItem[]
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
    * @param ResourcesBlkioWeightDeviceItem[] $blkioWeightDevice
    *
    * @return self
    */
    public function setBlkioWeightDevice(array $blkioWeightDevice) : self
    {
        $this->blkioWeightDevice = $blkioWeightDevice;
        return $this;
    }
    /**
    * Limit read rate (bytes per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return ThrottleDevice[]
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
    * @param ThrottleDevice[] $blkioDeviceReadBps
    *
    * @return self
    */
    public function setBlkioDeviceReadBps(array $blkioDeviceReadBps) : self
    {
        $this->blkioDeviceReadBps = $blkioDeviceReadBps;
        return $this;
    }
    /**
    * Limit write rate (bytes per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return ThrottleDevice[]
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
    * @param ThrottleDevice[] $blkioDeviceWriteBps
    *
    * @return self
    */
    public function setBlkioDeviceWriteBps(array $blkioDeviceWriteBps) : self
    {
        $this->blkioDeviceWriteBps = $blkioDeviceWriteBps;
        return $this;
    }
    /**
    * Limit read rate (IO per second) from a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return ThrottleDevice[]
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
    * @param ThrottleDevice[] $blkioDeviceReadIOps
    *
    * @return self
    */
    public function setBlkioDeviceReadIOps(array $blkioDeviceReadIOps) : self
    {
        $this->blkioDeviceReadIOps = $blkioDeviceReadIOps;
        return $this;
    }
    /**
    * Limit write rate (IO per second) to a device, in the form:
    
    ```
    [{"Path": "device_path", "Rate": rate}]
    ```
    
    *
    * @return ThrottleDevice[]
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
    * @param ThrottleDevice[] $blkioDeviceWriteIOps
    *
    * @return self
    */
    public function setBlkioDeviceWriteIOps(array $blkioDeviceWriteIOps) : self
    {
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
        $this->cpusetMems = $cpusetMems;
        return $this;
    }
    /**
     * A list of devices to add to the container.
     *
     * @return DeviceMapping[]
     */
    public function getDevices() : array
    {
        return $this->devices;
    }
    /**
     * A list of devices to add to the container.
     *
     * @param DeviceMapping[] $devices
     *
     * @return self
     */
    public function setDevices(array $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * a list of cgroup rules to apply to the container
     *
     * @return string[]
     */
    public function getDeviceCgroupRules() : array
    {
        return $this->deviceCgroupRules;
    }
    /**
     * a list of cgroup rules to apply to the container
     *
     * @param string[] $deviceCgroupRules
     *
     * @return self
     */
    public function setDeviceCgroupRules(array $deviceCgroupRules) : self
    {
        $this->deviceCgroupRules = $deviceCgroupRules;
        return $this;
    }
    /**
     * A list of requests for devices to be sent to device drivers.
     *
     * @return DeviceRequest[]
     */
    public function getDeviceRequests() : array
    {
        return $this->deviceRequests;
    }
    /**
     * A list of requests for devices to be sent to device drivers.
     *
     * @param DeviceRequest[] $deviceRequests
     *
     * @return self
     */
    public function setDeviceRequests(array $deviceRequests) : self
    {
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
        $this->pidsLimit = $pidsLimit;
        return $this;
    }
    /**
    * A list of resource limits to set in the container. For example:
    
    ```
    {"Name": "nofile", "Soft": 1024, "Hard": 2048}
    ```
    
    *
    * @return ResourcesUlimitsItem[]
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
    * @param ResourcesUlimitsItem[] $ulimits
    *
    * @return self
    */
    public function setUlimits(array $ulimits) : self
    {
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
        $this->iOMaximumBandwidth = $iOMaximumBandwidth;
        return $this;
    }
    /**
    * A list of volume bindings for this container. Each volume binding
    is a string in one of these forms:
    
    - `host-src:container-dest[:options]` to bind-mount a host path
     into the container. Both `host-src`, and `container-dest` must
     be an _absolute_ path.
    - `volume-name:container-dest[:options]` to bind-mount a volume
     managed by a volume driver into the container. `container-dest`
     must be an _absolute_ path.
    
    `options` is an optional, comma-delimited list of:
    
    - `nocopy` disables automatic copying of data from the container
     path to the volume. The `nocopy` flag only applies to named volumes.
    - `[ro|rw]` mounts a volume read-only or read-write, respectively.
     If omitted or set to `rw`, volumes are mounted read-write.
    - `[z|Z]` applies SELinux labels to allow or deny multiple containers
     to read and write to the same volume.
       - `z`: a _shared_ content label is applied to the content. This
         label indicates that multiple containers can share the volume
         content, for both reading and writing.
       - `Z`: a _private unshared_ label is applied to the content.
         This label indicates that only the current container can use
         a private volume. Labeling systems such as SELinux require
         proper labels to be placed on volume content that is mounted
         into a container. Without a label, the security system can
         prevent a container's processes from using the content. By
         default, the labels set by the host operating system are not
         modified.
    - `[[r]shared|[r]slave|[r]private]` specifies mount
     [propagation behavior](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt).
     This only applies to bind-mounted volumes, not internal volumes
     or named volumes. Mount propagation requires the source mount
     point (the location where the source directory is mounted in the
     host operating system) to have the correct propagation properties.
     For shared volumes, the source mount point must be set to `shared`.
     For slave volumes, the mount must be set to either `shared` or
     `slave`.
    
    *
    * @return string[]
    */
    public function getBinds() : array
    {
        return $this->binds;
    }
    /**
    * A list of volume bindings for this container. Each volume binding
    is a string in one of these forms:
    
    - `host-src:container-dest[:options]` to bind-mount a host path
     into the container. Both `host-src`, and `container-dest` must
     be an _absolute_ path.
    - `volume-name:container-dest[:options]` to bind-mount a volume
     managed by a volume driver into the container. `container-dest`
     must be an _absolute_ path.
    
    `options` is an optional, comma-delimited list of:
    
    - `nocopy` disables automatic copying of data from the container
     path to the volume. The `nocopy` flag only applies to named volumes.
    - `[ro|rw]` mounts a volume read-only or read-write, respectively.
     If omitted or set to `rw`, volumes are mounted read-write.
    - `[z|Z]` applies SELinux labels to allow or deny multiple containers
     to read and write to the same volume.
       - `z`: a _shared_ content label is applied to the content. This
         label indicates that multiple containers can share the volume
         content, for both reading and writing.
       - `Z`: a _private unshared_ label is applied to the content.
         This label indicates that only the current container can use
         a private volume. Labeling systems such as SELinux require
         proper labels to be placed on volume content that is mounted
         into a container. Without a label, the security system can
         prevent a container's processes from using the content. By
         default, the labels set by the host operating system are not
         modified.
    - `[[r]shared|[r]slave|[r]private]` specifies mount
     [propagation behavior](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt).
     This only applies to bind-mounted volumes, not internal volumes
     or named volumes. Mount propagation requires the source mount
     point (the location where the source directory is mounted in the
     host operating system) to have the correct propagation properties.
     For shared volumes, the source mount point must be set to `shared`.
     For slave volumes, the mount must be set to either `shared` or
     `slave`.
    
    *
    * @param string[] $binds
    *
    * @return self
    */
    public function setBinds(array $binds) : self
    {
        $this->binds = $binds;
        return $this;
    }
    /**
     * Path to a file where the container ID is written
     *
     * @return string
     */
    public function getContainerIDFile() : string
    {
        return $this->containerIDFile;
    }
    /**
     * Path to a file where the container ID is written
     *
     * @param string $containerIDFile
     *
     * @return self
     */
    public function setContainerIDFile(string $containerIDFile) : self
    {
        $this->containerIDFile = $containerIDFile;
        return $this;
    }
    /**
     * The logging configuration for this container
     *
     * @return HostConfigLogConfig
     */
    public function getLogConfig() : HostConfigLogConfig
    {
        return $this->logConfig;
    }
    /**
     * The logging configuration for this container
     *
     * @param HostConfigLogConfig $logConfig
     *
     * @return self
     */
    public function setLogConfig(HostConfigLogConfig $logConfig) : self
    {
        $this->logConfig = $logConfig;
        return $this;
    }
    /**
    * Network mode to use for this container. Supported standard values
    are: `bridge`, `host`, `none`, and `container:<name|id>`. Any
    other value is taken as a custom network's name to which this
    container should connect to.
    
    *
    * @return string
    */
    public function getNetworkMode() : string
    {
        return $this->networkMode;
    }
    /**
    * Network mode to use for this container. Supported standard values
    are: `bridge`, `host`, `none`, and `container:<name|id>`. Any
    other value is taken as a custom network's name to which this
    container should connect to.
    
    *
    * @param string $networkMode
    *
    * @return self
    */
    public function setNetworkMode(string $networkMode) : self
    {
        $this->networkMode = $networkMode;
        return $this;
    }
    /**
    * PortMap describes the mapping of container ports to host ports, using the
    container's port-number and protocol as key in the format `<port>/<protocol>`,
    for example, `80/udp`.
    
    If a container's port is mapped for multiple protocols, separate entries
    are added to the mapping table.
    
    *
    * @return PortBinding[][]
    */
    public function getPortBindings() : iterable
    {
        return $this->portBindings;
    }
    /**
    * PortMap describes the mapping of container ports to host ports, using the
    container's port-number and protocol as key in the format `<port>/<protocol>`,
    for example, `80/udp`.
    
    If a container's port is mapped for multiple protocols, separate entries
    are added to the mapping table.
    
    *
    * @param PortBinding[][] $portBindings
    *
    * @return self
    */
    public function setPortBindings(iterable $portBindings) : self
    {
        $this->portBindings = $portBindings;
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
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
    /**
    * Automatically remove the container when the container's process
    exits. This has no effect if `RestartPolicy` is set.
    
    *
    * @return bool
    */
    public function getAutoRemove() : bool
    {
        return $this->autoRemove;
    }
    /**
    * Automatically remove the container when the container's process
    exits. This has no effect if `RestartPolicy` is set.
    
    *
    * @param bool $autoRemove
    *
    * @return self
    */
    public function setAutoRemove(bool $autoRemove) : self
    {
        $this->autoRemove = $autoRemove;
        return $this;
    }
    /**
     * Driver that this container uses to mount volumes.
     *
     * @return string
     */
    public function getVolumeDriver() : string
    {
        return $this->volumeDriver;
    }
    /**
     * Driver that this container uses to mount volumes.
     *
     * @param string $volumeDriver
     *
     * @return self
     */
    public function setVolumeDriver(string $volumeDriver) : self
    {
        $this->volumeDriver = $volumeDriver;
        return $this;
    }
    /**
    * A list of volumes to inherit from another container, specified in
    the form `<container name>[:<ro|rw>]`.
    
    *
    * @return string[]
    */
    public function getVolumesFrom() : array
    {
        return $this->volumesFrom;
    }
    /**
    * A list of volumes to inherit from another container, specified in
    the form `<container name>[:<ro|rw>]`.
    
    *
    * @param string[] $volumesFrom
    *
    * @return self
    */
    public function setVolumesFrom(array $volumesFrom) : self
    {
        $this->volumesFrom = $volumesFrom;
        return $this;
    }
    /**
     * Specification for mounts to be added to the container.
     *
     * @return Mount[]
     */
    public function getMounts() : array
    {
        return $this->mounts;
    }
    /**
     * Specification for mounts to be added to the container.
     *
     * @param Mount[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts) : self
    {
        $this->mounts = $mounts;
        return $this;
    }
    /**
    * A list of kernel capabilities to add to the container. Conflicts
    with option 'Capabilities'.
    
    *
    * @return string[]
    */
    public function getCapAdd() : array
    {
        return $this->capAdd;
    }
    /**
    * A list of kernel capabilities to add to the container. Conflicts
    with option 'Capabilities'.
    
    *
    * @param string[] $capAdd
    *
    * @return self
    */
    public function setCapAdd(array $capAdd) : self
    {
        $this->capAdd = $capAdd;
        return $this;
    }
    /**
    * A list of kernel capabilities to drop from the container. Conflicts
    with option 'Capabilities'.
    
    *
    * @return string[]
    */
    public function getCapDrop() : array
    {
        return $this->capDrop;
    }
    /**
    * A list of kernel capabilities to drop from the container. Conflicts
    with option 'Capabilities'.
    
    *
    * @param string[] $capDrop
    *
    * @return self
    */
    public function setCapDrop(array $capDrop) : self
    {
        $this->capDrop = $capDrop;
        return $this;
    }
    /**
    * cgroup namespace mode for the container. Possible values are:
    
    - `"private"`: the container runs in its own private cgroup namespace
    - `"host"`: use the host system's cgroup namespace
    
    If not specified, the daemon default is used, which can either be `"private"`
    or `"host"`, depending on daemon version, kernel support and configuration.
    
    *
    * @return string
    */
    public function getCgroupnsMode() : string
    {
        return $this->cgroupnsMode;
    }
    /**
    * cgroup namespace mode for the container. Possible values are:
    
    - `"private"`: the container runs in its own private cgroup namespace
    - `"host"`: use the host system's cgroup namespace
    
    If not specified, the daemon default is used, which can either be `"private"`
    or `"host"`, depending on daemon version, kernel support and configuration.
    
    *
    * @param string $cgroupnsMode
    *
    * @return self
    */
    public function setCgroupnsMode(string $cgroupnsMode) : self
    {
        $this->cgroupnsMode = $cgroupnsMode;
        return $this;
    }
    /**
     * A list of DNS servers for the container to use.
     *
     * @return string[]
     */
    public function getDns() : array
    {
        return $this->dns;
    }
    /**
     * A list of DNS servers for the container to use.
     *
     * @param string[] $dns
     *
     * @return self
     */
    public function setDns(array $dns) : self
    {
        $this->dns = $dns;
        return $this;
    }
    /**
     * A list of DNS options.
     *
     * @return string[]
     */
    public function getDnsOptions() : array
    {
        return $this->dnsOptions;
    }
    /**
     * A list of DNS options.
     *
     * @param string[] $dnsOptions
     *
     * @return self
     */
    public function setDnsOptions(array $dnsOptions) : self
    {
        $this->dnsOptions = $dnsOptions;
        return $this;
    }
    /**
     * A list of DNS search domains.
     *
     * @return string[]
     */
    public function getDnsSearch() : array
    {
        return $this->dnsSearch;
    }
    /**
     * A list of DNS search domains.
     *
     * @param string[] $dnsSearch
     *
     * @return self
     */
    public function setDnsSearch(array $dnsSearch) : self
    {
        $this->dnsSearch = $dnsSearch;
        return $this;
    }
    /**
    * A list of hostnames/IP mappings to add to the container's `/etc/hosts`
    file. Specified in the form `["hostname:IP"]`.
    
    *
    * @return string[]
    */
    public function getExtraHosts() : array
    {
        return $this->extraHosts;
    }
    /**
    * A list of hostnames/IP mappings to add to the container's `/etc/hosts`
    file. Specified in the form `["hostname:IP"]`.
    
    *
    * @param string[] $extraHosts
    *
    * @return self
    */
    public function setExtraHosts(array $extraHosts) : self
    {
        $this->extraHosts = $extraHosts;
        return $this;
    }
    /**
     * A list of additional groups that the container process will run as.
     *
     * @return string[]
     */
    public function getGroupAdd() : array
    {
        return $this->groupAdd;
    }
    /**
     * A list of additional groups that the container process will run as.
     *
     * @param string[] $groupAdd
     *
     * @return self
     */
    public function setGroupAdd(array $groupAdd) : self
    {
        $this->groupAdd = $groupAdd;
        return $this;
    }
    /**
    * IPC sharing mode for the container. Possible values are:
    
    - `"none"`: own private IPC namespace, with /dev/shm not mounted
    - `"private"`: own private IPC namespace
    - `"shareable"`: own private IPC namespace, with a possibility to share it with other containers
    - `"container:<name|id>"`: join another (shareable) container's IPC namespace
    - `"host"`: use the host system's IPC namespace
    
    If not specified, daemon default is used, which can either be `"private"`
    or `"shareable"`, depending on daemon version and configuration.
    
    *
    * @return string
    */
    public function getIpcMode() : string
    {
        return $this->ipcMode;
    }
    /**
    * IPC sharing mode for the container. Possible values are:
    
    - `"none"`: own private IPC namespace, with /dev/shm not mounted
    - `"private"`: own private IPC namespace
    - `"shareable"`: own private IPC namespace, with a possibility to share it with other containers
    - `"container:<name|id>"`: join another (shareable) container's IPC namespace
    - `"host"`: use the host system's IPC namespace
    
    If not specified, daemon default is used, which can either be `"private"`
    or `"shareable"`, depending on daemon version and configuration.
    
    *
    * @param string $ipcMode
    *
    * @return self
    */
    public function setIpcMode(string $ipcMode) : self
    {
        $this->ipcMode = $ipcMode;
        return $this;
    }
    /**
     * Cgroup to use for the container.
     *
     * @return string
     */
    public function getCgroup() : string
    {
        return $this->cgroup;
    }
    /**
     * Cgroup to use for the container.
     *
     * @param string $cgroup
     *
     * @return self
     */
    public function setCgroup(string $cgroup) : self
    {
        $this->cgroup = $cgroup;
        return $this;
    }
    /**
     * A list of links for the container in the form `container_name:alias`.
     *
     * @return string[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * A list of links for the container in the form `container_name:alias`.
     *
     * @param string[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
    * An integer value containing the score given to the container in
    order to tune OOM killer preferences.
    
    *
    * @return int
    */
    public function getOomScoreAdj() : int
    {
        return $this->oomScoreAdj;
    }
    /**
    * An integer value containing the score given to the container in
    order to tune OOM killer preferences.
    
    *
    * @param int $oomScoreAdj
    *
    * @return self
    */
    public function setOomScoreAdj(int $oomScoreAdj) : self
    {
        $this->oomScoreAdj = $oomScoreAdj;
        return $this;
    }
    /**
    * Set the PID (Process) Namespace mode for the container. It can be
    either:
    
    - `"container:<name|id>"`: joins another container's PID namespace
    - `"host"`: use the host's PID namespace inside the container
    
    *
    * @return string
    */
    public function getPidMode() : string
    {
        return $this->pidMode;
    }
    /**
    * Set the PID (Process) Namespace mode for the container. It can be
    either:
    
    - `"container:<name|id>"`: joins another container's PID namespace
    - `"host"`: use the host's PID namespace inside the container
    
    *
    * @param string $pidMode
    *
    * @return self
    */
    public function setPidMode(string $pidMode) : self
    {
        $this->pidMode = $pidMode;
        return $this;
    }
    /**
     * Gives the container full access to the host.
     *
     * @return bool
     */
    public function getPrivileged() : bool
    {
        return $this->privileged;
    }
    /**
     * Gives the container full access to the host.
     *
     * @param bool $privileged
     *
     * @return self
     */
    public function setPrivileged(bool $privileged) : self
    {
        $this->privileged = $privileged;
        return $this;
    }
    /**
    * Allocates an ephemeral host port for all of a container's
    exposed ports.
    
    Ports are de-allocated when the container stops and allocated when
    the container starts. The allocated port might be changed when
    restarting the container.
    
    The port is selected from the ephemeral port range that depends on
    the kernel. For example, on Linux the range is defined by
    `/proc/sys/net/ipv4/ip_local_port_range`.
    
    *
    * @return bool
    */
    public function getPublishAllPorts() : bool
    {
        return $this->publishAllPorts;
    }
    /**
    * Allocates an ephemeral host port for all of a container's
    exposed ports.
    
    Ports are de-allocated when the container stops and allocated when
    the container starts. The allocated port might be changed when
    restarting the container.
    
    The port is selected from the ephemeral port range that depends on
    the kernel. For example, on Linux the range is defined by
    `/proc/sys/net/ipv4/ip_local_port_range`.
    
    *
    * @param bool $publishAllPorts
    *
    * @return self
    */
    public function setPublishAllPorts(bool $publishAllPorts) : self
    {
        $this->publishAllPorts = $publishAllPorts;
        return $this;
    }
    /**
     * Mount the container's root filesystem as read only.
     *
     * @return bool
     */
    public function getReadonlyRootfs() : bool
    {
        return $this->readonlyRootfs;
    }
    /**
     * Mount the container's root filesystem as read only.
     *
     * @param bool $readonlyRootfs
     *
     * @return self
     */
    public function setReadonlyRootfs(bool $readonlyRootfs) : self
    {
        $this->readonlyRootfs = $readonlyRootfs;
        return $this;
    }
    /**
     * A list of string values to customize labels for MLS systems, such as SELinux.
     *
     * @return string[]
     */
    public function getSecurityOpt() : array
    {
        return $this->securityOpt;
    }
    /**
     * A list of string values to customize labels for MLS systems, such as SELinux.
     *
     * @param string[] $securityOpt
     *
     * @return self
     */
    public function setSecurityOpt(array $securityOpt) : self
    {
        $this->securityOpt = $securityOpt;
        return $this;
    }
    /**
     * Storage driver options for this container, in the form `{"size": "120G"}`.
     *
     * @return string[]
     */
    public function getStorageOpt() : iterable
    {
        return $this->storageOpt;
    }
    /**
     * Storage driver options for this container, in the form `{"size": "120G"}`.
     *
     * @param string[] $storageOpt
     *
     * @return self
     */
    public function setStorageOpt(iterable $storageOpt) : self
    {
        $this->storageOpt = $storageOpt;
        return $this;
    }
    /**
    * A map of container directories which should be replaced by tmpfs
    mounts, and their corresponding mount options. For example:
    
    ```
    { "/run": "rw,noexec,nosuid,size=65536k" }
    ```
    
    *
    * @return string[]
    */
    public function getTmpfs() : iterable
    {
        return $this->tmpfs;
    }
    /**
    * A map of container directories which should be replaced by tmpfs
    mounts, and their corresponding mount options. For example:
    
    ```
    { "/run": "rw,noexec,nosuid,size=65536k" }
    ```
    
    *
    * @param string[] $tmpfs
    *
    * @return self
    */
    public function setTmpfs(iterable $tmpfs) : self
    {
        $this->tmpfs = $tmpfs;
        return $this;
    }
    /**
     * UTS namespace to use for the container.
     *
     * @return string
     */
    public function getUTSMode() : string
    {
        return $this->uTSMode;
    }
    /**
     * UTS namespace to use for the container.
     *
     * @param string $uTSMode
     *
     * @return self
     */
    public function setUTSMode(string $uTSMode) : self
    {
        $this->uTSMode = $uTSMode;
        return $this;
    }
    /**
    * Sets the usernamespace mode for the container when usernamespace
    remapping option is enabled.
    
    *
    * @return string
    */
    public function getUsernsMode() : string
    {
        return $this->usernsMode;
    }
    /**
    * Sets the usernamespace mode for the container when usernamespace
    remapping option is enabled.
    
    *
    * @param string $usernsMode
    *
    * @return self
    */
    public function setUsernsMode(string $usernsMode) : self
    {
        $this->usernsMode = $usernsMode;
        return $this;
    }
    /**
     * Size of `/dev/shm` in bytes. If omitted, the system uses 64MB.
     *
     * @return int
     */
    public function getShmSize() : int
    {
        return $this->shmSize;
    }
    /**
     * Size of `/dev/shm` in bytes. If omitted, the system uses 64MB.
     *
     * @param int $shmSize
     *
     * @return self
     */
    public function setShmSize(int $shmSize) : self
    {
        $this->shmSize = $shmSize;
        return $this;
    }
    /**
    * A list of kernel parameters (sysctls) to set in the container.
    For example:
    
    ```
    {"net.ipv4.ip_forward": "1"}
    ```
    
    *
    * @return string[]
    */
    public function getSysctls() : iterable
    {
        return $this->sysctls;
    }
    /**
    * A list of kernel parameters (sysctls) to set in the container.
    For example:
    
    ```
    {"net.ipv4.ip_forward": "1"}
    ```
    
    *
    * @param string[] $sysctls
    *
    * @return self
    */
    public function setSysctls(iterable $sysctls) : self
    {
        $this->sysctls = $sysctls;
        return $this;
    }
    /**
     * Runtime to use with this container.
     *
     * @return string
     */
    public function getRuntime() : string
    {
        return $this->runtime;
    }
    /**
     * Runtime to use with this container.
     *
     * @param string $runtime
     *
     * @return self
     */
    public function setRuntime(string $runtime) : self
    {
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * Initial console size, as an `[height, width]` array. (Windows only)
     *
     * @return int[]
     */
    public function getConsoleSize() : array
    {
        return $this->consoleSize;
    }
    /**
     * Initial console size, as an `[height, width]` array. (Windows only)
     *
     * @param int[] $consoleSize
     *
     * @return self
     */
    public function setConsoleSize(array $consoleSize) : self
    {
        $this->consoleSize = $consoleSize;
        return $this;
    }
    /**
     * Isolation technology of the container. (Windows only)
     *
     * @return string
     */
    public function getIsolation() : string
    {
        return $this->isolation;
    }
    /**
     * Isolation technology of the container. (Windows only)
     *
     * @param string $isolation
     *
     * @return self
     */
    public function setIsolation(string $isolation) : self
    {
        $this->isolation = $isolation;
        return $this;
    }
    /**
    * The list of paths to be masked inside the container (this overrides
    the default set of paths).
    
    *
    * @return string[]
    */
    public function getMaskedPaths() : array
    {
        return $this->maskedPaths;
    }
    /**
    * The list of paths to be masked inside the container (this overrides
    the default set of paths).
    
    *
    * @param string[] $maskedPaths
    *
    * @return self
    */
    public function setMaskedPaths(array $maskedPaths) : self
    {
        $this->maskedPaths = $maskedPaths;
        return $this;
    }
    /**
    * The list of paths to be set as read-only inside the container
    (this overrides the default set of paths).
    
    *
    * @return string[]
    */
    public function getReadonlyPaths() : array
    {
        return $this->readonlyPaths;
    }
    /**
    * The list of paths to be set as read-only inside the container
    (this overrides the default set of paths).
    
    *
    * @param string[] $readonlyPaths
    *
    * @return self
    */
    public function setReadonlyPaths(array $readonlyPaths) : self
    {
        $this->readonlyPaths = $readonlyPaths;
        return $this;
    }
}