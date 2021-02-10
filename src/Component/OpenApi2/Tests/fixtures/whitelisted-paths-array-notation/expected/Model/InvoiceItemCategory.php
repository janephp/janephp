<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class InvoiceItemCategory
{
    /**
     * Unique ID for the invoice item category.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the invoice item category.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether this invoice item category is used for billable hours when generating an invoice.
     *
     * @var bool
     */
    protected $useAsService;
    /**
     * Whether this invoice item category is used for expenses when generating an invoice.
     *
     * @var bool
     */
    protected $useAsExpense;
    /**
     * Date and time the invoice item category was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the invoice item category was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the invoice item category.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the invoice item category.
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
     * The name of the invoice item category.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the invoice item category.
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
     * Whether this invoice item category is used for billable hours when generating an invoice.
     *
     * @return bool
     */
    public function getUseAsService() : bool
    {
        return $this->useAsService;
    }
    /**
     * Whether this invoice item category is used for billable hours when generating an invoice.
     *
     * @param bool $useAsService
     *
     * @return self
     */
    public function setUseAsService(bool $useAsService) : self
    {
        $this->useAsService = $useAsService;
        return $this;
    }
    /**
     * Whether this invoice item category is used for expenses when generating an invoice.
     *
     * @return bool
     */
    public function getUseAsExpense() : bool
    {
        return $this->useAsExpense;
    }
    /**
     * Whether this invoice item category is used for expenses when generating an invoice.
     *
     * @param bool $useAsExpense
     *
     * @return self
     */
    public function setUseAsExpense(bool $useAsExpense) : self
    {
        $this->useAsExpense = $useAsExpense;
        return $this;
    }
    /**
     * Date and time the invoice item category was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the invoice item category was created.
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
     * Date and time the invoice item category was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the invoice item category was last updated.
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