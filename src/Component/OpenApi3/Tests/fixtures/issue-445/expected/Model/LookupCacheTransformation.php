<?php

namespace PicturePark\API\Model;

class LookupCacheTransformation extends BusinessRuleTransformation
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
     * Name of the cache to use.
     *
     * @var string|null
     */
    protected $namedCache;
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
     * Name of the cache to use.
     *
     * @return string|null
     */
    public function getNamedCache() : ?string
    {
        return $this->namedCache;
    }
    /**
     * Name of the cache to use.
     *
     * @param string|null $namedCache
     *
     * @return self
     */
    public function setNamedCache(?string $namedCache) : self
    {
        $this->namedCache = $namedCache;
        return $this;
    }
}