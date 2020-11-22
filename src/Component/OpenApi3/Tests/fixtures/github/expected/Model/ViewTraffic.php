<?php

namespace Github\Model;

class ViewTraffic
{
    /**
     * 
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var int
     */
    protected $uniques;
    /**
     * 
     *
     * @var Traffic[]
     */
    protected $views;
    /**
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUniques() : int
    {
        return $this->uniques;
    }
    /**
     * 
     *
     * @param int $uniques
     *
     * @return self
     */
    public function setUniques(int $uniques) : self
    {
        $this->uniques = $uniques;
        return $this;
    }
    /**
     * 
     *
     * @return Traffic[]
     */
    public function getViews() : array
    {
        return $this->views;
    }
    /**
     * 
     *
     * @param Traffic[] $views
     *
     * @return self
     */
    public function setViews(array $views) : self
    {
        $this->views = $views;
        return $this;
    }
}