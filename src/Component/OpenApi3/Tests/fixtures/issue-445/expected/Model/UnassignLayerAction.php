<?php

namespace PicturePark\API\Model;

class UnassignLayerAction extends BusinessRuleAction
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
     * The ID of the layer.
     *
     * @var string|null
     */
    protected $layerId;
    /**
     * The ID of the layer.
     *
     * @return string|null
     */
    public function getLayerId() : ?string
    {
        return $this->layerId;
    }
    /**
     * The ID of the layer.
     *
     * @param string|null $layerId
     *
     * @return self
     */
    public function setLayerId(?string $layerId) : self
    {
        $this->initialized['layerId'] = true;
        $this->layerId = $layerId;
        return $this;
    }
}