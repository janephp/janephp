<?php

namespace Docker\Api\Model;

class ContainerSummary
{
    /**
     * The ID of this container
     *
     * @var string
     */
    public string $id;
    /**
     * The names that this container has been given
     *
     * @var list<string>
     */
    public array $names;
    /**
     * The name of the image used when creating this container
     *
     * @var string
     */
    public string $image;
    /**
     * The ID of the image that this container was created from
     *
     * @var string
     */
    public string $imageID;
    /**
     * Command to run when starting the container
     *
     * @var string
     */
    public string $command;
    /**
     * When the container was created
     *
     * @var int
     */
    public int $created;
    /**
     * The ports exposed by this container
     *
     * @var list<Port>
     */
    public array $ports;
    /**
     * The size of files that have been created or changed by this container
     *
     * @var int
     */
    public int $sizeRw;
    /**
     * The total size of all the files in this container
     *
     * @var int
     */
    public int $sizeRootFs;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * The state of this container (e.g. `Exited`)
     *
     * @var string
     */
    public string $state;
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @var string
     */
    public string $status;
    /**
     * @var ContainerSummaryHostConfig
     */
    public ContainerSummaryHostConfig $hostConfig;
    /**
     * A summary of the container's network settings
     *
     * @var ContainerSummaryNetworkSettings
     */
    public ContainerSummaryNetworkSettings $networkSettings;
    /**
     * @var list<Mount>
     */
    public array $mounts;
}