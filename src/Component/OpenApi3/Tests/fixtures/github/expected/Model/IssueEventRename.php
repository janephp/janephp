<?php

namespace Github\Model;

class IssueEventRename extends \ArrayObject
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
    protected $from;
    /**
     * 
     *
     * @var string
     */
    protected $to;
    /**
     * 
     *
     * @return string
     */
    public function getFrom() : string
    {
        return $this->from;
    }
    /**
     * 
     *
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from) : self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTo() : string
    {
        return $this->to;
    }
    /**
     * 
     *
     * @param string $to
     *
     * @return self
     */
    public function setTo(string $to) : self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}