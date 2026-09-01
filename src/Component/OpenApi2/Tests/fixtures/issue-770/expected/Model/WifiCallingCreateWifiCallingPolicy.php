<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WifiCallingCreateWifiCallingPolicy
{
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Wi-Fi calling policy belongs
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * QoS priority of the Wi-Fi calling policy
     *
     * @var string
     */
    public string $priority;
    /**
     * ePDG list of the Wi-Fi calling policy
     *
     * @var list<WifiCallingEpdg>
     */
    public array $epdgs;
}