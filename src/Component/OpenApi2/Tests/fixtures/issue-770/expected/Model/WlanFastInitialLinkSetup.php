<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlanFastInitialLinkSetup
{
    /**
     * @var string
     */
    public string $encryptionType;
    /**
     * @var string
     */
    public string $dhcpServerIp;
    /**
     * @var int
     */
    public int $hlpTimeout = 30;
    /**
     * @var string
     */
    public string $realmProfileId;
}