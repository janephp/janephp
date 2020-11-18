<?php

namespace PicturePark\API\Model;

class BatchResponse
{
    /**
     * Rows in the response.
     *
     * @var BatchResponseRow[]
     */
    protected $rows;
    /**
     * Rows in the response.
     *
     * @return BatchResponseRow[]
     */
    public function getRows() : array
    {
        return $this->rows;
    }
    /**
     * Rows in the response.
     *
     * @param BatchResponseRow[] $rows
     *
     * @return self
     */
    public function setRows(array $rows) : self
    {
        $this->rows = $rows;
        return $this;
    }
}