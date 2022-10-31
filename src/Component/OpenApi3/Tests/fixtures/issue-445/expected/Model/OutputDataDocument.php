<?php

namespace PicturePark\API\Model;

class OutputDataDocument extends OutputDataBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Number of document's pages.
     *
     * @var int
     */
    protected $pageCount;
    /**
     * Number of document's pages.
     *
     * @return int
     */
    public function getPageCount() : int
    {
        return $this->pageCount;
    }
    /**
     * Number of document's pages.
     *
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount(int $pageCount) : self
    {
        $this->initialized['pageCount'] = true;
        $this->pageCount = $pageCount;
        return $this;
    }
}