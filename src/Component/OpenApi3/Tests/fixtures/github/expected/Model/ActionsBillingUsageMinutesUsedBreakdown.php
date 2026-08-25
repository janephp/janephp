<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ActionsBillingUsageMinutesUsedBreakdown implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getUBUNTU(): int
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
    public function setUBUNTU(int $uBUNTU): self
    {
        $this->initialized['uBUNTU'] = true;
        $this->uBUNTU = $uBUNTU;
        return $this;
    }
    /**
     * Total minutes used on macOS runner machines.
     *
     * @return int
     */
    public function getMACOS(): int
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
    public function setMACOS(int $mACOS): self
    {
        $this->initialized['mACOS'] = true;
        $this->mACOS = $mACOS;
        return $this;
    }
    /**
     * Total minutes used on Windows runner machines.
     *
     * @return int
     */
    public function getWINDOWS(): int
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
    public function setWINDOWS(int $wINDOWS): self
    {
        $this->initialized['wINDOWS'] = true;
        $this->wINDOWS = $wINDOWS;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['uBUNTU' => ['UBUNTU', 'getUBUNTU', 'setUBUNTU'], 'mACOS' => ['MACOS', 'getMACOS', 'setMACOS'], 'wINDOWS' => ['WINDOWS', 'getWINDOWS', 'setWINDOWS']];
    }
}