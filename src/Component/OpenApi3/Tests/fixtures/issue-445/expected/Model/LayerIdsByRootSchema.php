<?php

namespace PicturePark\API\Model;

class LayerIdsByRootSchema
{
    /**
     * 
     *
     * @var string|null
     */
    protected $rootSchemaId;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $layerSchemaIds;
    /**
     * 
     *
     * @return string|null
     */
    public function getRootSchemaId() : ?string
    {
        return $this->rootSchemaId;
    }
    /**
     * 
     *
     * @param string|null $rootSchemaId
     *
     * @return self
     */
    public function setRootSchemaId(?string $rootSchemaId) : self
    {
        $this->rootSchemaId = $rootSchemaId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * 
     *
     * @param string[]|null $layerSchemaIds
     *
     * @return self
     */
    public function setLayerSchemaIds(?array $layerSchemaIds) : self
    {
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
}