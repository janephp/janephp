<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DhcpMsgStatsDhcpMsgStats
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $tenantId;
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $apMac;
    /**
     * DHCP Message Received Statistic
     *
     * @var DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats
     */
    public DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats $dhcpMsgRecvdStats;
    /**
     * DHCP Message Sent Statistic
     *
     * @var DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats
     */
    public DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats $dhcpMsgSentStats;
}