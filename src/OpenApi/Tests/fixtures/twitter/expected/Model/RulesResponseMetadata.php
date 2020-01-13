<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class RulesResponseMetadata
{
    /**
     * 
     *
     * @var string
     */
    protected $sent;
    /**
     * 
     *
     * @var mixed
     */
    protected $summary;
    /**
     * 
     *
     * @return string
     */
    public function getSent() : string
    {
        return $this->sent;
    }
    /**
     * 
     *
     * @param string $sent
     *
     * @return self
     */
    public function setSent(string $sent) : self
    {
        $this->sent = $sent;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param mixed $summary
     *
     * @return self
     */
    public function setSummary($summary) : self
    {
        $this->summary = $summary;
        return $this;
    }
}