<?php

namespace PicturePark\API\Model;

class XmpMappingEntryDeleteManyRequest
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
     * IDs to delete.
     *
     * @var list<string>|null
     */
    protected $ids;
    /**
     * IDs to delete.
     *
     * @return list<string>|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * IDs to delete.
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