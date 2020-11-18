<?php

namespace PicturePark\API\Model;

class TakeArrayValueTransformation
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
     * Index of the item.
     *
     * @var string|null
     */
    protected $index;
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
     * Index of the item.
     *
     * @return string|null
     */
    public function getIndex() : ?string
    {
        return $this->index;
    }
    /**
     * Index of the item.
     *
     * @param string|null $index
     *
     * @return self
     */
    public function setIndex(?string $index) : self
    {
        $this->index = $index;
        return $this;
    }
}