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
     * @var mixed[]|null
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
     * @return mixed[]|null
     */
    public function getDefaultValues() : ?iterable
    {
        return $this->defaultValues;
    }
    /**
     * An object containing default values (used for example to populate required fields).
     *
     * @param mixed[]|null $defaultValues
     *
     * @return self
     */
    public function setDefaultValues(?iterable $defaultValues) : self
    {
        $this->defaultValues = $defaultValues;
        return $this;
    }
}