<?php

namespace Github\Model;

class HovercardContextsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $octicon;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOcticon() : string
    {
        return $this->octicon;
    }
    /**
     * 
     *
     * @param string $octicon
     *
     * @return self
     */
    public function setOcticon(string $octicon) : self
    {
        $this->octicon = $octicon;
        return $this;
    }
}