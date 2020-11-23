<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Expense
{
    /**
     * Unique ID for the expense.
     *
     * @var int
     */
    protected $id;
    /**
     * An object containing the expense’s client id, name, and currency.
     *
     * @var ExpenseClient
     */
    protected $client;
    /**
     * An object containing the expense’s project id, name, and code.
     *
     * @var ExpenseProject
     */
    protected $project;
    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     *
     * @var ExpenseExpenseCategory
     */
    protected $expenseCategory;
    /**
     * An object containing the id and name of the user that recorded the expense.
     *
     * @var ExpenseUser
     */
    protected $user;
    /**
     * 
     *
     * @var UserAssignment
     */
    protected $userAssignment;
    /**
     * An object containing the expense’s receipt URL and file name.
     *
     * @var ExpenseReceipt
     */
    protected $receipt;
    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @var ExpenseInvoice
     */
    protected $invoice;
    /**
     * Textual notes used to describe the expense.
     *
     * @var string
     */
    protected $notes;
    /**
     * Whether the expense is billable or not.
     *
     * @var bool
     */
    protected $billable;
    /**
     * Whether the expense has been approved or closed for some other reason.
     *
     * @var bool
     */
    protected $isClosed;
    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     *
     * @var bool
     */
    protected $isLocked;
    /**
     * Whether or not the expense has been marked as invoiced.
     *
     * @var bool
     */
    protected $isBilled;
    /**
     * An explanation of why the expense has been locked.
     *
     * @var string
     */
    protected $lockedReason;
    /**
     * Date the expense occurred.
     *
     * @var \DateTime
     */
    protected $spentDate;
    /**
     * Date and time the expense was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the expense was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the expense.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the expense.
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
     * An object containing the expense’s client id, name, and currency.
     *
     * @return ExpenseClient
     */
    public function getClient() : ExpenseClient
    {
        return $this->client;
    }
    /**
     * An object containing the expense’s client id, name, and currency.
     *
     * @param ExpenseClient $client
     *
     * @return self
     */
    public function setClient(ExpenseClient $client) : self
    {
        $this->client = $client;
        return $this;
    }
    /**
     * An object containing the expense’s project id, name, and code.
     *
     * @return ExpenseProject
     */
    public function getProject() : ExpenseProject
    {
        return $this->project;
    }
    /**
     * An object containing the expense’s project id, name, and code.
     *
     * @param ExpenseProject $project
     *
     * @return self
     */
    public function setProject(ExpenseProject $project) : self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     *
     * @return ExpenseExpenseCategory
     */
    public function getExpenseCategory() : ExpenseExpenseCategory
    {
        return $this->expenseCategory;
    }
    /**
     * An object containing the expense’s expense category id, name, unit_price, and unit_name.
     *
     * @param ExpenseExpenseCategory $expenseCategory
     *
     * @return self
     */
    public function setExpenseCategory(ExpenseExpenseCategory $expenseCategory) : self
    {
        $this->expenseCategory = $expenseCategory;
        return $this;
    }
    /**
     * An object containing the id and name of the user that recorded the expense.
     *
     * @return ExpenseUser
     */
    public function getUser() : ExpenseUser
    {
        return $this->user;
    }
    /**
     * An object containing the id and name of the user that recorded the expense.
     *
     * @param ExpenseUser $user
     *
     * @return self
     */
    public function setUser(ExpenseUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return UserAssignment
     */
    public function getUserAssignment() : UserAssignment
    {
        return $this->userAssignment;
    }
    /**
     * 
     *
     * @param UserAssignment $userAssignment
     *
     * @return self
     */
    public function setUserAssignment(UserAssignment $userAssignment) : self
    {
        $this->userAssignment = $userAssignment;
        return $this;
    }
    /**
     * An object containing the expense’s receipt URL and file name.
     *
     * @return ExpenseReceipt
     */
    public function getReceipt() : ExpenseReceipt
    {
        return $this->receipt;
    }
    /**
     * An object containing the expense’s receipt URL and file name.
     *
     * @param ExpenseReceipt $receipt
     *
     * @return self
     */
    public function setReceipt(ExpenseReceipt $receipt) : self
    {
        $this->receipt = $receipt;
        return $this;
    }
    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @return ExpenseInvoice
     */
    public function getInvoice() : ExpenseInvoice
    {
        return $this->invoice;
    }
    /**
     * Once the expense has been invoiced, this field will include the associated invoice’s id and number.
     *
     * @param ExpenseInvoice $invoice
     *
     * @return self
     */
    public function setInvoice(ExpenseInvoice $invoice) : self
    {
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * Textual notes used to describe the expense.
     *
     * @return string
     */
    public function getNotes() : string
    {
        return $this->notes;
    }
    /**
     * Textual notes used to describe the expense.
     *
     * @param string $notes
     *
     * @return self
     */
    public function setNotes(string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * Whether the expense is billable or not.
     *
     * @return bool
     */
    public function getBillable() : bool
    {
        return $this->billable;
    }
    /**
     * Whether the expense is billable or not.
     *
     * @param bool $billable
     *
     * @return self
     */
    public function setBillable(bool $billable) : self
    {
        $this->billable = $billable;
        return $this;
    }
    /**
     * Whether the expense has been approved or closed for some other reason.
     *
     * @return bool
     */
    public function getIsClosed() : bool
    {
        return $this->isClosed;
    }
    /**
     * Whether the expense has been approved or closed for some other reason.
     *
     * @param bool $isClosed
     *
     * @return self
     */
    public function setIsClosed(bool $isClosed) : self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     *
     * @return bool
     */
    public function getIsLocked() : bool
    {
        return $this->isLocked;
    }
    /**
     * Whether the expense has been been invoiced, approved, or the project or person related to the expense is archived.
     *
     * @param bool $isLocked
     *
     * @return self
     */
    public function setIsLocked(bool $isLocked) : self
    {
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * Whether or not the expense has been marked as invoiced.
     *
     * @return bool
     */
    public function getIsBilled() : bool
    {
        return $this->isBilled;
    }
    /**
     * Whether or not the expense has been marked as invoiced.
     *
     * @param bool $isBilled
     *
     * @return self
     */
    public function setIsBilled(bool $isBilled) : self
    {
        $this->isBilled = $isBilled;
        return $this;
    }
    /**
     * An explanation of why the expense has been locked.
     *
     * @return string
     */
    public function getLockedReason() : string
    {
        return $this->lockedReason;
    }
    /**
     * An explanation of why the expense has been locked.
     *
     * @param string $lockedReason
     *
     * @return self
     */
    public function setLockedReason(string $lockedReason) : self
    {
        $this->lockedReason = $lockedReason;
        return $this;
    }
    /**
     * Date the expense occurred.
     *
     * @return \DateTime
     */
    public function getSpentDate() : \DateTime
    {
        return $this->spentDate;
    }
    /**
     * Date the expense occurred.
     *
     * @param \DateTime $spentDate
     *
     * @return self
     */
    public function setSpentDate(\DateTime $spentDate) : self
    {
        $this->spentDate = $spentDate;
        return $this;
    }
    /**
     * Date and time the expense was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the expense was created.
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
     * Date and time the expense was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the expense was last updated.
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