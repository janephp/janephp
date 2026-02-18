<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationLicensesSummary
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
     * license type description
     *
     * @var string
     */
    protected $licenseTypeDescription;
    /**
     * @var AdministrationLicensesSummaryCapacityControlLicenseCount
     */
    protected $capacityControlLicenseCount;
    /**
     * license type description
     *
     * @return string
     */
    public function getLicenseTypeDescription(): string
    {
        return $this->licenseTypeDescription;
    }
    /**
     * license type description
     *
     * @param string $licenseTypeDescription
     *
     * @return self
     */
    public function setLicenseTypeDescription(string $licenseTypeDescription): self
    {
        $this->initialized['licenseTypeDescription'] = true;
        $this->licenseTypeDescription = $licenseTypeDescription;
        return $this;
    }
    /**
     * @return AdministrationLicensesSummaryCapacityControlLicenseCount
     */
    public function getCapacityControlLicenseCount(): AdministrationLicensesSummaryCapacityControlLicenseCount
    {
        return $this->capacityControlLicenseCount;
    }
    /**
     * @param AdministrationLicensesSummaryCapacityControlLicenseCount $capacityControlLicenseCount
     *
     * @return self
     */
    public function setCapacityControlLicenseCount(AdministrationLicensesSummaryCapacityControlLicenseCount $capacityControlLicenseCount): self
    {
        $this->initialized['capacityControlLicenseCount'] = true;
        $this->capacityControlLicenseCount = $capacityControlLicenseCount;
        return $this;
    }
}