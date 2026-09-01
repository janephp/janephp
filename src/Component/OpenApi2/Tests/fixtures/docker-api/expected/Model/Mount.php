<?php

namespace Docker\Api\Model;

class Mount
{
    /**
     * Container path.
     *
     * @var string
     */
    public string $target;
    /**
     * Mount source (e.g. a volume name, a host path).
     *
     * @var string
     */
    public string $source;
    /**
     * The mount type. Available types:
     * 
     * - `bind` Mounts a file or directory from the host into the container. Must exist prior to creating the container.
     * - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
     * - `tmpfs` Create a tmpfs with the given options. The mount source cannot be specified for tmpfs.
     * - `npipe` Mounts a named pipe from the host into the container. Must exist prior to creating the container.
     * 
     *
     * @var string
     */
    public string $type;
    /**
     * Whether the mount should be read-only.
     *
     * @var bool
     */
    public bool $readOnly;
    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @var string
     */
    public string $consistency;
    /**
     * Optional configuration for the `bind` type.
     *
     * @var MountBindOptions
     */
    public MountBindOptions $bindOptions;
    /**
     * Optional configuration for the `volume` type.
     *
     * @var MountVolumeOptions
     */
    public MountVolumeOptions $volumeOptions;
    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @var MountTmpfsOptions
     */
    public MountTmpfsOptions $tmpfsOptions;
}