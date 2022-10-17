<?php

namespace Github\Model;

class MarketplacePurchase extends \ArrayObject
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
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @var string
     */
    protected $organizationBillingEmail;
    /**
     * 
     *
     * @var MarketplacePurchaseMarketplacePendingChange|null
     */
    protected $marketplacePendingChange;
    /**
     * 
     *
     * @var MarketplacePurchaseMarketplacePurchase
     */
    protected $marketplacePurchase;
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
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
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
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * 
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationBillingEmail() : string
    {
        return $this->organizationBillingEmail;
    }
    /**
     * 
     *
     * @param string $organizationBillingEmail
     *
     * @return self
     */
    public function setOrganizationBillingEmail(string $organizationBillingEmail) : self
    {
        $this->organizationBillingEmail = $organizationBillingEmail;
        return $this;
    }
    /**
     * 
     *
     * @return MarketplacePurchaseMarketplacePendingChange|null
     */
    public function getMarketplacePendingChange() : ?MarketplacePurchaseMarketplacePendingChange
    {
        return $this->marketplacePendingChange;
    }
    /**
     * 
     *
     * @param MarketplacePurchaseMarketplacePendingChange|null $marketplacePendingChange
     *
     * @return self
     */
    public function setMarketplacePendingChange(?MarketplacePurchaseMarketplacePendingChange $marketplacePendingChange) : self
    {
        $this->marketplacePendingChange = $marketplacePendingChange;
        return $this;
    }
    /**
     * 
     *
     * @return MarketplacePurchaseMarketplacePurchase
     */
    public function getMarketplacePurchase() : MarketplacePurchaseMarketplacePurchase
    {
        return $this->marketplacePurchase;
    }
    /**
     * 
     *
     * @param MarketplacePurchaseMarketplacePurchase $marketplacePurchase
     *
     * @return self
     */
    public function setMarketplacePurchase(MarketplacePurchaseMarketplacePurchase $marketplacePurchase) : self
    {
        $this->marketplacePurchase = $marketplacePurchase;
        return $this;
    }
}