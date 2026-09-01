<?php

namespace Docker\Api\Model;

class SystemInfo
{
    /**
     * Unique identifier of the daemon.
     * 
     * <p><br /></p>
     * 
     * > **Note**: The format of the ID itself is not part of the API, and
     * > should not be considered stable.
     * 
     *
     * @var string
     */
    public string $iD;
    /**
     * Total number of containers on the host.
     *
     * @var int
     */
    public int $containers;
    /**
     * Number of containers with status `"running"`.
     * 
     *
     * @var int
     */
    public int $containersRunning;
    /**
     * Number of containers with status `"paused"`.
     * 
     *
     * @var int
     */
    public int $containersPaused;
    /**
     * Number of containers with status `"stopped"`.
     * 
     *
     * @var int
     */
    public int $containersStopped;
    /**
     * Total number of images on the host.
     * 
     * Both _tagged_ and _untagged_ (dangling) images are counted.
     * 
     *
     * @var int
     */
    public int $images;
    /**
     * Name of the storage driver in use.
     *
     * @var string
     */
    public string $driver;
    /**
     * Information specific to the storage driver, provided as
     * "label" / "value" pairs.
     * 
     * This information is provided by the storage driver, and formatted
     * in a way consistent with the output of `docker info` on the command
     * line.
     * 
     * <p><br /></p>
     * 
     * > **Note**: The information returned in this field, including the
     * > formatting of values and labels, should not be considered stable,
     * > and may change without notice.
     * 
     *
     * @var list<list<string>>
     */
    public array $driverStatus;
    /**
     * Root directory of persistent Docker state.
     * 
     * Defaults to `/var/lib/docker` on Linux, and `C:\ProgramData\docker`
     * on Windows.
     * 
     *
     * @var string
     */
    public string $dockerRootDir;
    /**
     * Available plugins per type.
     * 
     * <p><br /></p>
     * 
     * > **Note**: Only unmanaged (V1) plugins are included in this list.
     * > V1 plugins are "lazily" loaded, and are not returned in this list
     * > if there is no resource using the plugin.
     * 
     *
     * @var PluginsInfo
     */
    public PluginsInfo $plugins;
    /**
     * Indicates if the host has memory limit support enabled.
     *
     * @var bool
     */
    public bool $memoryLimit;
    /**
     * Indicates if the host has memory swap limit support enabled.
     *
     * @var bool
     */
    public bool $swapLimit;
    /**
     * Indicates if the host has kernel memory limit support enabled.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is deprecated as the kernel 5.4 deprecated
     * > `kmem.limit_in_bytes`.
     * 
     *
     * @var bool
     */
    public bool $kernelMemory;
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) period is supported by
     * the host.
     * 
     *
     * @var bool
     */
    public bool $cpuCfsPeriod;
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) quota is supported by
     * the host.
     * 
     *
     * @var bool
     */
    public bool $cpuCfsQuota;
    /**
     * Indicates if CPU Shares limiting is supported by the host.
     * 
     *
     * @var bool
     */
    public bool $cPUShares;
    /**
     * Indicates if CPUsets (cpuset.cpus, cpuset.mems) are supported by the host.
     * 
     * See [cpuset(7)](https://www.kernel.org/doc/Documentation/cgroup-v1/cpusets.txt)
     * 
     *
     * @var bool
     */
    public bool $cPUSet;
    /**
     * Indicates if the host kernel has PID limit support enabled.
     *
     * @var bool
     */
    public bool $pidsLimit;
    /**
     * Indicates if OOM killer disable is supported on the host.
     *
     * @var bool
     */
    public bool $oomKillDisable;
    /**
     * Indicates IPv4 forwarding is enabled.
     *
     * @var bool
     */
    public bool $iPv4Forwarding;
    /**
     * Indicates if `bridge-nf-call-iptables` is available on the host.
     *
     * @var bool
     */
    public bool $bridgeNfIptables;
    /**
     * Indicates if `bridge-nf-call-ip6tables` is available on the host.
     *
     * @var bool
     */
    public bool $bridgeNfIp6tables;
    /**
     * Indicates if the daemon is running in debug-mode / with debug-level
     * logging enabled.
     * 
     *
     * @var bool
     */
    public bool $debug;
    /**
     * The total number of file Descriptors in use by the daemon process.
     * 
     * This information is only returned if debug-mode is enabled.
     * 
     *
     * @var int
     */
    public int $nFd;
    /**
     * The  number of goroutines that currently exist.
     * 
     * This information is only returned if debug-mode is enabled.
     * 
     *
     * @var int
     */
    public int $nGoroutines;
    /**
     * Current system-time in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
     * format with nano-seconds.
     * 
     *
     * @var string
     */
    public string $systemTime;
    /**
     * The logging driver to use as a default for new containers.
     * 
     *
     * @var string
     */
    public string $loggingDriver;
    /**
     * The driver to use for managing cgroups.
     * 
     *
     * @var string
     */
    public string $cgroupDriver = 'cgroupfs';
    /**
     * The version of the cgroup.
     * 
     *
     * @var string
     */
    public string $cgroupVersion = '1';
    /**
     * Number of event listeners subscribed.
     *
     * @var int
     */
    public int $nEventsListener;
    /**
     * Kernel version of the host.
     * 
     * On Linux, this information obtained from `uname`. On Windows this
     * information is queried from the <kbd>HKEY_LOCAL_MACHINE\\SOFTWARE\\Microsoft\\Windows NT\\CurrentVersion\\</kbd>
     * registry value, for example _"10.0 14393 (14393.1198.amd64fre.rs1_release_sec.170427-1353)"_.
     * 
     *
     * @var string
     */
    public string $kernelVersion;
    /**
     * Name of the host's operating system, for example: "Ubuntu 16.04.2 LTS"
     * or "Windows Server 2016 Datacenter"
     * 
     *
     * @var string
     */
    public string $operatingSystem;
    /**
     * Version of the host's operating system
     * 
     * <p><br /></p>
     * 
     * > **Note**: The information returned in this field, including its
     * > very existence, and the formatting of values, should not be considered
     * > stable, and may change without notice.
     * 
     *
     * @var string
     */
    public string $oSVersion;
    /**
     * Generic type of the operating system of the host, as returned by the
     * Go runtime (`GOOS`).
     * 
     * Currently returned values are "linux" and "windows". A full list of
     * possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
     * 
     *
     * @var string
     */
    public string $oSType;
    /**
     * Hardware architecture of the host, as returned by the Go runtime
     * (`GOARCH`).
     * 
     * A full list of possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
     * 
     *
     * @var string
     */
    public string $architecture;
    /**
     * The number of logical CPUs usable by the daemon.
     * 
     * The number of available CPUs is checked by querying the operating
     * system when the daemon starts. Changes to operating system CPU
     * allocation after the daemon is started are not reflected.
     * 
     *
     * @var int
     */
    public int $nCPU;
    /**
     * Total amount of physical memory available on the host, in bytes.
     * 
     *
     * @var int
     */
    public int $memTotal;
    /**
     * Address / URL of the index server that is used for image search,
     * and as a default for user authentication for Docker Hub and Docker Cloud.
     * 
     *
     * @var string
     */
    public string $indexServerAddress = 'https://index.docker.io/v1/';
    /**
     * RegistryServiceConfig stores daemon registry services configuration.
     * 
     *
     * @var RegistryServiceConfig|null
     */
    public ?RegistryServiceConfig $registryConfig;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     * 
     *
     * @var list<GenericResourcesItem>
     */
    public array $genericResources;
    /**
     * HTTP-proxy configured for the daemon. This value is obtained from the
     * [`HTTP_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
     * Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
     * are masked in the API response.
     * 
     * Containers do not automatically inherit this configuration.
     * 
     *
     * @var string
     */
    public string $httpProxy;
    /**
     * HTTPS-proxy configured for the daemon. This value is obtained from the
     * [`HTTPS_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
     * Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
     * are masked in the API response.
     * 
     * Containers do not automatically inherit this configuration.
     * 
     *
     * @var string
     */
    public string $httpsProxy;
    /**
     * Comma-separated list of domain extensions for which no proxy should be
     * used. This value is obtained from the [`NO_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html)
     * environment variable.
     * 
     * Containers do not automatically inherit this configuration.
     * 
     *
     * @var string
     */
    public string $noProxy;
    /**
     * Hostname of the host.
     *
     * @var string
     */
    public string $name;
    /**
     * User-defined labels (key/value metadata) as set on the daemon.
     * 
     * <p><br /></p>
     * 
     * > **Note**: When part of a Swarm, nodes can both have _daemon_ labels,
     * > set through the daemon configuration, and _node_ labels, set from a
     * > manager node in the Swarm. Node labels are not included in this
     * > field. Node labels can be retrieved using the `/nodes/(id)` endpoint
     * > on a manager node in the Swarm.
     * 
     *
     * @var list<string>
     */
    public array $labels;
    /**
     * Indicates if experimental features are enabled on the daemon.
     * 
     *
     * @var bool
     */
    public bool $experimentalBuild;
    /**
     * Version string of the daemon.
     * 
     * > **Note**: the [standalone Swarm API](/swarm/swarm-api/)
     * > returns the Swarm version instead of the daemon  version, for example
     * > `swarm/1.2.8`.
     * 
     *
     * @var string
     */
    public string $serverVersion;
    /**
     * URL of the distributed storage backend.
     * 
     * 
     * The storage backend is used for multihost networking (to store
     * network and endpoint information) and by the node discovery mechanism.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when using standalone Swarm
     * > mode, and overlay networking using an external k/v store. Overlay
     * > networks with Swarm mode enabled use the built-in raft store, and
     * > this field will be empty.
     * 
     *
     * @var string
     */
    public string $clusterStore;
    /**
     * The network endpoint that the Engine advertises for the purpose of
     * node discovery. ClusterAdvertise is a `host:port` combination on which
     * the daemon is reachable by other hosts.
     * 
     * <p><br /></p>
     * 
     * > **Deprecated**: This field is only propagated when using standalone Swarm
     * > mode, and overlay networking using an external k/v store. Overlay
     * > networks with Swarm mode enabled use the built-in raft store, and
     * > this field will be empty.
     * 
     *
     * @var string
     */
    public string $clusterAdvertise;
    /**
     * List of [OCI compliant](https://github.com/opencontainers/runtime-spec)
     * runtimes configured on the daemon. Keys hold the "name" used to
     * reference the runtime.
     * 
     * The Docker daemon relies on an OCI compliant runtime (invoked via the
     * `containerd` daemon) as its interface to the Linux kernel namespaces,
     * cgroups, and SELinux.
     * 
     * The default runtime is `runc`, and automatically configured. Additional
     * runtimes can be configured by the user and will be listed here.
     * 
     *
     * @var array<string, Runtime>
     */
    public iterable $runtimes;
    /**
     * Name of the default OCI runtime that is used when starting containers.
     * 
     * The default can be overridden per-container at create time.
     * 
     *
     * @var string
     */
    public string $defaultRuntime = 'runc';
    /**
     * Represents generic information about swarm.
     * 
     *
     * @var SwarmInfo
     */
    public SwarmInfo $swarm;
    /**
     * Indicates if live restore is enabled.
     * 
     * If enabled, containers are kept running when the daemon is shutdown
     * or upon daemon start if running containers are detected.
     * 
     *
     * @var bool
     */
    public bool $liveRestoreEnabled = false;
    /**
     * Represents the isolation technology to use as a default for containers.
     * The supported values are platform-specific.
     * 
     * If no isolation value is specified on daemon start, on Windows client,
     * the default is `hyperv`, and on Windows server, the default is `process`.
     * 
     * This option is currently not used on other platforms.
     * 
     *
     * @var string
     */
    public string $isolation = 'default';
    /**
     * Name and, optional, path of the `docker-init` binary.
     * 
     * If the path is omitted, the daemon searches the host's `$PATH` for the
     * binary and uses the first result.
     * 
     *
     * @var string
     */
    public string $initBinary;
    /**
     * Commit holds the Git-commit (SHA1) that a binary was built from, as
     * reported in the version-string of external tools, such as `containerd`,
     * or `runC`.
     * 
     *
     * @var Commit
     */
    public Commit $containerdCommit;
    /**
     * Commit holds the Git-commit (SHA1) that a binary was built from, as
     * reported in the version-string of external tools, such as `containerd`,
     * or `runC`.
     * 
     *
     * @var Commit
     */
    public Commit $runcCommit;
    /**
     * Commit holds the Git-commit (SHA1) that a binary was built from, as
     * reported in the version-string of external tools, such as `containerd`,
     * or `runC`.
     * 
     *
     * @var Commit
     */
    public Commit $initCommit;
    /**
     * List of security features that are enabled on the daemon, such as
     * apparmor, seccomp, SELinux, user-namespaces (userns), and rootless.
     * 
     * Additional configuration options for each security feature may
     * be present, and are included as a comma-separated list of key/value
     * pairs.
     * 
     *
     * @var list<string>
     */
    public array $securityOptions;
    /**
     * Reports a summary of the product license on the daemon.
     * 
     * If a commercial license has been applied to the daemon, information
     * such as number of nodes, and expiration are included.
     * 
     *
     * @var string
     */
    public string $productLicense;
    /**
     * List of custom default address pools for local networks, which can be
     * specified in the daemon.json file or dockerd option.
     * 
     * Example: a Base "10.10.0.0/16" with Size 24 will define the set of 256
     * 10.10.[0-255].0/24 address pools.
     * 
     *
     * @var list<SystemInfoDefaultAddressPoolsItem>
     */
    public array $defaultAddressPools;
    /**
     * List of warnings / informational messages about missing features, or
     * issues related to the daemon configuration.
     * 
     * These messages can be printed by the client as information to the user.
     * 
     *
     * @var list<string>
     */
    public array $warnings;
}