<?php

namespace CreditSafe\API\Model;

class GuidSuccessResponse extends \ArrayObject
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
     * 
     *
     * @var list<GuidSuccessResponseGUIDListItem>
     */
    protected $gUIDList;
    /**
     * 
     *
     * @return list<GuidSuccessResponseGUIDListItem>
     */
    public function getGUIDList() : array
    {
        return $this->gUIDList;
    }
    /**
     * 
     *
     * @param list<GuidSuccessResponseGUIDListItem> $gUIDList
     *
     * @return self
     */
    public function setGUIDList(array $gUIDList) : self
    {
        $this->initialized['gUIDList'] = true;
        $this->gUIDList = $gUIDList;
        return $this;
    }
}