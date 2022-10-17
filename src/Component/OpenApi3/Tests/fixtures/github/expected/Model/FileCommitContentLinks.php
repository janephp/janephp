<?php

namespace Github\Model;

class FileCommitContentLinks extends \ArrayObject
{
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
        $this->html = $html;
        return $this;
    }
}