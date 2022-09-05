<?php

namespace PicturePark\API\Model;

class OutputDataDocument extends OutputDataBase
{
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
        $this->pageCount = $pageCount;
        return $this;
    }
}