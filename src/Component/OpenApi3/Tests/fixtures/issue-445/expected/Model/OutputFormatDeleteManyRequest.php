<?php

namespace PicturePark\API\Model;

class OutputFormatDeleteManyRequest
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
     * List of IDs of output formats to remove.
     *
     * @var list<string>|null
     */
    protected $ids;
    /**
     * List of IDs of output formats to remove.
     *
     * @return list<string>|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * List of IDs of output formats to remove.
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