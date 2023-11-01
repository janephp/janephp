<?php

namespace CreditSafe\API\Model;

class Company extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The connectId of the company that triggered the `notificationEvent`. A connectId is the primary Company identifier that is used to uniquely identify all companies across Creditsafe's Universe and Partner Network.
     *
     * @var string
     */
    protected $id;
    /**
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    protected $safeNumber;
    /**
     * The name of the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    protected $name;
    /**
     * ISO/Alpha 2 format country code of the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The portfolio Id of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @var float
     */
    protected $portfolioId;
    /**
     * The name of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @var string
     */
    protected $portfolioName;
    /**
     * The connectId of the company that triggered the `notificationEvent`. A connectId is the primary Company identifier that is used to uniquely identify all companies across Creditsafe's Universe and Partner Network.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The connectId of the company that triggered the `notificationEvent`. A connectId is the primary Company identifier that is used to uniquely identify all companies across Creditsafe's Universe and Partner Network.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the `notificationEvent`.
     *
     * @return string
     */
    public function getSafeNumber() : string
    {
        return $this->safeNumber;
    }
    /**
     * The Safe Number (Creditsafe's identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the `notificationEvent`.
     *
     * @param string $safeNumber
     *
     * @return self
     */
    public function setSafeNumber(string $safeNumber) : self
    {
        $this->initialized['safeNumber'] = true;
        $this->safeNumber = $safeNumber;
        return $this;
    }
    /**
     * The name of the company that triggered the `notificationEvent`.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the company that triggered the `notificationEvent`.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * ISO/Alpha 2 format country code of the company that triggered the `notificationEvent`.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * ISO/Alpha 2 format country code of the company that triggered the `notificationEvent`.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The portfolio Id of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @return float
     */
    public function getPortfolioId() : float
    {
        return $this->portfolioId;
    }
    /**
     * The portfolio Id of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @param float $portfolioId
     *
     * @return self
     */
    public function setPortfolioId(float $portfolioId) : self
    {
        $this->initialized['portfolioId'] = true;
        $this->portfolioId = $portfolioId;
        return $this;
    }
    /**
     * The name of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @return string
     */
    public function getPortfolioName() : string
    {
        return $this->portfolioName;
    }
    /**
     * The name of the portfolio that contains the company that triggered the `notificationEvent`.
     *
     * @param string $portfolioName
     *
     * @return self
     */
    public function setPortfolioName(string $portfolioName) : self
    {
        $this->initialized['portfolioName'] = true;
        $this->portfolioName = $portfolioName;
        return $this;
    }
}