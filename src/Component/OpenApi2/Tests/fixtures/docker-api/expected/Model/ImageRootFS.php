<?php

namespace Docker\Api\Model;

class ImageRootFS
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
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string[]
     */
    protected $layers;
    /**
     * 
     *
     * @var string
     */
    protected $baseLayer;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
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
     * 
     *
     * @return string[]
     */
    public function getLayers() : array
    {
        return $this->layers;
    }
    /**
     * 
     *
     * @param string[] $layers
     *
     * @return self
     */
    public function setLayers(array $layers) : self
    {
        $this->initialized['layers'] = true;
        $this->layers = $layers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBaseLayer() : string
    {
        return $this->baseLayer;
    }
    /**
     * 
     *
     * @param string $baseLayer
     *
     * @return self
     */
    public function setBaseLayer(string $baseLayer) : self
    {
        $this->initialized['baseLayer'] = true;
        $this->baseLayer = $baseLayer;
        return $this;
    }
}