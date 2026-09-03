<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WifiCallingModifyWifiCallingPolicy
{
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