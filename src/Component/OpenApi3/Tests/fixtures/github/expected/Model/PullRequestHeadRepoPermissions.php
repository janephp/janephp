<?php

namespace Github\Model;

class PullRequestHeadRepoPermissions
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
    protected $push;
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
}