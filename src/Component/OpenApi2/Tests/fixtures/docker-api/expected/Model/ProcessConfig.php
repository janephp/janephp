<?php

namespace Docker\Api\Model;

class ProcessConfig
{
    /**
     * 
     *
     * @var bool
     */
    protected $privileged;
    /**
     * 
     *
     * @var string
     */
    protected $user;
    /**
     * 
     *
     * @var bool
     */
    protected $tty;
    /**
     * 
     *
     * @var string
     */
    protected $entrypoint;
    /**
     * 
     *
     * @var string[]
     */
    protected $arguments;
    /**
     * 
     *
     * @return bool
     */
    public function getPrivileged() : bool
    {
        return $this->privileged;
    }
    /**
     * 
     *
     * @param bool $privileged
     *
     * @return self
     */
    public function setPrivileged(bool $privileged) : self
    {
        $this->privileged = $privileged;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTty() : bool
    {
        return $this->tty;
    }
    /**
     * 
     *
     * @param bool $tty
     *
     * @return self
     */
    public function setTty(bool $tty) : self
    {
        $this->tty = $tty;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntrypoint() : string
    {
        return $this->entrypoint;
    }
    /**
     * 
     *
     * @param string $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(string $entrypoint) : self
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getArguments() : array
    {
        return $this->arguments;
    }
    /**
     * 
     *
     * @param string[] $arguments
     *
     * @return self
     */
    public function setArguments(array $arguments) : self
    {
        $this->arguments = $arguments;
        return $this;
    }
}