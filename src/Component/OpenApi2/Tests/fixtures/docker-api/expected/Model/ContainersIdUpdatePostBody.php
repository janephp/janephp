<?php

namespace Docker\Api\Model;

class ContainersIdUpdatePostBody
{
    /**
     * An integer value representing this container's relative CPU weight
     * versus other containers.
     * 
     *
     * @var int
     */
    public int $cpuShares;
    /**
     * Memory limit in bytes.
     *
     * @var int
     */
    public int $memory = 0;
    /**
     * Path to `cgroups` under which the container's `cgroup` is created. If
     * the path is not absolute, the path is considered to be relative to the
     * `cgroups` path of the init process. Cgroups are created if they do not
     * already exist.
     * 
     *
     * @var string
     */
    public string $cgroupParent;
    /**
     * Block IO weight (relative weight).
     *
     * @var int
     */
    public int $blkioWeight;
    /**
     * Block IO weight (relative device weight) in the form:
     * 
     * ```
     * [{"Path": "device_path", "Weight": weight}]
     * ```
     * 
     *
     * @var list<ResourcesBlkioWeightDeviceItem>
     */
    public array $blkioWeightDevice;
    /**
     * Limit read rate (bytes per second) from a device, in the form:
     * 
     * ```
     * [{"Path": "device_path", "Rate": rate}]
     * ```
     * 
     *
     * @var list<ThrottleDevice>
     */
    public array $blkioDeviceReadBps;
    /**
     * Limit write rate (bytes per second) to a device, in the form:
     * 
     * ```
     * [{"Path": "device_path", "Rate": rate}]
     * ```
     * 
     *
     * @var list<ThrottleDevice>
     */
    public array $blkioDeviceWriteBps;
    /**
     * Limit read rate (IO per second) from a device, in the form:
     * 
     * ```
     * [{"Path": "device_path", "Rate": rate}]
     * ```
     * 
     *
     * @var list<ThrottleDevice>
     */
    public array $blkioDeviceReadIOps;
    /**
     * Limit write rate (IO per second) to a device, in the form:
     * 
     * ```
     * [{"Path": "device_path", "Rate": rate}]
     * ```
     * 
     *
     * @var list<ThrottleDevice>
     */
    public array $blkioDeviceWriteIOps;
    /**
     * The length of a CPU period in microseconds.
     *
     * @var int
     */
    public int $cpuPeriod;
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     * 
     *
     * @var int
     */
    public int $cpuQuota;
    /**
     * The length of a CPU real-time period in microseconds. Set to 0 to
     * allocate no time allocated to real-time tasks.
     * 
     *
     * @var int
     */
    public int $cpuRealtimePeriod;
    /**
     * The length of a CPU real-time runtime in microseconds. Set to 0 to
     * allocate no time allocated to real-time tasks.
     * 
     *
     * @var int
     */
    public int $cpuRealtimeRuntime;
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`).
     * 
     *
     * @var string
     */
    public string $cpusetCpus;
    /**
     * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only
     * effective on NUMA systems.
     * 
     *
     * @var string
     */
    public string $cpusetMems;
    /**
     * A list of devices to add to the container.
     *
     * @var list<DeviceMapping>
     */
    public array $devices;
    /**
     * a list of cgroup rules to apply to the container
     *
     * @var list<string>
     */
    public array $deviceCgroupRules;
    /**
     * A list of requests for devices to be sent to device drivers.
     * 
     *
     * @var list<DeviceRequest>
     */
    public array $deviceRequests;
    /**
     * Kernel memory limit in bytes.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is deprecated as the kernel 5.4 deprecated
     * > `kmem.limit_in_bytes`.
     * 
     *
     * @var int
     */
    public int $kernelMemory;
    /**
     * Hard limit for kernel TCP buffer memory (in bytes).
     *
     * @var int
     */
    public int $kernelMemoryTCP;
    /**
     * Memory soft limit in bytes.
     *
     * @var int
     */
    public int $memoryReservation;
    /**
     * Total memory limit (memory + swap). Set as `-1` to enable unlimited
     * swap.
     * 
     *
     * @var int
     */
    public int $memorySwap;
    /**
     * Tune a container's memory swappiness behavior. Accepts an integer
     * between 0 and 100.
     * 
     *
     * @var int
     */
    public int $memorySwappiness;
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @var int
     */
    public int $nanoCpus;
    /**
     * Disable OOM Killer for the container.
     *
     * @var bool
     */
    public bool $oomKillDisable;
    /**
     * Run an init inside the container that forwards signals and reaps
     * processes. This field is omitted if empty, and the default (as
     * configured on the daemon) is used.
     * 
     *
     * @var bool|null
     */
    public ?bool $init;
    /**
     * Tune a container's PIDs limit. Set `0` or `-1` for unlimited, or `null`
     * to not change.
     * 
     *
     * @var int|null
     */
    public ?int $pidsLimit;
    /**
     * A list of resource limits to set in the container. For example:
     * 
     * ```
     * {"Name": "nofile", "Soft": 1024, "Hard": 2048}
     * ```
     * 
     *
     * @var list<ResourcesUlimitsItem>
     */
    public array $ulimits;
    /**
     * The number of usable CPUs (Windows only).
     * 
     * On Windows Server containers, the processor resource controls are
     * mutually exclusive. The order of precedence is `CPUCount` first, then
     * `CPUShares`, and `CPUPercent` last.
     * 
     *
     * @var int
     */
    public int $cpuCount;
    /**
     * The usable percentage of the available CPUs (Windows only).
     * 
     * On Windows Server containers, the processor resource controls are
     * mutually exclusive. The order of precedence is `CPUCount` first, then
     * `CPUShares`, and `CPUPercent` last.
     * 
     *
     * @var int
     */
    public int $cpuPercent;
    /**
     * Maximum IOps for the container system drive (Windows only)
     *
     * @var int
     */
    public int $iOMaximumIOps;
    /**
     * Maximum IO in bytes per second for the container system drive
     * (Windows only).
     * 
     *
     * @var int
     */
    public int $iOMaximumBandwidth;
    /**
     * The behavior to apply when the container exits. The default is not to
     * restart.
     * 
     * An ever increasing delay (double the previous delay, starting at 100ms) is
     * added before each restart to prevent flooding the server.
     * 
     *
     * @var RestartPolicy
     */
    public RestartPolicy $restartPolicy;
}