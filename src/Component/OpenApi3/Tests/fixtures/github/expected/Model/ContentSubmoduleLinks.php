<?php

namespace Github\Model;

class ContentSubmoduleLinks
{
    /**
     * 
     *
     * @var string|null
     */
    protected $git;
    /**
     * 
     *
     * @var string|null
     */
    protected $html;
    /**
     * 
     *
     * @var string
     */
    protected $self;
    /**
     * 
     *
     * @return string|null
     */
    public function getGit() : ?string
    {
        return $this->git;
    }
    /**
     * 
     *
     * @param string|null $git
     *
     * @return self
     */
    public function setGit(?string $git) : self
    {
        $this->git = $git;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHtml() : ?string
    {
        return $this->html;
    }
    /**
     * 
     *
     * @param string|null $html
     *
     * @return self
     */
    public function setHtml(?string $html) : self
    {
        $this->html = $html;
        return $this;
    }
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
}