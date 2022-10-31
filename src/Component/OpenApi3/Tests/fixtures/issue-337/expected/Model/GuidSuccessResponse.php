<?php

namespace CreditSafe\API\Model;

class GuidSuccessResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var GuidSuccessResponseGUIDListItem[]
     */
    protected $gUIDList;
    /**
     * 
     *
     * @return GuidSuccessResponseGUIDListItem[]
     */
    public function getGUIDList() : array
    {
        return $this->gUIDList;
    }
    /**
     * 
     *
     * @param GuidSuccessResponseGUIDListItem[] $gUIDList
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