<?php

namespace Github\Model;

class ParticipationStats extends \ArrayObject
{
    /**
     * 
     *
     * @var int[]
     */
    protected $all;
    /**
     * 
     *
     * @var int[]
     */
    protected $owner;
    /**
     * 
     *
     * @return int[]
     */
    public function getAll() : array
    {
        return $this->all;
    }
    /**
     * 
     *
     * @param int[] $all
     *
     * @return self
     */
    public function setAll(array $all) : self
    {
        $this->all = $all;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getOwner() : array
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param int[] $owner
     *
     * @return self
     */
    public function setOwner(array $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
}