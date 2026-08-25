<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class BillingDataPoint implements AdditionalPropertiesInterface
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
     * URN of the team that incurred the usage
     *
     * @var string
     */
    protected $usageTeamUrn;
    /**
     * Start date of the billing data point in YYYY-MM-DD format
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * Total amount for this data point in USD
     *
     * @var string
     */
    protected $totalAmount;
    /**
     * Region where the usage occurred
     *
     * @var string
     */
    protected $region;
    /**
     * Unique SKU identifier for the billed resource
     *
     * @var string
     */
    protected $sku;
    /**
     * Description of the billed resource or service as shown on an invoice item
     *
     * @var string
     */
    protected $description;
    /**
     * Optional invoice item group name of the billed resource or service, blank when not part an invoice item group
     *
     * @var string
     */
    protected $groupDescription;
    /**
     * URN of the team that incurred the usage
     *
     * @return string
     */
    public function getUsageTeamUrn(): string
    {
        return $this->usageTeamUrn;
    }
    /**
     * URN of the team that incurred the usage
     *
     * @param string $usageTeamUrn
     *
     * @return self
     */
    public function setUsageTeamUrn(string $usageTeamUrn): self
    {
        $this->initialized['usageTeamUrn'] = true;
        $this->usageTeamUrn = $usageTeamUrn;
        return $this;
    }
    /**
     * Start date of the billing data point in YYYY-MM-DD format
     *
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }
    /**
     * Start date of the billing data point in YYYY-MM-DD format
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Total amount for this data point in USD
     *
     * @return string
     */
    public function getTotalAmount(): string
    {
        return $this->totalAmount;
    }
    /**
     * Total amount for this data point in USD
     *
     * @param string $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(string $totalAmount): self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * Region where the usage occurred
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region where the usage occurred
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * Unique SKU identifier for the billed resource
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * Unique SKU identifier for the billed resource
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Description of the billed resource or service as shown on an invoice item
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the billed resource or service as shown on an invoice item
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Optional invoice item group name of the billed resource or service, blank when not part an invoice item group
     *
     * @return string
     */
    public function getGroupDescription(): string
    {
        return $this->groupDescription;
    }
    /**
     * Optional invoice item group name of the billed resource or service, blank when not part an invoice item group
     *
     * @param string $groupDescription
     *
     * @return self
     */
    public function setGroupDescription(string $groupDescription): self
    {
        $this->initialized['groupDescription'] = true;
        $this->groupDescription = $groupDescription;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['usageTeamUrn' => ['usage_team_urn', 'getUsageTeamUrn', 'setUsageTeamUrn'], 'startDate' => ['start_date', 'getStartDate', 'setStartDate'], 'totalAmount' => ['total_amount', 'getTotalAmount', 'setTotalAmount'], 'region' => ['region', 'getRegion', 'setRegion'], 'sku' => ['sku', 'getSku', 'setSku'], 'description' => ['description', 'getDescription', 'setDescription'], 'groupDescription' => ['group_description', 'getGroupDescription', 'setGroupDescription']];
    }
}