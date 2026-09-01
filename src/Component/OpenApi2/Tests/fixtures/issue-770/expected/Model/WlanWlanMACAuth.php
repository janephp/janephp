<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanMACAuth
{
    /**
     * MAC address format. The default format is 0010a42319c0 and the 802.1X format is 00-10-A4-23-19-C0.
     *
     * @var string
     */
    public string $macAuthMacFormat;
    /**
     * User defined password. When this field is set to an empty string, the MAC address is used as password.
     *
     * @var string
     */
    public string $customizedPassword;
}