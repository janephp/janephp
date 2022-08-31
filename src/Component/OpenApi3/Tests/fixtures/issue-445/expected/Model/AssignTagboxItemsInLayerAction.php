<?php

namespace PicturePark\API\Model;

class AssignTagboxItemsInLayerAction extends BusinessRuleAction
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
     * Named cache to use for lookup, should be of type SchemaTagboxFilterLookupNamedCacheConfiguration
     *
     * @var string|null
     */
    protected $namedCache;
    /**
     * List of refIds of the items that should be assigned.
     *
     * @var mixed|null
     */
    protected $refIds;
    /**
    * Indicates where the assignment should be additive to the already assigned tags
    or if existing tags should be replaced.
    *
    * @var bool
    */
    protected $replace;
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
     * Named cache to use for lookup, should be of type SchemaTagboxFilterLookupNamedCacheConfiguration
     *
     * @return string|null
     */
    public function getNamedCache() : ?string
    {
        return $this->namedCache;
    }
    /**
     * Named cache to use for lookup, should be of type SchemaTagboxFilterLookupNamedCacheConfiguration
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
    /**
     * List of refIds of the items that should be assigned.
     *
     * @return mixed
     */
    public function getRefIds()
    {
        return $this->refIds;
    }
    /**
     * List of refIds of the items that should be assigned.
     *
     * @param mixed $refIds
     *
     * @return self
     */
    public function setRefIds($refIds) : self
    {
        $this->refIds = $refIds;
        return $this;
    }
    /**
    * Indicates where the assignment should be additive to the already assigned tags
    or if existing tags should be replaced.
    *
    * @return bool
    */
    public function getReplace() : bool
    {
        return $this->replace;
    }
    /**
    * Indicates where the assignment should be additive to the already assigned tags
    or if existing tags should be replaced.
    *
    * @param bool $replace
    *
    * @return self
    */
    public function setReplace(bool $replace) : self
    {
        $this->replace = $replace;
        return $this;
    }
}