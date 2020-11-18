<?php

namespace PicturePark\API\Model;

class JoinByTransformation
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
     * Separator to use.
     *
     * @var string|null
     */
    protected $separator;
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
     * Separator to use.
     *
     * @return string|null
     */
    public function getSeparator() : ?string
    {
        return $this->separator;
    }
    /**
     * Separator to use.
     *
     * @param string|null $separator
     *
     * @return self
     */
    public function setSeparator(?string $separator) : self
    {
        $this->separator = $separator;
        return $this;
    }
}