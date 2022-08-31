<?php

namespace PicturePark\API\Model;

class NumberCompareCondition extends BusinessRuleCondition
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
     * JSON path to the field.
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
     * Mode to use for comparison.
     *
     * @var mixed
     */
    protected $mode;
    /**
     * Value to compare to.
     *
     * @var float
     */
    protected $value;
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
     * JSON path to the field.
     *
     * @return string|null
     */
    public function getFieldPath() : ?string
    {
        return $this->fieldPath;
    }
    /**
     * JSON path to the field.
     *
     * @param string|null $fieldPath
     *
     * @return self
     */
    public function setFieldPath(?string $fieldPath) : self
    {
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * Mode to use for comparison.
     *
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Mode to use for comparison.
     *
     * @param mixed $mode
     *
     * @return self
     */
    public function setMode($mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * Value to compare to.
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Value to compare to.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->value = $value;
        return $this;
    }
}