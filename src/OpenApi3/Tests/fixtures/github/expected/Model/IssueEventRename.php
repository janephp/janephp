<?php

namespace Github\Model;

class IssueEventRename
{
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
        $this->to = $to;
        return $this;
    }
}