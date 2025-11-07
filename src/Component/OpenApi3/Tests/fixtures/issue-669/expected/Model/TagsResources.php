<?php

namespace Jane\Generated\DigitalOcean\Model;

class TagsResources extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The number of tagged objects for this type of resource.
     *
     * @var int
     */
    protected $count;
    /**
     * The URI for the last tagged object for this type of resource.
     *
     * @var string
     */
    protected $lastTaggedUri;
    /**
     * @var TagsResourcesdroplets
     */
    protected $droplets;
    /**
     * @var TagsResourcesimgages
     */
    protected $imgages;
    /**
     * @var TagsResourcesvolumes
     */
    protected $volumes;
    /**
     * @var TagsResourcesvolumeSnapshots
     */
    protected $volumeSnapshots;
    /**
     * @var TagsResourcesdatabases
     */
    protected $databases;
    /**
     * The number of tagged objects for this type of resource.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * The number of tagged objects for this type of resource.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * The URI for the last tagged object for this type of resource.
     *
     * @return string
     */
    public function getLastTaggedUri(): string
    {
        return $this->lastTaggedUri;
    }
    /**
     * The URI for the last tagged object for this type of resource.
     *
     * @param string $lastTaggedUri
     *
     * @return self
     */
    public function setLastTaggedUri(string $lastTaggedUri): self
    {
        $this->initialized['lastTaggedUri'] = true;
        $this->lastTaggedUri = $lastTaggedUri;
        return $this;
    }
    /**
     * @return TagsResourcesdroplets
     */
    public function getDroplets(): TagsResourcesdroplets
    {
        return $this->droplets;
    }
    /**
     * @param TagsResourcesdroplets $droplets
     *
     * @return self
     */
    public function setDroplets(TagsResourcesdroplets $droplets): self
    {
        $this->initialized['droplets'] = true;
        $this->droplets = $droplets;
        return $this;
    }
    /**
     * @return TagsResourcesimgages
     */
    public function getImgages(): TagsResourcesimgages
    {
        return $this->imgages;
    }
    /**
     * @param TagsResourcesimgages $imgages
     *
     * @return self
     */
    public function setImgages(TagsResourcesimgages $imgages): self
    {
        $this->initialized['imgages'] = true;
        $this->imgages = $imgages;
        return $this;
    }
    /**
     * @return TagsResourcesvolumes
     */
    public function getVolumes(): TagsResourcesvolumes
    {
        return $this->volumes;
    }
    /**
     * @param TagsResourcesvolumes $volumes
     *
     * @return self
     */
    public function setVolumes(TagsResourcesvolumes $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * @return TagsResourcesvolumeSnapshots
     */
    public function getVolumeSnapshots(): TagsResourcesvolumeSnapshots
    {
        return $this->volumeSnapshots;
    }
    /**
     * @param TagsResourcesvolumeSnapshots $volumeSnapshots
     *
     * @return self
     */
    public function setVolumeSnapshots(TagsResourcesvolumeSnapshots $volumeSnapshots): self
    {
        $this->initialized['volumeSnapshots'] = true;
        $this->volumeSnapshots = $volumeSnapshots;
        return $this;
    }
    /**
     * @return TagsResourcesdatabases
     */
    public function getDatabases(): TagsResourcesdatabases
    {
        return $this->databases;
    }
    /**
     * @param TagsResourcesdatabases $databases
     *
     * @return self
     */
    public function setDatabases(TagsResourcesdatabases $databases): self
    {
        $this->initialized['databases'] = true;
        $this->databases = $databases;
        return $this;
    }
}