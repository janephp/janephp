<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class VendorSpecificAttributeProfilePersist
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
     * Vendor specific attribute list for Radius protocol
     *
     * @var list<VendorSpecificAttributeProfileVendorSpecificAttribute>
     */
    public array $attributes;
}