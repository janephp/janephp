<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsVpc implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var list<AppsVpcEgressIp>
     */
    public array $egressIps;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'egressIps' => 'egress_ips'];
    }
}