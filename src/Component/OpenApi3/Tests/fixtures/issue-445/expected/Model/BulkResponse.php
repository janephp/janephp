<?php

namespace PicturePark\API\Model;

class BulkResponse
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
     * Rows of the bulk response.
     *
     * @var list<BulkResponseRow>|null
     */
    protected $rows;
    /**
     * Rows of the bulk response.
     *
     * @return list<BulkResponseRow>|null
     */
    public function getRows() : ?array
    {
        return $this->rows;
    }
    /**
     * Rows of the bulk response.
     *
     * @param list<BulkResponseRow>|null $rows
     *
     * @return self
     */
    public function setRows(?array $rows) : self
    {
        $this->initialized['rows'] = true;
        $this->rows = $rows;
        return $this;
    }
}