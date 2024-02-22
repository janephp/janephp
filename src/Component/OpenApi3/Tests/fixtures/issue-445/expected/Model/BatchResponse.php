<?php

namespace PicturePark\API\Model;

class BatchResponse
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
     * Rows in the response.
     *
     * @var list<BatchResponseRow>
     */
    protected $rows;
    /**
     * Rows in the response.
     *
     * @return list<BatchResponseRow>
     */
    public function getRows() : array
    {
        return $this->rows;
    }
    /**
     * Rows in the response.
     *
     * @param list<BatchResponseRow> $rows
     *
     * @return self
     */
    public function setRows(array $rows) : self
    {
        $this->initialized['rows'] = true;
        $this->rows = $rows;
        return $this;
    }
}