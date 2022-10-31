<?php

namespace Docker\Api\Model;

class Mount
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Container path.
     *
     * @var string
     */
    protected $target;
    /**
     * Mount source (e.g. a volume name, a host path).
     *
     * @var string
     */
    protected $source;
    /**
    * The mount type. Available types:
    
    - `bind` Mounts a file or directory from the host into the container. Must exist prior to creating the container.
    - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
    - `tmpfs` Create a tmpfs with the given options. The mount source cannot be specified for tmpfs.
    - `npipe` Mounts a named pipe from the host into the container. Must exist prior to creating the container.
    
    *
    * @var string
    */
    protected $type;
    /**
     * Whether the mount should be read-only.
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @var string
     */
    protected $consistency;
    /**
     * Optional configuration for the `bind` type.
     *
     * @var MountBindOptions
     */
    protected $bindOptions;
    /**
     * Optional configuration for the `volume` type.
     *
     * @var MountVolumeOptions
     */
    protected $volumeOptions;
    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @var MountTmpfsOptions
     */
    protected $tmpfsOptions;
    /**
     * Container path.
     *
     * @return string
     */
    public function getTarget() : string
    {
        return $this->target;
    }
    /**
     * Container path.
     *
     * @param string $target
     *
     * @return self
     */
    public function setTarget(string $target) : self
    {
        $this->initialized['target'] = true;
        $this->target = $target;
        return $this;
    }
    /**
     * Mount source (e.g. a volume name, a host path).
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * Mount source (e.g. a volume name, a host path).
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
    * The mount type. Available types:
    
    - `bind` Mounts a file or directory from the host into the container. Must exist prior to creating the container.
    - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
    - `tmpfs` Create a tmpfs with the given options. The mount source cannot be specified for tmpfs.
    - `npipe` Mounts a named pipe from the host into the container. Must exist prior to creating the container.
    
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * The mount type. Available types:
    
    - `bind` Mounts a file or directory from the host into the container. Must exist prior to creating the container.
    - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
    - `tmpfs` Create a tmpfs with the given options. The mount source cannot be specified for tmpfs.
    - `npipe` Mounts a named pipe from the host into the container. Must exist prior to creating the container.
    
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Whether the mount should be read-only.
     *
     * @return bool
     */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * Whether the mount should be read-only.
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @return string
     */
    public function getConsistency() : string
    {
        return $this->consistency;
    }
    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @param string $consistency
     *
     * @return self
     */
    public function setConsistency(string $consistency) : self
    {
        $this->initialized['consistency'] = true;
        $this->consistency = $consistency;
        return $this;
    }
    /**
     * Optional configuration for the `bind` type.
     *
     * @return MountBindOptions
     */
    public function getBindOptions() : MountBindOptions
    {
        return $this->bindOptions;
    }
    /**
     * Optional configuration for the `bind` type.
     *
     * @param MountBindOptions $bindOptions
     *
     * @return self
     */
    public function setBindOptions(MountBindOptions $bindOptions) : self
    {
        $this->initialized['bindOptions'] = true;
        $this->bindOptions = $bindOptions;
        return $this;
    }
    /**
     * Optional configuration for the `volume` type.
     *
     * @return MountVolumeOptions
     */
    public function getVolumeOptions() : MountVolumeOptions
    {
        return $this->volumeOptions;
    }
    /**
     * Optional configuration for the `volume` type.
     *
     * @param MountVolumeOptions $volumeOptions
     *
     * @return self
     */
    public function setVolumeOptions(MountVolumeOptions $volumeOptions) : self
    {
        $this->initialized['volumeOptions'] = true;
        $this->volumeOptions = $volumeOptions;
        return $this;
    }
    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @return MountTmpfsOptions
     */
    public function getTmpfsOptions() : MountTmpfsOptions
    {
        return $this->tmpfsOptions;
    }
    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @param MountTmpfsOptions $tmpfsOptions
     *
     * @return self
     */
    public function setTmpfsOptions(MountTmpfsOptions $tmpfsOptions) : self
    {
        $this->initialized['tmpfsOptions'] = true;
        $this->tmpfsOptions = $tmpfsOptions;
        return $this;
    }
}