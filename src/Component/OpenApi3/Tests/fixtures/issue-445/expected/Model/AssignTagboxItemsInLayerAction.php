<?php

namespace PicturePark\API\Model;

class AssignTagboxItemsInLayerAction extends BusinessRuleAction
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['namedCache'] = true;
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
        $this->initialized['refIds'] = true;
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
        $this->initialized['replace'] = true;
        $this->replace = $replace;
        return $this;
    }
}