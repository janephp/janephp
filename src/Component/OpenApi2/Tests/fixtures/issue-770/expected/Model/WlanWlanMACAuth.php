<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanMACAuth
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
     * MAC address format. The default format is 0010a42319c0 and the 802.1X format is 00-10-A4-23-19-C0.
     *
     * @var string
     */
    protected $macAuthMacFormat;
    /**
     * User defined password. When this field is set to an empty string, the MAC address is used as password.
     *
     * @var string
     */
    protected $customizedPassword;
    /**
     * MAC address format. The default format is 0010a42319c0 and the 802.1X format is 00-10-A4-23-19-C0.
     *
     * @return string
     */
    public function getMacAuthMacFormat(): string
    {
        return $this->macAuthMacFormat;
    }
    /**
     * MAC address format. The default format is 0010a42319c0 and the 802.1X format is 00-10-A4-23-19-C0.
     *
     * @param string $macAuthMacFormat
     *
     * @return self
     */
    public function setMacAuthMacFormat(string $macAuthMacFormat): self
    {
        $this->initialized['macAuthMacFormat'] = true;
        $this->macAuthMacFormat = $macAuthMacFormat;
        return $this;
    }
    /**
     * User defined password. When this field is set to an empty string, the MAC address is used as password.
     *
     * @return string
     */
    public function getCustomizedPassword(): string
    {
        return $this->customizedPassword;
    }
    /**
     * User defined password. When this field is set to an empty string, the MAC address is used as password.
     *
     * @param string $customizedPassword
     *
     * @return self
     */
    public function setCustomizedPassword(string $customizedPassword): self
    {
        $this->initialized['customizedPassword'] = true;
        $this->customizedPassword = $customizedPassword;
        return $this;
    }
}