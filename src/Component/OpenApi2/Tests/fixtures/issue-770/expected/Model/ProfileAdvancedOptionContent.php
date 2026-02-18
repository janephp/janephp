<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileAdvancedOptionContent
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
     * dhcpOpt43Subcode of the ipsec profile
     *
     * @var float
     */
    protected $dhcpOpt43Subcode;
    /**
     * retryLimit of the ipsec profile
     *
     * @var float
     */
    protected $retryLimit;
    /**
     * replayWindow of the ipsec profile
     *
     * @var float
     */
    protected $replayWindow;
    /**
     * ipcomp Enable of the ipsec profile
     *
     * @var string
     */
    protected $ipcompEnable;
    /**
     * enforceNatt Enable of the ipsec profile
     *
     * @var string
     */
    protected $enforceNatt;
    /**
     * dpdDelay of the ipsec profile
     *
     * @var float
     */
    protected $dpdDelay;
    /**
     * keepAliveIntval of the ipsec profile
     *
     * @var float
     */
    protected $keepAliveIntval;
    /**
     * Retry Period of the failover
     *
     * @var float
     */
    protected $failoverRetryPeriod;
    /**
     * Retry Interval of the failover
     *
     * @var float
     */
    protected $failoverRetryInterval;
    /**
     * mode of the failover
     *
     * @var string
     */
    protected $failoverMode;
    /**
     * Primary Check Interval of the failover
     *
     * @var float
     */
    protected $failoverPrimaryCheckInterval;
    /**
     * dhcpOpt43Subcode of the ipsec profile
     *
     * @return float
     */
    public function getDhcpOpt43Subcode(): float
    {
        return $this->dhcpOpt43Subcode;
    }
    /**
     * dhcpOpt43Subcode of the ipsec profile
     *
     * @param float $dhcpOpt43Subcode
     *
     * @return self
     */
    public function setDhcpOpt43Subcode(float $dhcpOpt43Subcode): self
    {
        $this->initialized['dhcpOpt43Subcode'] = true;
        $this->dhcpOpt43Subcode = $dhcpOpt43Subcode;
        return $this;
    }
    /**
     * retryLimit of the ipsec profile
     *
     * @return float
     */
    public function getRetryLimit(): float
    {
        return $this->retryLimit;
    }
    /**
     * retryLimit of the ipsec profile
     *
     * @param float $retryLimit
     *
     * @return self
     */
    public function setRetryLimit(float $retryLimit): self
    {
        $this->initialized['retryLimit'] = true;
        $this->retryLimit = $retryLimit;
        return $this;
    }
    /**
     * replayWindow of the ipsec profile
     *
     * @return float
     */
    public function getReplayWindow(): float
    {
        return $this->replayWindow;
    }
    /**
     * replayWindow of the ipsec profile
     *
     * @param float $replayWindow
     *
     * @return self
     */
    public function setReplayWindow(float $replayWindow): self
    {
        $this->initialized['replayWindow'] = true;
        $this->replayWindow = $replayWindow;
        return $this;
    }
    /**
     * ipcomp Enable of the ipsec profile
     *
     * @return string
     */
    public function getIpcompEnable(): string
    {
        return $this->ipcompEnable;
    }
    /**
     * ipcomp Enable of the ipsec profile
     *
     * @param string $ipcompEnable
     *
     * @return self
     */
    public function setIpcompEnable(string $ipcompEnable): self
    {
        $this->initialized['ipcompEnable'] = true;
        $this->ipcompEnable = $ipcompEnable;
        return $this;
    }
    /**
     * enforceNatt Enable of the ipsec profile
     *
     * @return string
     */
    public function getEnforceNatt(): string
    {
        return $this->enforceNatt;
    }
    /**
     * enforceNatt Enable of the ipsec profile
     *
     * @param string $enforceNatt
     *
     * @return self
     */
    public function setEnforceNatt(string $enforceNatt): self
    {
        $this->initialized['enforceNatt'] = true;
        $this->enforceNatt = $enforceNatt;
        return $this;
    }
    /**
     * dpdDelay of the ipsec profile
     *
     * @return float
     */
    public function getDpdDelay(): float
    {
        return $this->dpdDelay;
    }
    /**
     * dpdDelay of the ipsec profile
     *
     * @param float $dpdDelay
     *
     * @return self
     */
    public function setDpdDelay(float $dpdDelay): self
    {
        $this->initialized['dpdDelay'] = true;
        $this->dpdDelay = $dpdDelay;
        return $this;
    }
    /**
     * keepAliveIntval of the ipsec profile
     *
     * @return float
     */
    public function getKeepAliveIntval(): float
    {
        return $this->keepAliveIntval;
    }
    /**
     * keepAliveIntval of the ipsec profile
     *
     * @param float $keepAliveIntval
     *
     * @return self
     */
    public function setKeepAliveIntval(float $keepAliveIntval): self
    {
        $this->initialized['keepAliveIntval'] = true;
        $this->keepAliveIntval = $keepAliveIntval;
        return $this;
    }
    /**
     * Retry Period of the failover
     *
     * @return float
     */
    public function getFailoverRetryPeriod(): float
    {
        return $this->failoverRetryPeriod;
    }
    /**
     * Retry Period of the failover
     *
     * @param float $failoverRetryPeriod
     *
     * @return self
     */
    public function setFailoverRetryPeriod(float $failoverRetryPeriod): self
    {
        $this->initialized['failoverRetryPeriod'] = true;
        $this->failoverRetryPeriod = $failoverRetryPeriod;
        return $this;
    }
    /**
     * Retry Interval of the failover
     *
     * @return float
     */
    public function getFailoverRetryInterval(): float
    {
        return $this->failoverRetryInterval;
    }
    /**
     * Retry Interval of the failover
     *
     * @param float $failoverRetryInterval
     *
     * @return self
     */
    public function setFailoverRetryInterval(float $failoverRetryInterval): self
    {
        $this->initialized['failoverRetryInterval'] = true;
        $this->failoverRetryInterval = $failoverRetryInterval;
        return $this;
    }
    /**
     * mode of the failover
     *
     * @return string
     */
    public function getFailoverMode(): string
    {
        return $this->failoverMode;
    }
    /**
     * mode of the failover
     *
     * @param string $failoverMode
     *
     * @return self
     */
    public function setFailoverMode(string $failoverMode): self
    {
        $this->initialized['failoverMode'] = true;
        $this->failoverMode = $failoverMode;
        return $this;
    }
    /**
     * Primary Check Interval of the failover
     *
     * @return float
     */
    public function getFailoverPrimaryCheckInterval(): float
    {
        return $this->failoverPrimaryCheckInterval;
    }
    /**
     * Primary Check Interval of the failover
     *
     * @param float $failoverPrimaryCheckInterval
     *
     * @return self
     */
    public function setFailoverPrimaryCheckInterval(float $failoverPrimaryCheckInterval): self
    {
        $this->initialized['failoverPrimaryCheckInterval'] = true;
        $this->failoverPrimaryCheckInterval = $failoverPrimaryCheckInterval;
        return $this;
    }
}