<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class ExpenseCategory
{
    /**
     * Unique ID for the expense category.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the expense category.
     *
     * @var string
     */
    protected $name;
    /**
     * The unit name of the expense category.
     *
     * @var string
     */
    protected $unitName;
    /**
     * The unit price of the expense category.
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * Whether the expense category is active or archived.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Date and time the expense category was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the expense category was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the expense category.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the expense category.
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
     * The name of the expense category.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the expense category.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The unit name of the expense category.
     *
     * @return string
     */
    public function getUnitName() : string
    {
        return $this->unitName;
    }
    /**
     * The unit name of the expense category.
     *
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(string $unitName) : self
    {
        $this->unitName = $unitName;
        return $this;
    }
    /**
     * The unit price of the expense category.
     *
     * @return float
     */
    public function getUnitPrice() : float
    {
        return $this->unitPrice;
    }
    /**
     * The unit price of the expense category.
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(float $unitPrice) : self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Whether the expense category is active or archived.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Whether the expense category is active or archived.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Date and time the expense category was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the expense category was created.
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
     * Date and time the expense category was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the expense category was last updated.
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