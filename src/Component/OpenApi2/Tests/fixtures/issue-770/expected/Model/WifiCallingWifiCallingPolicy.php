<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WifiCallingWifiCallingPolicy
{
    /**
     * Identifier of the System (root) domain or partner managed domain to which the Wi-Fi calling policy belongs
     *
     * @var string
     */
    public string $domainId;
    /**
     * Identifier of the Wi-Fi calling policy
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant Id
     *
     * @var string
     */
    public string $tenantId;
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
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
}