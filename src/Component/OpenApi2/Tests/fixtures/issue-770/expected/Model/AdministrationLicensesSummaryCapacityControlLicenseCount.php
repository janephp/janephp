<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationLicensesSummaryCapacityControlLicenseCount
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * total count of licenses
     *
     * @var int
     */
    protected $totalCount;
    /**
     * consumed count of licenses
     *
     * @var int
     */
    protected $usedCount;
    /**
     * total count of licenses
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * total count of licenses
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * consumed count of licenses
     *
     * @return int
     */
    public function getUsedCount(): int
    {
        return $this->usedCount;
    }
    /**
     * consumed count of licenses
     *
     * @param int $usedCount
     *
     * @return self
     */
    public function setUsedCount(int $usedCount): self
    {
        $this->initialized['usedCount'] = true;
        $this->usedCount = $usedCount;
        return $this;
    }
}