<?php

namespace PicturePark\API\Model;

class AssignLayerAction extends BusinessRuleAction
{
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->traceRefId = $traceRefId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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