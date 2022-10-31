<?php

namespace Github\Model;

class PorterLargeFile extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $refName;
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var string
     */
    protected $oid;
    /**
     * 
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @return string
     */
    public function getRefName() : string
    {
        return $this->refName;
    }
    /**
     * 
     *
     * @param string $refName
     *
     * @return self
     */
    public function setRefName(string $refName) : self
    {
        $this->initialized['refName'] = true;
        $this->refName = $refName;
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
    /**
     * 
     *
     * @return string
     */
    public function getOid() : string
    {
        return $this->oid;
    }
    /**
     * 
     *
     * @param string $oid
     *
     * @return self
     */
    public function setOid(string $oid) : self
    {
        $this->initialized['oid'] = true;
        $this->oid = $oid;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
}