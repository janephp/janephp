<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifyGatewayAdvanced
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
     * Allow session on accounting fail
     *
     * @var bool
     */
    protected $allowSessionOnAccountingFail;
    /**
     * GTP network service access point identifier (NSAPI)
     *
     * @var int
     */
    protected $gtpNetworkServiceAcessPointIdentifier;
    /**
     * Include IMEI IE in GTP messages
     *
     * @var bool
     */
    protected $imeiInGtp;
    /**
     * Include SCG-RAI in GTPv2 messages
     *
     * @var bool
     */
    protected $scgRaiInGtpV2;
    /**
     * Include SCG-SAI in GTPv2 messages
     *
     * @var bool
     */
    protected $scgSaiInGtpV2;
    /**
     * Include ECGI in GTPv2 messages
     *
     * @var bool
     */
    protected $ecgiInGtpV2;
    /**
     * Include TAI in GTPv2 messages
     *
     * @var bool
     */
    protected $taiInGtpV2;
    /**
     * GTPv2 interface type
     *
     * @var string
     */
    protected $gtpInterfaceType;
    /**
     * Allow session on accounting fail
     *
     * @return bool
     */
    public function getAllowSessionOnAccountingFail(): bool
    {
        return $this->allowSessionOnAccountingFail;
    }
    /**
     * Allow session on accounting fail
     *
     * @param bool $allowSessionOnAccountingFail
     *
     * @return self
     */
    public function setAllowSessionOnAccountingFail(bool $allowSessionOnAccountingFail): self
    {
        $this->initialized['allowSessionOnAccountingFail'] = true;
        $this->allowSessionOnAccountingFail = $allowSessionOnAccountingFail;
        return $this;
    }
    /**
     * GTP network service access point identifier (NSAPI)
     *
     * @return int
     */
    public function getGtpNetworkServiceAcessPointIdentifier(): int
    {
        return $this->gtpNetworkServiceAcessPointIdentifier;
    }
    /**
     * GTP network service access point identifier (NSAPI)
     *
     * @param int $gtpNetworkServiceAcessPointIdentifier
     *
     * @return self
     */
    public function setGtpNetworkServiceAcessPointIdentifier(int $gtpNetworkServiceAcessPointIdentifier): self
    {
        $this->initialized['gtpNetworkServiceAcessPointIdentifier'] = true;
        $this->gtpNetworkServiceAcessPointIdentifier = $gtpNetworkServiceAcessPointIdentifier;
        return $this;
    }
    /**
     * Include IMEI IE in GTP messages
     *
     * @return bool
     */
    public function getImeiInGtp(): bool
    {
        return $this->imeiInGtp;
    }
    /**
     * Include IMEI IE in GTP messages
     *
     * @param bool $imeiInGtp
     *
     * @return self
     */
    public function setImeiInGtp(bool $imeiInGtp): self
    {
        $this->initialized['imeiInGtp'] = true;
        $this->imeiInGtp = $imeiInGtp;
        return $this;
    }
    /**
     * Include SCG-RAI in GTPv2 messages
     *
     * @return bool
     */
    public function getScgRaiInGtpV2(): bool
    {
        return $this->scgRaiInGtpV2;
    }
    /**
     * Include SCG-RAI in GTPv2 messages
     *
     * @param bool $scgRaiInGtpV2
     *
     * @return self
     */
    public function setScgRaiInGtpV2(bool $scgRaiInGtpV2): self
    {
        $this->initialized['scgRaiInGtpV2'] = true;
        $this->scgRaiInGtpV2 = $scgRaiInGtpV2;
        return $this;
    }
    /**
     * Include SCG-SAI in GTPv2 messages
     *
     * @return bool
     */
    public function getScgSaiInGtpV2(): bool
    {
        return $this->scgSaiInGtpV2;
    }
    /**
     * Include SCG-SAI in GTPv2 messages
     *
     * @param bool $scgSaiInGtpV2
     *
     * @return self
     */
    public function setScgSaiInGtpV2(bool $scgSaiInGtpV2): self
    {
        $this->initialized['scgSaiInGtpV2'] = true;
        $this->scgSaiInGtpV2 = $scgSaiInGtpV2;
        return $this;
    }
    /**
     * Include ECGI in GTPv2 messages
     *
     * @return bool
     */
    public function getEcgiInGtpV2(): bool
    {
        return $this->ecgiInGtpV2;
    }
    /**
     * Include ECGI in GTPv2 messages
     *
     * @param bool $ecgiInGtpV2
     *
     * @return self
     */
    public function setEcgiInGtpV2(bool $ecgiInGtpV2): self
    {
        $this->initialized['ecgiInGtpV2'] = true;
        $this->ecgiInGtpV2 = $ecgiInGtpV2;
        return $this;
    }
    /**
     * Include TAI in GTPv2 messages
     *
     * @return bool
     */
    public function getTaiInGtpV2(): bool
    {
        return $this->taiInGtpV2;
    }
    /**
     * Include TAI in GTPv2 messages
     *
     * @param bool $taiInGtpV2
     *
     * @return self
     */
    public function setTaiInGtpV2(bool $taiInGtpV2): self
    {
        $this->initialized['taiInGtpV2'] = true;
        $this->taiInGtpV2 = $taiInGtpV2;
        return $this;
    }
    /**
     * GTPv2 interface type
     *
     * @return string
     */
    public function getGtpInterfaceType(): string
    {
        return $this->gtpInterfaceType;
    }
    /**
     * GTPv2 interface type
     *
     * @param string $gtpInterfaceType
     *
     * @return self
     */
    public function setGtpInterfaceType(string $gtpInterfaceType): self
    {
        $this->initialized['gtpInterfaceType'] = true;
        $this->gtpInterfaceType = $gtpInterfaceType;
        return $this;
    }
}