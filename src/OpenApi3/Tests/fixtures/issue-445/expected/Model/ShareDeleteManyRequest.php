<?php

namespace PicturePark\API\Model;

class ShareDeleteManyRequest
{
    /**
     * IDs of shares to delete.
     *
     * @var string[]
     */
    protected $ids;
    /**
     * IDs of shares to delete.
     *
     * @return string[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * IDs of shares to delete.
     *
     * @param string[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->ids = $ids;
        return $this;
    }
}