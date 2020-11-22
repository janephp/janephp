<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class UninvoicedReportResult
{
    /**
     * The ID of the client associated with the reported hours and expenses.
     *
     * @var int
     */
    protected $clientId;
    /**
     * The name of the client associated with the reported hours and expenses.
     *
     * @var string
     */
    protected $clientName;
    /**
     * The ID of the project associated with the reported hours and expenses.
     *
     * @var int
     */
    protected $projectId;
    /**
     * The name of the project associated with the reported hours and expenses.
     *
     * @var string
     */
    protected $projectName;
    /**
     * The currency code associated with the tracked hours for this result.
     *
     * @var string
     */
    protected $currency;
    /**
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float
     */
    protected $totalHours;
    /**
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @var float
     */
    protected $uninvoicedHours;
    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     *
     * @var float
     */
    protected $uninvoicedExpenses;
    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     *
     * @var float
     */
    protected $uninvoicedAmount;
    /**
     * The ID of the client associated with the reported hours and expenses.
     *
     * @return int
     */
    public function getClientId() : int
    {
        return $this->clientId;
    }
    /**
     * The ID of the client associated with the reported hours and expenses.
     *
     * @param int $clientId
     *
     * @return self
     */
    public function setClientId(int $clientId) : self
    {
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * The name of the client associated with the reported hours and expenses.
     *
     * @return string
     */
    public function getClientName() : string
    {
        return $this->clientName;
    }
    /**
     * The name of the client associated with the reported hours and expenses.
     *
     * @param string $clientName
     *
     * @return self
     */
    public function setClientName(string $clientName) : self
    {
        $this->clientName = $clientName;
        return $this;
    }
    /**
     * The ID of the project associated with the reported hours and expenses.
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * The ID of the project associated with the reported hours and expenses.
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The name of the project associated with the reported hours and expenses.
     *
     * @return string
     */
    public function getProjectName() : string
    {
        return $this->projectName;
    }
    /**
     * The name of the project associated with the reported hours and expenses.
     *
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName(string $projectName) : self
    {
        $this->projectName = $projectName;
        return $this;
    }
    /**
     * The currency code associated with the tracked hours for this result.
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * The currency code associated with the tracked hours for this result.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float
     */
    public function getTotalHours() : float
    {
        return $this->totalHours;
    }
    /**
     * The total hours for the given timeframe and project. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @param float $totalHours
     *
     * @return self
     */
    public function setTotalHours(float $totalHours) : self
    {
        $this->totalHours = $totalHours;
        return $this;
    }
    /**
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @return float
     */
    public function getUninvoicedHours() : float
    {
        return $this->uninvoicedHours;
    }
    /**
     * The total hours for the given timeframe and project that have not been invoiced. If Time Rounding is turned on, the hours will be rounded according to your settings.
     *
     * @param float $uninvoicedHours
     *
     * @return self
     */
    public function setUninvoicedHours(float $uninvoicedHours) : self
    {
        $this->uninvoicedHours = $uninvoicedHours;
        return $this;
    }
    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     *
     * @return float
     */
    public function getUninvoicedExpenses() : float
    {
        return $this->uninvoicedExpenses;
    }
    /**
     * The total amount for billable expenses for the timeframe and project that have not been invoiced.
     *
     * @param float $uninvoicedExpenses
     *
     * @return self
     */
    public function setUninvoicedExpenses(float $uninvoicedExpenses) : self
    {
        $this->uninvoicedExpenses = $uninvoicedExpenses;
        return $this;
    }
    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     *
     * @return float
     */
    public function getUninvoicedAmount() : float
    {
        return $this->uninvoicedAmount;
    }
    /**
     * The total amount (time and expenses) for the timeframe and project that have not been invoiced.
     *
     * @param float $uninvoicedAmount
     *
     * @return self
     */
    public function setUninvoicedAmount(float $uninvoicedAmount) : self
    {
        $this->uninvoicedAmount = $uninvoicedAmount;
        return $this;
    }
}