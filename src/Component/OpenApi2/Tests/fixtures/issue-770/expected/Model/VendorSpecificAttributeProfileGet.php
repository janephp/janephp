<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VendorSpecificAttributeProfileGet
{
    /**
     * Identifier of the vendor specific attribute profile
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * Zone Id
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Vendor specific attribute list for Radius protocol
     *
     * @var list<VendorSpecificAttributeProfileVendorSpecificAttribute>
     */
    public array $attributes;
}