<?php

namespace Github\Model;

class BranchWithProtectionLinks
{
    /**
     * 
     *
     * @var string
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