<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $orderId;
    /**
     * 
     *
     * @var string
     */
    protected $companyId;
    /**
     * 
     *
     * @var string
     */
    protected $dateOfOrder;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var string
     */
    protected $userId;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReport
     */
    protected $report;
    /**
     * 
     *
     * @return string
     */
    public function getOrderId() : string
    {
        return $this->orderId;
    }
    /**
     * 
     *
     * @param string $orderId
     *
     * @return self
     */
    public function setOrderId(string $orderId) : self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyId() : string
    {
        return $this->companyId;
    }
    /**
     * 
     *
     * @param string $companyId
     *
     * @return self
     */
    public function setCompanyId(string $companyId) : self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateOfOrder() : string
    {
        return $this->dateOfOrder;
    }
    /**
     * 
     *
     * @param string $dateOfOrder
     *
     * @return self
     */
    public function setDateOfOrder(string $dateOfOrder) : self
    {
        $this->dateOfOrder = $dateOfOrder;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserId() : string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReport
     */
    public function getReport() : GbCompanyReportExampleResponseReport
    {
        return $this->report;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReport $report
     *
     * @return self
     */
    public function setReport(GbCompanyReportExampleResponseReport $report) : self
    {
        $this->report = $report;
        return $this;
    }
}