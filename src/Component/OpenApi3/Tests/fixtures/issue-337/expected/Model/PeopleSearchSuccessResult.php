<?php

namespace CreditSafe\API\Model;

class PeopleSearchSuccessResult
{
    /**
     * 
     *
     * @var int
     */
    protected $totalSize;
    /**
     * 
     *
     * @var PeopleSearchSuccessResultDirectorsItem[]
     */
    protected $directors;
    /**
     * 
     *
     * @return int
     */
    public function getTotalSize() : int
    {
        return $this->totalSize;
    }
    /**
     * 
     *
     * @param int $totalSize
     *
     * @return self
     */
    public function setTotalSize(int $totalSize) : self
    {
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return PeopleSearchSuccessResultDirectorsItem[]
     */
    public function getDirectors() : array
    {
        return $this->directors;
    }
    /**
     * 
     *
     * @param PeopleSearchSuccessResultDirectorsItem[] $directors
     *
     * @return self
     */
    public function setDirectors(array $directors) : self
    {
        $this->directors = $directors;
        return $this;
    }
}