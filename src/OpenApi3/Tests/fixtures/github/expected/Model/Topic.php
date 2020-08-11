<?php

namespace Github\Model;

class Topic
{
    /**
     * 
     *
     * @var string[]
     */
    protected $names;
    /**
     * 
     *
     * @return string[]
     */
    public function getNames() : array
    {
        return $this->names;
    }
    /**
     * 
     *
     * @param string[] $names
     *
     * @return self
     */
    public function setNames(array $names) : self
    {
        $this->names = $names;
        return $this;
    }
}