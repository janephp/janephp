<?php

namespace Docker\Api\Model;

class ContainerSummary
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
     * The ID of this container
     *
     * @var string
     */
    protected $id;
    /**
     * The names that this container has been given
     *
     * @var string[]
     */
    protected $names;
    /**
     * The name of the image used when creating this container
     *
     * @var string
     */
    protected $image;
    /**
     * The ID of the image that this container was created from
     *
     * @var string
     */
    protected $imageID;
    /**
     * Command to run when starting the container
     *
     * @var string
     */
    protected $command;
    /**
     * When the container was created
     *
     * @var int
     */
    protected $created;
    /**
     * The ports exposed by this container
     *
     * @var Port[]
     */
    protected $ports;
    /**
     * The size of files that have been created or changed by this container
     *
     * @var int
     */
    protected $sizeRw;
    /**
     * The total size of all the files in this container
     *
     * @var int
     */
    protected $sizeRootFs;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * The state of this container (e.g. `Exited`)
     *
     * @var string
     */
    protected $state;
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var ContainerSummaryHostConfig
     */
    protected $hostConfig;
    /**
     * A summary of the container's network settings
     *
     * @var ContainerSummaryNetworkSettings
     */
    protected $networkSettings;
    /**
     * 
     *
     * @var Mount[]
     */
    protected $mounts;
    /**
     * The ID of this container
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The ID of this container
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The names that this container has been given
     *
     * @return string[]
     */
    public function getNames() : array
    {
        return $this->names;
    }
    /**
     * The names that this container has been given
     *
     * @param string[] $names
     *
     * @return self
     */
    public function setNames(array $names) : self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * The name of the image used when creating this container
     *
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }
    /**
     * The name of the image used when creating this container
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * The ID of the image that this container was created from
     *
     * @return string
     */
    public function getImageID() : string
    {
        return $this->imageID;
    }
    /**
     * The ID of the image that this container was created from
     *
     * @param string $imageID
     *
     * @return self
     */
    public function setImageID(string $imageID) : self
    {
        $this->initialized['imageID'] = true;
        $this->imageID = $imageID;
        return $this;
    }
    /**
     * Command to run when starting the container
     *
     * @return string
     */
    public function getCommand() : string
    {
        return $this->command;
    }
    /**
     * Command to run when starting the container
     *
     * @param string $command
     *
     * @return self
     */
    public function setCommand(string $command) : self
    {
        $this->initialized['command'] = true;
        $this->command = $command;
        return $this;
    }
    /**
     * When the container was created
     *
     * @return int
     */
    public function getCreated() : int
    {
        return $this->created;
    }
    /**
     * When the container was created
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(int $created) : self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * The ports exposed by this container
     *
     * @return Port[]
     */
    public function getPorts() : array
    {
        return $this->ports;
    }
    /**
     * The ports exposed by this container
     *
     * @param Port[] $ports
     *
     * @return self
     */
    public function setPorts(array $ports) : self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;
        return $this;
    }
    /**
     * The size of files that have been created or changed by this container
     *
     * @return int
     */
    public function getSizeRw() : int
    {
        return $this->sizeRw;
    }
    /**
     * The size of files that have been created or changed by this container
     *
     * @param int $sizeRw
     *
     * @return self
     */
    public function setSizeRw(int $sizeRw) : self
    {
        $this->initialized['sizeRw'] = true;
        $this->sizeRw = $sizeRw;
        return $this;
    }
    /**
     * The total size of all the files in this container
     *
     * @return int
     */
    public function getSizeRootFs() : int
    {
        return $this->sizeRootFs;
    }
    /**
     * The total size of all the files in this container
     *
     * @param int $sizeRootFs
     *
     * @return self
     */
    public function setSizeRootFs(int $sizeRootFs) : self
    {
        $this->initialized['sizeRootFs'] = true;
        $this->sizeRootFs = $sizeRootFs;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * The state of this container (e.g. `Exited`)
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state of this container (e.g. `Exited`)
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return ContainerSummaryHostConfig
     */
    public function getHostConfig() : ContainerSummaryHostConfig
    {
        return $this->hostConfig;
    }
    /**
     * 
     *
     * @param ContainerSummaryHostConfig $hostConfig
     *
     * @return self
     */
    public function setHostConfig(ContainerSummaryHostConfig $hostConfig) : self
    {
        $this->initialized['hostConfig'] = true;
        $this->hostConfig = $hostConfig;
        return $this;
    }
    /**
     * A summary of the container's network settings
     *
     * @return ContainerSummaryNetworkSettings
     */
    public function getNetworkSettings() : ContainerSummaryNetworkSettings
    {
        return $this->networkSettings;
    }
    /**
     * A summary of the container's network settings
     *
     * @param ContainerSummaryNetworkSettings $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(ContainerSummaryNetworkSettings $networkSettings) : self
    {
        $this->initialized['networkSettings'] = true;
        $this->networkSettings = $networkSettings;
        return $this;
    }
    /**
     * 
     *
     * @return Mount[]
     */
    public function getMounts() : array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param Mount[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts) : self
    {
        $this->initialized['mounts'] = true;
        $this->mounts = $mounts;
        return $this;
    }
}