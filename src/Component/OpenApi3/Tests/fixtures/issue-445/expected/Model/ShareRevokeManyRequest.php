<?php

namespace PicturePark\API\Model;

class ShareRevokeManyRequest
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
     * @var list<string>|null
     */
    protected $ids;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param list<string>|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
}