<?php

namespace Jane\Generated\DigitalOcean\Model;

class InvoiceItem extends \ArrayObject
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
     * Name of the product being billed in the invoice item.
     *
     * @var string
     */
    protected $product;
    /**
     * UUID of the resource billing in the invoice item if available.
     *
     * @var string
     */
    protected $resourceUuid;
    /**
     * ID of the resource billing in the invoice item if available.
     *
     * @var string
     */
    protected $resourceId;
    /**
     * Description of the invoice item when it is a grouped set of usage, such  as DOKS or databases.
     *
     * @var string
     */
    protected $groupDescription;
    /**
     * Description of the invoice item.
     *
     * @var string
     */
    protected $description;
    /**
     * Billed amount of this invoice item. Billed in USD.
     *
     * @var string
     */
    protected $amount;
    /**
     * Duration of time this invoice item was used and subsequently billed.
     *
     * @var string
     */
    protected $duration;
    /**
     * Unit of time for duration.
     *
     * @var string
     */
    protected $durationUnit;
    /**
     * Time the invoice item began to be billed for usage.
     *
     * @var string
     */
    protected $startTime;
    /**
     * Time the invoice item stopped being billed for usage.
     *
     * @var string
     */
    protected $endTime;
    /**
     * Name of the DigitalOcean Project this resource belongs to.
     *
     * @var string
     */
    protected $projectName;
    /**
     * Name of the product being billed in the invoice item.
     *
     * @return string
     */
    public function getProduct(): string
    {
        return $this->product;
    }
    /**
     * Name of the product being billed in the invoice item.
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct(string $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * UUID of the resource billing in the invoice item if available.
     *
     * @return string
     */
    public function getResourceUuid(): string
    {
        return $this->resourceUuid;
    }
    /**
     * UUID of the resource billing in the invoice item if available.
     *
     * @param string $resourceUuid
     *
     * @return self
     */
    public function setResourceUuid(string $resourceUuid): self
    {
        $this->initialized['resourceUuid'] = true;
        $this->resourceUuid = $resourceUuid;
        return $this;
    }
    /**
     * ID of the resource billing in the invoice item if available.
     *
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }
    /**
     * ID of the resource billing in the invoice item if available.
     *
     * @param string $resourceId
     *
     * @return self
     */
    public function setResourceId(string $resourceId): self
    {
        $this->initialized['resourceId'] = true;
        $this->resourceId = $resourceId;
        return $this;
    }
    /**
     * Description of the invoice item when it is a grouped set of usage, such  as DOKS or databases.
     *
     * @return string
     */
    public function getGroupDescription(): string
    {
        return $this->groupDescription;
    }
    /**
     * Description of the invoice item when it is a grouped set of usage, such  as DOKS or databases.
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
    /**
     * Description of the invoice item.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the invoice item.
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
     * Billed amount of this invoice item. Billed in USD.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Billed amount of this invoice item. Billed in USD.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Duration of time this invoice item was used and subsequently billed.
     *
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }
    /**
     * Duration of time this invoice item was used and subsequently billed.
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
    /**
     * Unit of time for duration.
     *
     * @return string
     */
    public function getDurationUnit(): string
    {
        return $this->durationUnit;
    }
    /**
     * Unit of time for duration.
     *
     * @param string $durationUnit
     *
     * @return self
     */
    public function setDurationUnit(string $durationUnit): self
    {
        $this->initialized['durationUnit'] = true;
        $this->durationUnit = $durationUnit;
        return $this;
    }
    /**
     * Time the invoice item began to be billed for usage.
     *
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }
    /**
     * Time the invoice item began to be billed for usage.
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime): self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Time the invoice item stopped being billed for usage.
     *
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }
    /**
     * Time the invoice item stopped being billed for usage.
     *
     * @param string $endTime
     *
     * @return self
     */
    public function setEndTime(string $endTime): self
    {
        $this->initialized['endTime'] = true;
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Name of the DigitalOcean Project this resource belongs to.
     *
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }
    /**
     * Name of the DigitalOcean Project this resource belongs to.
     *
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName(string $projectName): self
    {
        $this->initialized['projectName'] = true;
        $this->projectName = $projectName;
        return $this;
    }
}