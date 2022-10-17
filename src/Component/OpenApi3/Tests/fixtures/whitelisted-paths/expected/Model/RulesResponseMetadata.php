<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RulesResponseMetadata extends \ArrayObject
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
     * @var mixed[]
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
     * @return mixed[]
     */
    public function getSummary() : iterable
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param mixed[] $summary
     *
     * @return self
     */
    public function setSummary(iterable $summary) : self
    {
        $this->summary = $summary;
        return $this;
    }
}