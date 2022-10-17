<?php

namespace Github\Model;

class TeamRepositoryPermissions extends \ArrayObject
{
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
    protected $pull;
    /**
     * 
     *
     * @var bool
     */
    protected $triage;
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
    protected $maintain;
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
        $this->pull = $pull;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTriage() : bool
    {
        return $this->triage;
    }
    /**
     * 
     *
     * @param bool $triage
     *
     * @return self
     */
    public function setTriage(bool $triage) : self
    {
        $this->triage = $triage;
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
        $this->push = $push;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMaintain() : bool
    {
        return $this->maintain;
    }
    /**
     * 
     *
     * @param bool $maintain
     *
     * @return self
     */
    public function setMaintain(bool $maintain) : self
    {
        $this->maintain = $maintain;
        return $this;
    }
}