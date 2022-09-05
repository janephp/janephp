<?php

namespace PicturePark\API\Model;

class AssignLayerAction extends BusinessRuleAction
{
    /**
     * The ID of the layer.
     *
     * @var string|null
     */
    protected $layerId;
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @var mixed|null
     */
    protected $defaultValues;
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
        $this->layerId = $layerId;
        return $this;
    }
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @return mixed
     */
    public function getDefaultValues()
    {
        return $this->defaultValues;
    }
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @param mixed $defaultValues
     *
     * @return self
     */
    public function setDefaultValues($defaultValues) : self
    {
        $this->defaultValues = $defaultValues;
        return $this;
    }
}