<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RulesResponseMetadata extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $sent;
    /**
     * 
     *
     * @var array<string, mixed>
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
        $this->initialized['sent'] = true;
        $this->sent = $sent;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getSummary() : iterable
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param array<string, mixed> $summary
     *
     * @return self
     */
    public function setSummary(iterable $summary) : self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
}