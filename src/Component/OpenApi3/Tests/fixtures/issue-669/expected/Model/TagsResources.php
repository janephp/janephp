<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResources implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * @var TagsResourcesDroplets
     */
    protected $droplets;
    /**
     * @var TagsResourcesImgages
     */
    protected $imgages;
    /**
     * @var TagsResourcesVolumes
     */
    protected $volumes;
    /**
     * @var TagsResourcesVolumeSnapshots
     */
    protected $volumeSnapshots;
    /**
     * @var TagsResourcesDatabases
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
     * @return TagsResourcesDroplets
     */
    public function getDroplets(): TagsResourcesDroplets
    {
        return $this->droplets;
    }
    /**
     * @param TagsResourcesDroplets $droplets
     *
     * @return self
     */
    public function setDroplets(TagsResourcesDroplets $droplets): self
    {
        $this->initialized['droplets'] = true;
        $this->droplets = $droplets;
        return $this;
    }
    /**
     * @return TagsResourcesImgages
     */
    public function getImgages(): TagsResourcesImgages
    {
        return $this->imgages;
    }
    /**
     * @param TagsResourcesImgages $imgages
     *
     * @return self
     */
    public function setImgages(TagsResourcesImgages $imgages): self
    {
        $this->initialized['imgages'] = true;
        $this->imgages = $imgages;
        return $this;
    }
    /**
     * @return TagsResourcesVolumes
     */
    public function getVolumes(): TagsResourcesVolumes
    {
        return $this->volumes;
    }
    /**
     * @param TagsResourcesVolumes $volumes
     *
     * @return self
     */
    public function setVolumes(TagsResourcesVolumes $volumes): self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * @return TagsResourcesVolumeSnapshots
     */
    public function getVolumeSnapshots(): TagsResourcesVolumeSnapshots
    {
        return $this->volumeSnapshots;
    }
    /**
     * @param TagsResourcesVolumeSnapshots $volumeSnapshots
     *
     * @return self
     */
    public function setVolumeSnapshots(TagsResourcesVolumeSnapshots $volumeSnapshots): self
    {
        $this->initialized['volumeSnapshots'] = true;
        $this->volumeSnapshots = $volumeSnapshots;
        return $this;
    }
    /**
     * @return TagsResourcesDatabases
     */
    public function getDatabases(): TagsResourcesDatabases
    {
        return $this->databases;
    }
    /**
     * @param TagsResourcesDatabases $databases
     *
     * @return self
     */
    public function setDatabases(TagsResourcesDatabases $databases): self
    {
        $this->initialized['databases'] = true;
        $this->databases = $databases;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['count' => ['count', 'getCount', 'setCount'], 'lastTaggedUri' => ['last_tagged_uri', 'getLastTaggedUri', 'setLastTaggedUri'], 'droplets' => ['droplets', 'getDroplets', 'setDroplets'], 'imgages' => ['imgages', 'getImgages', 'setImgages'], 'volumes' => ['volumes', 'getVolumes', 'setVolumes'], 'volumeSnapshots' => ['volume_snapshots', 'getVolumeSnapshots', 'setVolumeSnapshots'], 'databases' => ['databases', 'getDatabases', 'setDatabases']];
    }
}