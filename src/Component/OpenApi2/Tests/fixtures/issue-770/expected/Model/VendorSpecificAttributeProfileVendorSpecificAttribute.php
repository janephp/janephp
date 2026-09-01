<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VendorSpecificAttributeProfileVendorSpecificAttribute
{
    /**
     * Vendor ID of vendor specific attribute
     *
     * @var int
     */
    public int $vendorId;
    /**
     * Key ID of vendor specific attribute
     *
     * @var int
     */
    public int $keyId;
    /**
     * Value of vendor specific attribute
     *
     * @var string
     */
    public string $value;
    /**
     * Type of vendor specific attribute
     *
     * @var string
     */
    public string $type;
    /**
     * The radius protocol to which this given vendor specific attribute will attach
     *
     * @var string
     */
    public string $supportedRadiusProtocol;
}