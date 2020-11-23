<?php

namespace PicturePark\API\Model;

class BulkResponse
{
    /**
     * Rows of the bulk response.
     *
     * @var BulkResponseRow[]|null
     */
    protected $rows;
    /**
     * Rows of the bulk response.
     *
     * @return BulkResponseRow[]|null
     */
    public function getRows() : ?array
    {
        return $this->rows;
    }
    /**
     * Rows of the bulk response.
     *
     * @param BulkResponseRow[]|null $rows
     *
     * @return self
     */
    public function setRows(?array $rows) : self
    {
        $this->rows = $rows;
        return $this;
    }
}