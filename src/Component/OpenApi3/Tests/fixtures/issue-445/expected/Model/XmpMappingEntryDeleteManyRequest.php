<?php

namespace PicturePark\API\Model;

class XmpMappingEntryDeleteManyRequest
{
    /**
     * IDs to delete.
     *
     * @var string[]|null
     */
    protected $ids;
    /**
     * IDs to delete.
     *
     * @return string[]|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * IDs to delete.
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