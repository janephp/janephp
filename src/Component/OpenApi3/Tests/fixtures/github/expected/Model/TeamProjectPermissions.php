<?php

namespace Github\Model;

class TeamProjectPermissions extends \ArrayObject
{
    /**
     * 
     *
     * @var bool
     */
    protected $read;
    /**
     * 
     *
     * @var bool
     */
    protected $write;
    /**
     * 
     *
     * @var bool
     */
    protected $admin;
    /**
     * 
     *
     * @return bool
     */
    public function getRead() : bool
    {
        return $this->read;
    }
    /**
     * 
     *
     * @param bool $read
     *
     * @return self
     */
    public function setRead(bool $read) : self
    {
        $this->read = $read;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWrite() : bool
    {
        return $this->write;
    }
    /**
     * 
     *
     * @param bool $write
     *
     * @return self
     */
    public function setWrite(bool $write) : self
    {
        $this->write = $write;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAdmin() : bool
    {
        return $this->admin;
    }
    /**
     * 
     *
     * @param bool $admin
     *
     * @return self
     */
    public function setAdmin(bool $admin) : self
    {
        $this->admin = $admin;
        return $this;
    }
}