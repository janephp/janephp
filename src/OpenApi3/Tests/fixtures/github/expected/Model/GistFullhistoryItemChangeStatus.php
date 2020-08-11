<?php

namespace Github\Model;

class GistFullhistoryItemChangeStatus
{
    /**
     * 
     *
     * @var int
     */
    protected $deletions;
    /**
     * 
     *
     * @var int
     */
    protected $additions;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return int
     */
    public function getDeletions() : int
    {
        return $this->deletions;
    }
    /**
     * 
     *
     * @param int $deletions
     *
     * @return self
     */
    public function setDeletions(int $deletions) : self
    {
        $this->deletions = $deletions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAdditions() : int
    {
        return $this->additions;
    }
    /**
     * 
     *
     * @param int $additions
     *
     * @return self
     */
    public function setAdditions(int $additions) : self
    {
        $this->additions = $additions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->total = $total;
        return $this;
    }
}