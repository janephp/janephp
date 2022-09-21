<?php

namespace ApiPlatform\Demo\Model;

class StatsGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $booksCount;
    /**
     * 
     *
     * @var int
     */
    protected $topbooksCount;
    /**
     * 
     *
     * @return int
     */
    public function getBooksCount() : int
    {
        return $this->booksCount;
    }
    /**
     * 
     *
     * @param int $booksCount
     *
     * @return self
     */
    public function setBooksCount(int $booksCount) : self
    {
        $this->booksCount = $booksCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTopbooksCount() : int
    {
        return $this->topbooksCount;
    }
    /**
     * 
     *
     * @param int $topbooksCount
     *
     * @return self
     */
    public function setTopbooksCount(int $topbooksCount) : self
    {
        $this->topbooksCount = $topbooksCount;
        return $this;
    }
}