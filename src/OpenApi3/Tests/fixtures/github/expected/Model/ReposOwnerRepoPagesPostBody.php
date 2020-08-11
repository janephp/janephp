<?php

namespace Github\Model;

class ReposOwnerRepoPagesPostBody
{
    /**
     * 
     *
     * @var ReposOwnerRepoPagesPostBodySource
     */
    protected $source;
    /**
     * 
     *
     * @return ReposOwnerRepoPagesPostBodySource
     */
    public function getSource() : ReposOwnerRepoPagesPostBodySource
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param ReposOwnerRepoPagesPostBodySource $source
     *
     * @return self
     */
    public function setSource(ReposOwnerRepoPagesPostBodySource $source) : self
    {
        $this->source = $source;
        return $this;
    }
}