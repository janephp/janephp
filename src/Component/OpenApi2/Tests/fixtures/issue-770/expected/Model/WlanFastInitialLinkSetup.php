<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanFastInitialLinkSetup
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
     * @var string
     */
    protected $encryptionType;
    /**
     * @var string
     */
    protected $dhcpServerIp;
    /**
     * @var int
     */
    protected $hlpTimeout = 30;
    /**
     * @var string
     */
    protected $realmProfileId;
    /**
     * @return string
     */
    public function getEncryptionType(): string
    {
        return $this->encryptionType;
    }
    /**
     * @param string $encryptionType
     *
     * @return self
     */
    public function setEncryptionType(string $encryptionType): self
    {
        $this->initialized['encryptionType'] = true;
        $this->encryptionType = $encryptionType;
        return $this;
    }
    /**
     * @return string
     */
    public function getDhcpServerIp(): string
    {
        return $this->dhcpServerIp;
    }
    /**
     * @param string $dhcpServerIp
     *
     * @return self
     */
    public function setDhcpServerIp(string $dhcpServerIp): self
    {
        $this->initialized['dhcpServerIp'] = true;
        $this->dhcpServerIp = $dhcpServerIp;
        return $this;
    }
    /**
     * @return int
     */
    public function getHlpTimeout(): int
    {
        return $this->hlpTimeout;
    }
    /**
     * @param int $hlpTimeout
     *
     * @return self
     */
    public function setHlpTimeout(int $hlpTimeout): self
    {
        $this->initialized['hlpTimeout'] = true;
        $this->hlpTimeout = $hlpTimeout;
        return $this;
    }
    /**
     * @return string
     */
    public function getRealmProfileId(): string
    {
        return $this->realmProfileId;
    }
    /**
     * @param string $realmProfileId
     *
     * @return self
     */
    public function setRealmProfileId(string $realmProfileId): self
    {
        $this->initialized['realmProfileId'] = true;
        $this->realmProfileId = $realmProfileId;
        return $this;
    }
}