<?php

namespace Github\Model;

class PagesSourceHash extends \ArrayObject
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
     * @var string
     */
    protected $branch;
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @return string
     */
    public function getBranch() : string
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param string $branch
     *
     * @return self
     */
    public function setBranch(string $branch) : self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
}