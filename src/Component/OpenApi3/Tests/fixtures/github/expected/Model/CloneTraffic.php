<?php

namespace Github\Model;

class CloneTraffic extends \ArrayObject
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
     * @var list<Traffic>
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
        $this->initialized['count'] = true;
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
        $this->initialized['uniques'] = true;
        $this->uniques = $uniques;
        return $this;
    }
    /**
     * 
     *
     * @return list<Traffic>
     */
    public function getClones() : array
    {
        return $this->clones;
    }
    /**
     * 
     *
     * @param list<Traffic> $clones
     *
     * @return self
     */
    public function setClones(array $clones) : self
    {
        $this->initialized['clones'] = true;
        $this->clones = $clones;
        return $this;
    }
}