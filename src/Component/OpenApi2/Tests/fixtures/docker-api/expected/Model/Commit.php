<?php

namespace Docker\Api\Model;

class Commit
{
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
        $this->expected = $expected;
        return $this;
    }
}