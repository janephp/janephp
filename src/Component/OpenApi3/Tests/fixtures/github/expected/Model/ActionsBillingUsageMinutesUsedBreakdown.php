<?php

namespace Github\Model;

class ActionsBillingUsageMinutesUsedBreakdown extends \ArrayObject
{
    /**
     * Total minutes used on Ubuntu runner machines.
     *
     * @var int
     */
    protected $uBUNTU;
    /**
     * Total minutes used on macOS runner machines.
     *
     * @var int
     */
    protected $mACOS;
    /**
     * Total minutes used on Windows runner machines.
     *
     * @var int
     */
    protected $wINDOWS;
    /**
     * Total minutes used on Ubuntu runner machines.
     *
     * @return int
     */
    public function getUBUNTU() : int
    {
        return $this->uBUNTU;
    }
    /**
     * Total minutes used on Ubuntu runner machines.
     *
     * @param int $uBUNTU
     *
     * @return self
     */
    public function setUBUNTU(int $uBUNTU) : self
    {
        $this->uBUNTU = $uBUNTU;
        return $this;
    }
    /**
     * Total minutes used on macOS runner machines.
     *
     * @return int
     */
    public function getMACOS() : int
    {
        return $this->mACOS;
    }
    /**
     * Total minutes used on macOS runner machines.
     *
     * @param int $mACOS
     *
     * @return self
     */
    public function setMACOS(int $mACOS) : self
    {
        $this->mACOS = $mACOS;
        return $this;
    }
    /**
     * Total minutes used on Windows runner machines.
     *
     * @return int
     */
    public function getWINDOWS() : int
    {
        return $this->wINDOWS;
    }
    /**
     * Total minutes used on Windows runner machines.
     *
     * @param int $wINDOWS
     *
     * @return self
     */
    public function setWINDOWS(int $wINDOWS) : self
    {
        $this->wINDOWS = $wINDOWS;
        return $this;
    }
}