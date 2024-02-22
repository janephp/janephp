<?php

namespace PicturePark\API\Model;

class ShareDeleteManyRequest
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
     * IDs of shares to delete.
     *
     * @var list<string>
     */
    protected $ids;
    /**
     * IDs of shares to delete.
     *
     * @return list<string>
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * IDs of shares to delete.
     *
     * @param list<string> $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
}