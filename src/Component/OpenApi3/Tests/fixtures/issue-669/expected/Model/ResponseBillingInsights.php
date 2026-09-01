<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseBillingInsights implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Array of billing data points, which are day-over-day changes in billing resource usage based on nightly invoice item estimates, for the requested period
     *
     * @var list<BillingDataPoint>
     */
    public array $dataPoints;
    /**
     * Total number of items available across all pages
     *
     * @var int
     */
    public int $totalItems;
    /**
     * Total number of pages available
     *
     * @var int
     */
    public int $totalPages;
    /**
     * Current page number
     *
     * @var int
     */
    public int $currentPage;
    public function definedProperties(): array
    {
        return ['dataPoints' => 'data_points', 'totalItems' => 'total_items', 'totalPages' => 'total_pages', 'currentPage' => 'current_page'];
    }
}