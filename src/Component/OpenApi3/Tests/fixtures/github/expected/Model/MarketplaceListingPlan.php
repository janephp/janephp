<?php

namespace Github\Model;

class MarketplaceListingPlan extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $accountsUrl;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $number;
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
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $monthlyPriceInCents;
    /**
     * 
     *
     * @var int
     */
    protected $yearlyPriceInCents;
    /**
     * 
     *
     * @var string
     */
    protected $priceModel;
    /**
     * 
     *
     * @var bool
     */
    protected $hasFreeTrial;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitName;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string[]
     */
    protected $bullets;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountsUrl() : string
    {
        return $this->accountsUrl;
    }
    /**
     * 
     *
     * @param string $accountsUrl
     *
     * @return self
     */
    public function setAccountsUrl(string $accountsUrl) : self
    {
        $this->accountsUrl = $accountsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
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
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMonthlyPriceInCents() : int
    {
        return $this->monthlyPriceInCents;
    }
    /**
     * 
     *
     * @param int $monthlyPriceInCents
     *
     * @return self
     */
    public function setMonthlyPriceInCents(int $monthlyPriceInCents) : self
    {
        $this->monthlyPriceInCents = $monthlyPriceInCents;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYearlyPriceInCents() : int
    {
        return $this->yearlyPriceInCents;
    }
    /**
     * 
     *
     * @param int $yearlyPriceInCents
     *
     * @return self
     */
    public function setYearlyPriceInCents(int $yearlyPriceInCents) : self
    {
        $this->yearlyPriceInCents = $yearlyPriceInCents;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPriceModel() : string
    {
        return $this->priceModel;
    }
    /**
     * 
     *
     * @param string $priceModel
     *
     * @return self
     */
    public function setPriceModel(string $priceModel) : self
    {
        $this->priceModel = $priceModel;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasFreeTrial() : bool
    {
        return $this->hasFreeTrial;
    }
    /**
     * 
     *
     * @param bool $hasFreeTrial
     *
     * @return self
     */
    public function setHasFreeTrial(bool $hasFreeTrial) : self
    {
        $this->hasFreeTrial = $hasFreeTrial;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitName() : ?string
    {
        return $this->unitName;
    }
    /**
     * 
     *
     * @param string|null $unitName
     *
     * @return self
     */
    public function setUnitName(?string $unitName) : self
    {
        $this->unitName = $unitName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getBullets() : array
    {
        return $this->bullets;
    }
    /**
     * 
     *
     * @param string[] $bullets
     *
     * @return self
     */
    public function setBullets(array $bullets) : self
    {
        $this->bullets = $bullets;
        return $this;
    }
}