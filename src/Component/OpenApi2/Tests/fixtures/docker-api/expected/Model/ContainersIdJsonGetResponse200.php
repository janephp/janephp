<?php

namespace Docker\Api\Model;

class ContainersIdJsonGetResponse200
{
    /**
     * The ID of the container
     *
     * @var string
     */
    public string $id;
    /**
     * The time the container was created
     *
     * @var string
     */
    public string $created;
    /**
     * The path to the command being run
     *
     * @var string
     */
    public string $path;
    /**
     * The arguments to the command being run
     *
     * @var list<string>
     */
    public array $args;
    /**
     * ContainerState stores container's running state. It's part of ContainerJSONBase
     * and will be returned by the "inspect" command.
     * 
     *
     * @var ContainerState
     */
    public ContainerState $state;
    /**
     * The container's image ID
     *
     * @var string
     */
    public string $image;
    /**
     * @var string
     */
    public string $resolvConfPath;
    /**
     * @var string
     */
    public string $hostnamePath;
    /**
     * @var string
     */
    public string $hostsPath;
    /**
     * @var string
     */
    public string $logPath;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var int
     */
    public int $restartCount;
    /**
     * @var string
     */
    public string $driver;
    /**
     * @var string
     */
    public string $platform;
    /**
     * @var string
     */
    public string $mountLabel;
    /**
     * @var string
     */
    public string $processLabel;
    /**
     * @var string
     */
    public string $appArmorProfile;
    /**
     * IDs of exec instances that are running in the container.
     *
     * @var list<string>|null
     */
    public ?array $execIDs;
    /**
     * Container configuration that depends on the host we are running on
     *
     * @var HostConfig
     */
    public HostConfig $hostConfig;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData
     */
    public GraphDriverData $graphDriver;
    /**
     * The size of files that have been created or changed by this
     * container.
     * 
     *
     * @var int
     */
    public int $sizeRw;
    /**
     * The total size of all the files in this container.
     *
     * @var int
     */
    public int $sizeRootFs;
    /**
     * @var list<MountPoint>
     */
    public array $mounts;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig
     */
    public ContainerConfig $config;
    /**
     * NetworkSettings exposes the network settings in the API
     *
     * @var NetworkSettings
     */
    public NetworkSettings $networkSettings;
}