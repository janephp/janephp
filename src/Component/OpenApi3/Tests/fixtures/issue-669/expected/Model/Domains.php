<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Domains implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * FQDN to associate with a Global load balancer.
     *
     * @var string
     */
    public string $name;
    /**
     * A boolean value indicating if the domain is already managed by DigitalOcean. If true, all A and AAAA records required to enable Global load balancers will be automatically added.
     *
     * @var bool
     */
    public bool $isManaged;
    /**
     * The ID of the TLS certificate used for SSL termination.
     *
     * @var string
     */
    public string $certificateId;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'isManaged' => 'is_managed', 'certificateId' => 'certificate_id'];
    }
}