<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcApplicationRule
{
    /**
     * @var int
     */
    public int $priority;
    /**
     * Type of the application rule
     *
     * @var string
     */
    public string $ruleType;
    /**
     * Type of the application when ruleType
     *
     * @var string
     */
    public string $applicationType;
    /**
     * Identifier of the Application Category from Signature Package (If applicationType is UserDefind, the catId is 32768)
     *
     * @var string
     */
    public string $catId;
    /**
     * Name of the Application Category from Signature Package
     *
     * @var string
     */
    public string $catName;
    /**
     * Identifier of the Application from Signature Package
     *
     * @var string
     */
    public string $appId;
    /**
     * Name of the Application from Signature Package
     *
     * @var string
     */
    public string $appName;
    /**
     * Uplink rate limiting (unit: Kbps)
     *
     * @var int
     */
    public int $uplink;
    /**
     * Downlink rate limiting (unit: Kbps)
     *
     * @var int
     */
    public int $downlink;
    /**
     * QoS uplink marking priority
     *
     * @var string
     */
    public string $markingPriority;
    /**
     * QoS uplink marking type
     *
     * @var string
     */
    public string $markingType;
    /**
     * QoS downlink classification type
     *
     * @var string
     */
    public string $classificationType;
}