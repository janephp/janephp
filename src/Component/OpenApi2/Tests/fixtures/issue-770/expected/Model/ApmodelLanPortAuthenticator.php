<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelLanPortAuthenticator
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var ApmodelAuthenticatorAAAServer
     */
    protected $authentication;
    /**
     * @var bool
     */
    protected $disabledAccounting;
    /**
     * @var ApmodelAuthenticatorAAAServer
     */
    protected $accounting;
    /**
     * @var bool
     */
    protected $macAuthByPassEnabled;
    /**
     * @return ApmodelAuthenticatorAAAServer
     */
    public function getAuthentication(): ApmodelAuthenticatorAAAServer
    {
        return $this->authentication;
    }
    /**
     * @param ApmodelAuthenticatorAAAServer $authentication
     *
     * @return self
     */
    public function setAuthentication(ApmodelAuthenticatorAAAServer $authentication): self
    {
        $this->initialized['authentication'] = true;
        $this->authentication = $authentication;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDisabledAccounting(): bool
    {
        return $this->disabledAccounting;
    }
    /**
     * @param bool $disabledAccounting
     *
     * @return self
     */
    public function setDisabledAccounting(bool $disabledAccounting): self
    {
        $this->initialized['disabledAccounting'] = true;
        $this->disabledAccounting = $disabledAccounting;
        return $this;
    }
    /**
     * @return ApmodelAuthenticatorAAAServer
     */
    public function getAccounting(): ApmodelAuthenticatorAAAServer
    {
        return $this->accounting;
    }
    /**
     * @param ApmodelAuthenticatorAAAServer $accounting
     *
     * @return self
     */
    public function setAccounting(ApmodelAuthenticatorAAAServer $accounting): self
    {
        $this->initialized['accounting'] = true;
        $this->accounting = $accounting;
        return $this;
    }
    /**
     * @return bool
     */
    public function getMacAuthByPassEnabled(): bool
    {
        return $this->macAuthByPassEnabled;
    }
    /**
     * @param bool $macAuthByPassEnabled
     *
     * @return self
     */
    public function setMacAuthByPassEnabled(bool $macAuthByPassEnabled): self
    {
        $this->initialized['macAuthByPassEnabled'] = true;
        $this->macAuthByPassEnabled = $macAuthByPassEnabled;
        return $this;
    }
}