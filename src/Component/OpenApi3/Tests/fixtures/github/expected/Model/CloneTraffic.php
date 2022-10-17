<?php

namespace Github\Model;

class CloneTraffic extends \ArrayObject
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
    protected $clones;
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
    public function getClones() : array
    {
        return $this->clones;
    }
    /**
     * 
     *
     * @param Traffic[] $clones
     *
     * @return self
     */
    public function setClones(array $clones) : self
    {
        $this->clones = $clones;
        return $this;
    }
}