<?php

namespace Docker\Api\Model;

class Commit
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
     * Actual commit ID of external tool.
     *
     * @var string
     */
    protected $iD;
    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     *
     * @var string
     */
    protected $expected;
    /**
     * Actual commit ID of external tool.
     *
     * @return string
     */
    public function getID() : string
    {
        return $this->iD;
    }
    /**
     * Actual commit ID of external tool.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(string $iD) : self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     *
     * @return string
     */
    public function getExpected() : string
    {
        return $this->expected;
    }
    /**
     * Commit ID of external tool expected by dockerd as set at build time.
     *
     * @param string $expected
     *
     * @return self
     */
    public function setExpected(string $expected) : self
    {
        $this->initialized['expected'] = true;
        $this->expected = $expected;
        return $this;
    }
}