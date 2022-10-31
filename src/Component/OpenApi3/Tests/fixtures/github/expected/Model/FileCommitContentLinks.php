<?php

namespace Github\Model;

class FileCommitContentLinks extends \ArrayObject
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
    protected $self;
    /**
     * 
     *
     * @var string
     */
    protected $git;
    /**
     * 
     *
     * @var string
     */
    protected $html;
    /**
     * 
     *
     * @return string
     */
    public function getSelf() : string
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param string $self
     *
     * @return self
     */
    public function setSelf(string $self) : self
    {
        $this->initialized['self'] = true;
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGit() : string
    {
        return $this->git;
    }
    /**
     * 
     *
     * @param string $git
     *
     * @return self
     */
    public function setGit(string $git) : self
    {
        $this->initialized['git'] = true;
        $this->git = $git;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtml() : string
    {
        return $this->html;
    }
    /**
     * 
     *
     * @param string $html
     *
     * @return self
     */
    public function setHtml(string $html) : self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
}