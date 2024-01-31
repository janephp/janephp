<?php

namespace Github\Model;

class RepositoryTemplateRepositoryPermissions extends \ArrayObject
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
     * @var bool
     */
    protected $admin;
    /**
     * 
     *
     * @var bool
     */
    protected $push;
    /**
     * 
     *
     * @var bool
     */
    protected $pull;
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
        $this->initialized['admin'] = true;
        $this->admin = $admin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPush() : bool
    {
        return $this->push;
    }
    /**
     * 
     *
     * @param bool $push
     *
     * @return self
     */
    public function setPush(bool $push) : self
    {
        $this->initialized['push'] = true;
        $this->push = $push;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPull() : bool
    {
        return $this->pull;
    }
    /**
     * 
     *
     * @param bool $pull
     *
     * @return self
     */
    public function setPull(bool $pull) : self
    {
        $this->initialized['pull'] = true;
        $this->pull = $pull;
        return $this;
    }
}