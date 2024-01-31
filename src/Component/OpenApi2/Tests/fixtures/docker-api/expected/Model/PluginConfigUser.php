<?php

namespace Docker\Api\Model;

class PluginConfigUser
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
    protected $uID;
    /**
     * 
     *
     * @var int
     */
    protected $gID;
    /**
     * 
     *
     * @return int
     */
    public function getUID() : int
    {
        return $this->uID;
    }
    /**
     * 
     *
     * @param int $uID
     *
     * @return self
     */
    public function setUID(int $uID) : self
    {
        $this->initialized['uID'] = true;
        $this->uID = $uID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGID() : int
    {
        return $this->gID;
    }
    /**
     * 
     *
     * @param int $gID
     *
     * @return self
     */
    public function setGID(int $gID) : self
    {
        $this->initialized['gID'] = true;
        $this->gID = $gID;
        return $this;
    }
}