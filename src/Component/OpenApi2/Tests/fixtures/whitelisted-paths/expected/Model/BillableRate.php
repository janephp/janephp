<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class BillableRate
{
    /**
     * Unique ID for the billable rate.
     *
     * @var int
     */
    protected $id;
    /**
     * The amount of the billable rate.
     *
     * @var float
     */
    protected $amount;
    /**
     * The date the billable rate is effective.
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * The date the billable rate is no longer effective. This date is calculated by Harvest.
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * Date and time the billable rate was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the billable rate was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the billable rate.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the billable rate.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The amount of the billable rate.
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * The amount of the billable rate.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * The date the billable rate is effective.
     *
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * The date the billable rate is effective.
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * The date the billable rate is no longer effective. This date is calculated by Harvest.
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * The date the billable rate is no longer effective. This date is calculated by Harvest.
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Date and time the billable rate was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the billable rate was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the billable rate was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the billable rate was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}