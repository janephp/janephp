<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ControlPlaneFirewall implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates whether the control plane firewall is enabled.
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * An array of public addresses (IPv4 or CIDR) allowed to access the control plane.
     *
     * @var list<string>
     */
    public array $allowedAddresses;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled', 'allowedAddresses' => 'allowed_addresses'];
    }
}