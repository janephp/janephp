<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseBillingInsights extends \ArrayObject
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
     * Array of billing data points, which are day-over-day changes in billing resource usage based on nightly invoice item estimates, for the requested period
     *
     * @var list<BillingDataPoint>
     */
    protected $dataPoints;
    /**
     * Total number of items available across all pages
     *
     * @var int
     */
    protected $totalItems;
    /**
     * Total number of pages available
     *
     * @var int
     */
    protected $totalPages;
    /**
     * Current page number
     *
     * @var int
     */
    protected $currentPage;
    /**
     * Array of billing data points, which are day-over-day changes in billing resource usage based on nightly invoice item estimates, for the requested period
     *
     * @return list<BillingDataPoint>
     */
    public function getDataPoints(): array
    {
        return $this->dataPoints;
    }
    /**
     * Array of billing data points, which are day-over-day changes in billing resource usage based on nightly invoice item estimates, for the requested period
     *
     * @param list<BillingDataPoint> $dataPoints
     *
     * @return self
     */
    public function setDataPoints(array $dataPoints): self
    {
        $this->initialized['dataPoints'] = true;
        $this->dataPoints = $dataPoints;
        return $this;
    }
    /**
     * Total number of items available across all pages
     *
     * @return int
     */
    public function getTotalItems(): int
    {
        return $this->totalItems;
    }
    /**
     * Total number of items available across all pages
     *
     * @param int $totalItems
     *
     * @return self
     */
    public function setTotalItems(int $totalItems): self
    {
        $this->initialized['totalItems'] = true;
        $this->totalItems = $totalItems;
        return $this;
    }
    /**
     * Total number of pages available
     *
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }
    /**
     * Total number of pages available
     *
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(int $totalPages): self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;
        return $this;
    }
    /**
     * Current page number
     *
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }
    /**
     * Current page number
     *
     * @param int $currentPage
     *
     * @return self
     */
    public function setCurrentPage(int $currentPage): self
    {
        $this->initialized['currentPage'] = true;
        $this->currentPage = $currentPage;
        return $this;
    }
}