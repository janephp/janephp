<?php

namespace Docker\Api\Model;

class SystemVersion
{
    /**
     * @var SystemVersionPlatform
     */
    public SystemVersionPlatform $platform;
    /**
     * Information about system components
     * 
     *
     * @var list<SystemVersionComponentsItem>
     */
    public array $components;
    /**
     * The version of the daemon
     *
     * @var string
     */
    public string $version;
    /**
     * The default (and highest) API version that is supported by the daemon
     * 
     *
     * @var string
     */
    public string $apiVersion;
    /**
     * The minimum API version that is supported by the daemon
     * 
     *
     * @var string
     */
    public string $minAPIVersion;
    /**
     * The Git commit of the source code that was used to build the daemon
     * 
     *
     * @var string
     */
    public string $gitCommit;
    /**
     * The version Go used to compile the daemon, and the version of the Go
     * runtime in use.
     * 
     *
     * @var string
     */
    public string $goVersion;
    /**
     * The operating system that the daemon is running on ("linux" or "windows")
     * 
     *
     * @var string
     */
    public string $os;
    /**
     * The architecture that the daemon is running on
     * 
     *
     * @var string
     */
    public string $arch;
    /**
     * The kernel version (`uname -r`) that the daemon is running on.
     * 
     * This field is omitted when empty.
     * 
     *
     * @var string
     */
    public string $kernelVersion;
    /**
     * Indicates if the daemon is started with experimental features enabled.
     * 
     * This field is omitted when empty / false.
     * 
     *
     * @var bool
     */
    public bool $experimental;
    /**
     * The date and time that the daemon was compiled.
     * 
     *
     * @var string
     */
    public string $buildTime;
}