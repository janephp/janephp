<?php

namespace CreditSafe\API\Model;

class AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $countryIso2;
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
     * 
     *
     * @return string
     */
    public function getCountryIso2() : string
    {
        return $this->countryIso2;
    }
    /**
     * 
     *
     * @param string $countryIso2
     *
     * @return self
     */
    public function setCountryIso2(string $countryIso2) : self
    {
        $this->countryIso2 = $countryIso2;
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