<?php

namespace Docker\Api\Model;

class SystemDfGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $layersSize;
    /**
     * 
     *
     * @var ImageSummary[]
     */
    protected $images;
    /**
     * 
     *
     * @var ContainerSummary[]
     */
    protected $containers;
    /**
     * 
     *
     * @var Volume[]
     */
    protected $volumes;
    /**
     * 
     *
     * @var BuildCache[]
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
        $this->layersSize = $layersSize;
        return $this;
    }
    /**
     * 
     *
     * @return ImageSummary[]
     */
    public function getImages() : array
    {
        return $this->images;
    }
    /**
     * 
     *
     * @param ImageSummary[] $images
     *
     * @return self
     */
    public function setImages(array $images) : self
    {
        $this->images = $images;
        return $this;
    }
    /**
     * 
     *
     * @return ContainerSummary[]
     */
    public function getContainers() : array
    {
        return $this->containers;
    }
    /**
     * 
     *
     * @param ContainerSummary[] $containers
     *
     * @return self
     */
    public function setContainers(array $containers) : self
    {
        $this->containers = $containers;
        return $this;
    }
    /**
     * 
     *
     * @return Volume[]
     */
    public function getVolumes() : array
    {
        return $this->volumes;
    }
    /**
     * 
     *
     * @param Volume[] $volumes
     *
     * @return self
     */
    public function setVolumes(array $volumes) : self
    {
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * 
     *
     * @return BuildCache[]
     */
    public function getBuildCache() : array
    {
        return $this->buildCache;
    }
    /**
     * 
     *
     * @param BuildCache[] $buildCache
     *
     * @return self
     */
    public function setBuildCache(array $buildCache) : self
    {
        $this->buildCache = $buildCache;
        return $this;
    }
}