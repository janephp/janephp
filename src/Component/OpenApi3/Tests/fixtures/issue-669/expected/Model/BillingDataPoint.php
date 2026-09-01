<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class BillingDataPoint implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * URN of the team that incurred the usage
     *
     * @var string
     */
    public string $usageTeamUrn;
    /**
     * Start date of the billing data point in YYYY-MM-DD format
     *
     * @var \DateTime
     */
    public \DateTime $startDate;
    /**
     * Total amount for this data point in USD
     *
     * @var string
     */
    public string $totalAmount;
    /**
     * Region where the usage occurred
     *
     * @var string
     */
    public string $region;
    /**
     * Unique SKU identifier for the billed resource
     *
     * @var string
     */
    public string $sku;
    /**
     * Description of the billed resource or service as shown on an invoice item
     *
     * @var string
     */
    public string $description;
    /**
     * Optional invoice item group name of the billed resource or service, blank when not part an invoice item group
     *
     * @var string
     */
    public string $groupDescription;
    public function definedProperties(): array
    {
        return ['usageTeamUrn' => 'usage_team_urn', 'startDate' => 'start_date', 'totalAmount' => 'total_amount', 'region' => 'region', 'sku' => 'sku', 'description' => 'description', 'groupDescription' => 'group_description'];
    }
}