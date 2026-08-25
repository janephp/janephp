<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAccount implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var Account
     */
    protected $account;
    /**
     * @return Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }
    /**
     * @param Account $account
     *
     * @return self
     */
    public function setAccount(Account $account): self
    {
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['account' => ['account', 'getAccount', 'setAccount']];
    }
}