<?php

namespace PicturePark\API\Model;

class ShareRevokeManyRequest
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $ids;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param string[]|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids) : self
    {
        $this->ids = $ids;
        return $this;
    }
}