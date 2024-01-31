<?php

namespace Docker\Api\Model;

class SwarmSpecEncryptionConfig
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
    * If set, generate a key and use it to lock data stored on the
    managers.
    
    *
    * @var bool
    */
    protected $autoLockManagers;
    /**
    * If set, generate a key and use it to lock data stored on the
    managers.
    
    *
    * @return bool
    */
    public function getAutoLockManagers() : bool
    {
        return $this->autoLockManagers;
    }
    /**
    * If set, generate a key and use it to lock data stored on the
    managers.
    
    *
    * @param bool $autoLockManagers
    *
    * @return self
    */
    public function setAutoLockManagers(bool $autoLockManagers) : self
    {
        $this->initialized['autoLockManagers'] = true;
        $this->autoLockManagers = $autoLockManagers;
        return $this;
    }
}