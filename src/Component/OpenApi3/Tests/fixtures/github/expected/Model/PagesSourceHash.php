<?php

namespace Github\Model;

class PagesSourceHash extends \ArrayObject
{
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
        $this->path = $path;
        return $this;
    }
}