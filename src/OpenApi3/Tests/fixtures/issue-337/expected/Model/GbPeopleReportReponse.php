<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponse
{
    /**
     * 
     *
     * @var string
     */
    protected $correlationId;
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
    protected $directorId;
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
     * @var GbPeopleReportReponseReport
     */
    protected $report;
    /**
     * 
     *
     * @return string
     */
    public function getCorrelationId() : string
    {
        return $this->correlationId;
    }
    /**
     * 
     *
     * @param string $correlationId
     *
     * @return self
     */
    public function setCorrelationId(string $correlationId) : self
    {
        $this->correlationId = $correlationId;
        return $this;
    }
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
    public function getDirectorId() : string
    {
        return $this->directorId;
    }
    /**
     * 
     *
     * @param string $directorId
     *
     * @return self
     */
    public function setDirectorId(string $directorId) : self
    {
        $this->directorId = $directorId;
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
     * @return GbPeopleReportReponseReport
     */
    public function getReport() : GbPeopleReportReponseReport
    {
        return $this->report;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReport $report
     *
     * @return self
     */
    public function setReport(GbPeopleReportReponseReport $report) : self
    {
        $this->report = $report;
        return $this;
    }
}