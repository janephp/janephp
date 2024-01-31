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
        $this->initialized['rows'] = true;
        $this->rows = $rows;
        return $this;
    }
}