<?php

namespace Docker\Api\Model;

class SystemDfGetResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $layersSize;
    /**
     * 
     *
     * @var list<ImageSummary>
     */
    protected $images;
    /**
     * 
     *
     * @var list<ContainerSummary>
     */
    protected $containers;
    /**
     * 
     *
     * @var list<Volume>
     */
    protected $volumes;
    /**
     * 
     *
     * @var list<BuildCache>
     */
    protected $buildCache;
    /**
     * 
     *
     * @return int
     */
    public function getLayersSize() : int
    {
        return $this->layersSize;
    }
    /**
     * 
     *
     * @param int $layersSize
     *
     * @return self
     */
    public function setLayersSize(int $layersSize) : self
    {
        $this->initialized['layersSize'] = true;
        $this->layersSize = $layersSize;
        return $this;
    }
    /**
     * 
     *
     * @return list<ImageSummary>
     */
    public function getImages() : array
    {
        return $this->images;
    }
    /**
     * 
     *
     * @param list<ImageSummary> $images
     *
     * @return self
     */
    public function setImages(array $images) : self
    {
        $this->initialized['images'] = true;
        $this->images = $images;
        return $this;
    }
    /**
     * 
     *
     * @return list<ContainerSummary>
     */
    public function getContainers() : array
    {
        return $this->containers;
    }
    /**
     * 
     *
     * @param list<ContainerSummary> $containers
     *
     * @return self
     */
    public function setContainers(array $containers) : self
    {
        $this->initialized['containers'] = true;
        $this->containers = $containers;
        return $this;
    }
    /**
     * 
     *
     * @return list<Volume>
     */
    public function getVolumes() : array
    {
        return $this->volumes;
    }
    /**
     * 
     *
     * @param list<Volume> $volumes
     *
     * @return self
     */
    public function setVolumes(array $volumes) : self
    {
        $this->initialized['volumes'] = true;
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * 
     *
     * @return list<BuildCache>
     */
    public function getBuildCache() : array
    {
        return $this->buildCache;
    }
    /**
     * 
     *
     * @param list<BuildCache> $buildCache
     *
     * @return self
     */
    public function setBuildCache(array $buildCache) : self
    {
        $this->initialized['buildCache'] = true;
        $this->buildCache = $buildCache;
        return $this;
    }
}