<?php

namespace Github\Model;

class PackagesBillingUsage extends \ArrayObject
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
     * Sum of the free and paid storage space (GB) for GitHuub Packages.
     *
     * @var int
     */
    protected $totalGigabytesBandwidthUsed;
    /**
     * Total paid storage space (GB) for GitHuub Packages.
     *
     * @var int
     */
    protected $totalPaidGigabytesBandwidthUsed;
    /**
     * Free storage space (GB) for GitHub Packages.
     *
     * @var int
     */
    protected $includedGigabytesBandwidth;
    /**
     * Sum of the free and paid storage space (GB) for GitHuub Packages.
     *
     * @return int
     */
    public function getTotalGigabytesBandwidthUsed() : int
    {
        return $this->totalGigabytesBandwidthUsed;
    }
    /**
     * Sum of the free and paid storage space (GB) for GitHuub Packages.
     *
     * @param int $totalGigabytesBandwidthUsed
     *
     * @return self
     */
    public function setTotalGigabytesBandwidthUsed(int $totalGigabytesBandwidthUsed) : self
    {
        $this->initialized['totalGigabytesBandwidthUsed'] = true;
        $this->totalGigabytesBandwidthUsed = $totalGigabytesBandwidthUsed;
        return $this;
    }
    /**
     * Total paid storage space (GB) for GitHuub Packages.
     *
     * @return int
     */
    public function getTotalPaidGigabytesBandwidthUsed() : int
    {
        return $this->totalPaidGigabytesBandwidthUsed;
    }
    /**
     * Total paid storage space (GB) for GitHuub Packages.
     *
     * @param int $totalPaidGigabytesBandwidthUsed
     *
     * @return self
     */
    public function setTotalPaidGigabytesBandwidthUsed(int $totalPaidGigabytesBandwidthUsed) : self
    {
        $this->initialized['totalPaidGigabytesBandwidthUsed'] = true;
        $this->totalPaidGigabytesBandwidthUsed = $totalPaidGigabytesBandwidthUsed;
        return $this;
    }
    /**
     * Free storage space (GB) for GitHub Packages.
     *
     * @return int
     */
    public function getIncludedGigabytesBandwidth() : int
    {
        return $this->includedGigabytesBandwidth;
    }
    /**
     * Free storage space (GB) for GitHub Packages.
     *
     * @param int $includedGigabytesBandwidth
     *
     * @return self
     */
    public function setIncludedGigabytesBandwidth(int $includedGigabytesBandwidth) : self
    {
        $this->initialized['includedGigabytesBandwidth'] = true;
        $this->includedGigabytesBandwidth = $includedGigabytesBandwidth;
        return $this;
    }
}