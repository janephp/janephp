<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class InvoiceItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the product being billed in the invoice item.
     *
     * @var string
     */
    public string $product;
    /**
     * UUID of the resource billing in the invoice item if available.
     *
     * @var string
     */
    public string $resourceUuid;
    /**
     * ID of the resource billing in the invoice item if available.
     *
     * @var string
     */
    public string $resourceId;
    /**
     * Description of the invoice item when it is a grouped set of usage, such  as DOKS or databases.
     *
     * @var string
     */
    public string $groupDescription;
    /**
     * Description of the invoice item.
     *
     * @var string
     */
    public string $description;
    /**
     * Billed amount of this invoice item. Billed in USD.
     *
     * @var string
     */
    public string $amount;
    /**
     * Duration of time this invoice item was used and subsequently billed.
     *
     * @var string
     */
    public string $duration;
    /**
     * Unit of time for duration.
     *
     * @var string
     */
    public string $durationUnit;
    /**
     * Time the invoice item began to be billed for usage.
     *
     * @var string
     */
    public string $startTime;
    /**
     * Time the invoice item stopped being billed for usage.
     *
     * @var string
     */
    public string $endTime;
    /**
     * Name of the DigitalOcean Project this resource belongs to.
     *
     * @var string
     */
    public string $projectName;
    public function definedProperties(): array
    {
        return ['product' => 'product', 'resourceUuid' => 'resource_uuid', 'resourceId' => 'resource_id', 'groupDescription' => 'group_description', 'description' => 'description', 'amount' => 'amount', 'duration' => 'duration', 'durationUnit' => 'duration_unit', 'startTime' => 'start_time', 'endTime' => 'end_time', 'projectName' => 'project_name'];
    }
}