<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCmProtocolOptionContent
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
     * Certificate Management Protocol dhcpOpt43Subcode
     *
     * @var float
     */
    protected $cmpDhcpOpt43Subcode;
    /**
     * Certificate Management Protocol Server addr
     *
     * @var string
     */
    protected $cmpServerAddr;
    /**
     * Certificate Management Protocol Server Path
     *
     * @var string
     */
    protected $cmpServerPath;
    /**
     * Certificate Management Protocol dhcpOpt43SubcodeRecipient
     *
     * @var float
     */
    protected $cmpDhcpOpt43SubcodeRecipient;
    /**
     * Certificate Management Protocol Recipient
     *
     * @var string
     */
    protected $cmpRecipient;
    /**
     * Certificate Management Protocol dhcpOpt43Subcode
     *
     * @return float
     */
    public function getCmpDhcpOpt43Subcode(): float
    {
        return $this->cmpDhcpOpt43Subcode;
    }
    /**
     * Certificate Management Protocol dhcpOpt43Subcode
     *
     * @param float $cmpDhcpOpt43Subcode
     *
     * @return self
     */
    public function setCmpDhcpOpt43Subcode(float $cmpDhcpOpt43Subcode): self
    {
        $this->initialized['cmpDhcpOpt43Subcode'] = true;
        $this->cmpDhcpOpt43Subcode = $cmpDhcpOpt43Subcode;
        return $this;
    }
    /**
     * Certificate Management Protocol Server addr
     *
     * @return string
     */
    public function getCmpServerAddr(): string
    {
        return $this->cmpServerAddr;
    }
    /**
     * Certificate Management Protocol Server addr
     *
     * @param string $cmpServerAddr
     *
     * @return self
     */
    public function setCmpServerAddr(string $cmpServerAddr): self
    {
        $this->initialized['cmpServerAddr'] = true;
        $this->cmpServerAddr = $cmpServerAddr;
        return $this;
    }
    /**
     * Certificate Management Protocol Server Path
     *
     * @return string
     */
    public function getCmpServerPath(): string
    {
        return $this->cmpServerPath;
    }
    /**
     * Certificate Management Protocol Server Path
     *
     * @param string $cmpServerPath
     *
     * @return self
     */
    public function setCmpServerPath(string $cmpServerPath): self
    {
        $this->initialized['cmpServerPath'] = true;
        $this->cmpServerPath = $cmpServerPath;
        return $this;
    }
    /**
     * Certificate Management Protocol dhcpOpt43SubcodeRecipient
     *
     * @return float
     */
    public function getCmpDhcpOpt43SubcodeRecipient(): float
    {
        return $this->cmpDhcpOpt43SubcodeRecipient;
    }
    /**
     * Certificate Management Protocol dhcpOpt43SubcodeRecipient
     *
     * @param float $cmpDhcpOpt43SubcodeRecipient
     *
     * @return self
     */
    public function setCmpDhcpOpt43SubcodeRecipient(float $cmpDhcpOpt43SubcodeRecipient): self
    {
        $this->initialized['cmpDhcpOpt43SubcodeRecipient'] = true;
        $this->cmpDhcpOpt43SubcodeRecipient = $cmpDhcpOpt43SubcodeRecipient;
        return $this;
    }
    /**
     * Certificate Management Protocol Recipient
     *
     * @return string
     */
    public function getCmpRecipient(): string
    {
        return $this->cmpRecipient;
    }
    /**
     * Certificate Management Protocol Recipient
     *
     * @param string $cmpRecipient
     *
     * @return self
     */
    public function setCmpRecipient(string $cmpRecipient): self
    {
        $this->initialized['cmpRecipient'] = true;
        $this->cmpRecipient = $cmpRecipient;
        return $this;
    }
}