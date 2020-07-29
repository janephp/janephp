<?php

namespace CreditSafe\API\Model;

class AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Date of when the service was enabled
     *
     * @var string
     */
    protected $startDate;
    /**
     * Date of when the service will expire
     *
     * @var string
     */
    protected $expireDate;
    /**
     * Measure of total usage available in the service
     *
     * @var int
     */
    protected $paid;
    /**
     * Service usage
     *
     * @var int
     */
    protected $used;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * Date of when the service was enabled
     *
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }
    /**
     * Date of when the service was enabled
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Date of when the service will expire
     *
     * @return string
     */
    public function getExpireDate() : string
    {
        return $this->expireDate;
    }
    /**
     * Date of when the service will expire
     *
     * @param string $expireDate
     *
     * @return self
     */
    public function setExpireDate(string $expireDate) : self
    {
        $this->expireDate = $expireDate;
        return $this;
    }
    /**
     * Measure of total usage available in the service
     *
     * @return int
     */
    public function getPaid() : int
    {
        return $this->paid;
    }
    /**
     * Measure of total usage available in the service
     *
     * @param int $paid
     *
     * @return self
     */
    public function setPaid(int $paid) : self
    {
        $this->paid = $paid;
        return $this;
    }
    /**
     * Service usage
     *
     * @return int
     */
    public function getUsed() : int
    {
        return $this->used;
    }
    /**
     * Service usage
     *
     * @param int $used
     *
     * @return self
     */
    public function setUsed(int $used) : self
    {
        $this->used = $used;
        return $this;
    }
}