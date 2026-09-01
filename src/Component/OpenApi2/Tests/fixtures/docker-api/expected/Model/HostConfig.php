<?php

namespace Docker\Api\Model;

class HostConfig
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
     * A list of volume bindings for this container. Each volume binding
     * is a string in one of these forms:
     * 
     * - `host-src:container-dest[:options]` to bind-mount a host path
     *   into the container. Both `host-src`, and `container-dest` must
     *   be an _absolute_ path.
     * - `volume-name:container-dest[:options]` to bind-mount a volume
     *   managed by a volume driver into the container. `container-dest`
     *   must be an _absolute_ path.
     * 
     * `options` is an optional, comma-delimited list of:
     * 
     * - `nocopy` disables automatic copying of data from the container
     *   path to the volume. The `nocopy` flag only applies to named volumes.
     * - `[ro|rw]` mounts a volume read-only or read-write, respectively.
     *   If omitted or set to `rw`, volumes are mounted read-write.
     * - `[z|Z]` applies SELinux labels to allow or deny multiple containers
     *   to read and write to the same volume.
     *     - `z`: a _shared_ content label is applied to the content. This
     *       label indicates that multiple containers can share the volume
     *       content, for both reading and writing.
     *     - `Z`: a _private unshared_ label is applied to the content.
     *       This label indicates that only the current container can use
     *       a private volume. Labeling systems such as SELinux require
     *       proper labels to be placed on volume content that is mounted
     *       into a container. Without a label, the security system can
     *       prevent a container's processes from using the content. By
     *       default, the labels set by the host operating system are not
     *       modified.
     * - `[[r]shared|[r]slave|[r]private]` specifies mount
     *   [propagation behavior](https://www.kernel.org/doc/Documentation/filesystems/sharedsubtree.txt).
     *   This only applies to bind-mounted volumes, not internal volumes
     *   or named volumes. Mount propagation requires the source mount
     *   point (the location where the source directory is mounted in the
     *   host operating system) to have the correct propagation properties.
     *   For shared volumes, the source mount point must be set to `shared`.
     *   For slave volumes, the mount must be set to either `shared` or
     *   `slave`.
     * 
     *
     * @var list<string>
     */
    public array $binds;
    /**
     * Path to a file where the container ID is written
     *
     * @var string
     */
    public string $containerIDFile;
    /**
     * The logging configuration for this container
     *
     * @var HostConfigLogConfig
     */
    public HostConfigLogConfig $logConfig;
    /**
     * Network mode to use for this container. Supported standard values
     * are: `bridge`, `host`, `none`, and `container:<name|id>`. Any
     * other value is taken as a custom network's name to which this
     * container should connect to.
     * 
     *
     * @var string
     */
    public string $networkMode;
    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     * 
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     * 
     *
     * @var array<string, list<PortBinding>>
     */
    public iterable $portBindings;
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
    /**
     * Automatically remove the container when the container's process
     * exits. This has no effect if `RestartPolicy` is set.
     * 
     *
     * @var bool
     */
    public bool $autoRemove;
    /**
     * Driver that this container uses to mount volumes.
     *
     * @var string
     */
    public string $volumeDriver;
    /**
     * A list of volumes to inherit from another container, specified in
     * the form `<container name>[:<ro|rw>]`.
     * 
     *
     * @var list<string>
     */
    public array $volumesFrom;
    /**
     * Specification for mounts to be added to the container.
     * 
     *
     * @var list<Mount>
     */
    public array $mounts;
    /**
     * A list of kernel capabilities to add to the container. Conflicts
     * with option 'Capabilities'.
     * 
     *
     * @var list<string>
     */
    public array $capAdd;
    /**
     * A list of kernel capabilities to drop from the container. Conflicts
     * with option 'Capabilities'.
     * 
     *
     * @var list<string>
     */
    public array $capDrop;
    /**
     * cgroup namespace mode for the container. Possible values are:
     * 
     * - `"private"`: the container runs in its own private cgroup namespace
     * - `"host"`: use the host system's cgroup namespace
     * 
     * If not specified, the daemon default is used, which can either be `"private"`
     * or `"host"`, depending on daemon version, kernel support and configuration.
     * 
     *
     * @var string
     */
    public string $cgroupnsMode;
    /**
     * A list of DNS servers for the container to use.
     *
     * @var list<string>
     */
    public array $dns;
    /**
     * A list of DNS options.
     *
     * @var list<string>
     */
    public array $dnsOptions;
    /**
     * A list of DNS search domains.
     *
     * @var list<string>
     */
    public array $dnsSearch;
    /**
     * A list of hostnames/IP mappings to add to the container's `/etc/hosts`
     * file. Specified in the form `["hostname:IP"]`.
     * 
     *
     * @var list<string>
     */
    public array $extraHosts;
    /**
     * A list of additional groups that the container process will run as.
     * 
     *
     * @var list<string>
     */
    public array $groupAdd;
    /**
     * IPC sharing mode for the container. Possible values are:
     * 
     * - `"none"`: own private IPC namespace, with /dev/shm not mounted
     * - `"private"`: own private IPC namespace
     * - `"shareable"`: own private IPC namespace, with a possibility to share it with other containers
     * - `"container:<name|id>"`: join another (shareable) container's IPC namespace
     * - `"host"`: use the host system's IPC namespace
     * 
     * If not specified, daemon default is used, which can either be `"private"`
     * or `"shareable"`, depending on daemon version and configuration.
     * 
     *
     * @var string
     */
    public string $ipcMode;
    /**
     * Cgroup to use for the container.
     *
     * @var string
     */
    public string $cgroup;
    /**
     * A list of links for the container in the form `container_name:alias`.
     * 
     *
     * @var list<string>
     */
    public array $links;
    /**
     * An integer value containing the score given to the container in
     * order to tune OOM killer preferences.
     * 
     *
     * @var int
     */
    public int $oomScoreAdj;
    /**
     * Set the PID (Process) Namespace mode for the container. It can be
     * either:
     * 
     * - `"container:<name|id>"`: joins another container's PID namespace
     * - `"host"`: use the host's PID namespace inside the container
     * 
     *
     * @var string
     */
    public string $pidMode;
    /**
     * Gives the container full access to the host.
     *
     * @var bool
     */
    public bool $privileged;
    /**
     * Allocates an ephemeral host port for all of a container's
     * exposed ports.
     * 
     * Ports are de-allocated when the container stops and allocated when
     * the container starts. The allocated port might be changed when
     * restarting the container.
     * 
     * The port is selected from the ephemeral port range that depends on
     * the kernel. For example, on Linux the range is defined by
     * `/proc/sys/net/ipv4/ip_local_port_range`.
     * 
     *
     * @var bool
     */
    public bool $publishAllPorts;
    /**
     * Mount the container's root filesystem as read only.
     *
     * @var bool
     */
    public bool $readonlyRootfs;
    /**
     * A list of string values to customize labels for MLS systems, such as SELinux.
     *
     * @var list<string>
     */
    public array $securityOpt;
    /**
     * Storage driver options for this container, in the form `{"size": "120G"}`.
     * 
     *
     * @var array<string, string>
     */
    public iterable $storageOpt;
    /**
     * A map of container directories which should be replaced by tmpfs
     * mounts, and their corresponding mount options. For example:
     * 
     * ```
     * { "/run": "rw,noexec,nosuid,size=65536k" }
     * ```
     * 
     *
     * @var array<string, string>
     */
    public iterable $tmpfs;
    /**
     * UTS namespace to use for the container.
     *
     * @var string
     */
    public string $uTSMode;
    /**
     * Sets the usernamespace mode for the container when usernamespace
     * remapping option is enabled.
     * 
     *
     * @var string
     */
    public string $usernsMode;
    /**
     * Size of `/dev/shm` in bytes. If omitted, the system uses 64MB.
     * 
     *
     * @var int
     */
    public int $shmSize;
    /**
     * A list of kernel parameters (sysctls) to set in the container.
     * For example:
     * 
     * ```
     * {"net.ipv4.ip_forward": "1"}
     * ```
     * 
     *
     * @var array<string, string>
     */
    public iterable $sysctls;
    /**
     * Runtime to use with this container.
     *
     * @var string
     */
    public string $runtime;
    /**
     * Initial console size, as an `[height, width]` array. (Windows only)
     * 
     *
     * @var list<int>
     */
    public array $consoleSize;
    /**
     * Isolation technology of the container. (Windows only)
     * 
     *
     * @var string
     */
    public string $isolation;
    /**
     * The list of paths to be masked inside the container (this overrides
     * the default set of paths).
     * 
     *
     * @var list<string>
     */
    public array $maskedPaths;
    /**
     * The list of paths to be set as read-only inside the container
     * (this overrides the default set of paths).
     * 
     *
     * @var list<string>
     */
    public array $readonlyPaths;
}