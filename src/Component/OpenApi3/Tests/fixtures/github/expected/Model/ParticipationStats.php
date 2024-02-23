<?php

namespace Github\Model;

class ParticipationStats extends \ArrayObject
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
     * @var list<int>
     */
    protected $all;
    /**
     * 
     *
     * @var list<int>
     */
    protected $owner;
    /**
     * 
     *
     * @return list<int>
     */
    public function getAll() : array
    {
        return $this->all;
    }
    /**
     * 
     *
     * @param list<int> $all
     *
     * @return self
     */
    public function setAll(array $all) : self
    {
        $this->initialized['all'] = true;
        $this->all = $all;
        return $this;
    }
    /**
     * 
     *
     * @return list<int>
     */
    public function getOwner() : array
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param list<int> $owner
     *
     * @return self
     */
    public function setOwner(array $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
}