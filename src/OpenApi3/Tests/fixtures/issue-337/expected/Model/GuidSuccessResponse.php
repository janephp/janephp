<?php

namespace CreditSafe\API\Model;

class GuidSuccessResponse
{
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
        $this->gUIDList = $gUIDList;
        return $this;
    }
}