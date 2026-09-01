<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseFloatingIpCreated implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var FloatingIp
     */
    public FloatingIp $floatingIp;
    /**
     * @var ResponseFloatingIpCreatedLinks
     */
    public ResponseFloatingIpCreatedLinks $links;
    public function definedProperties(): array
    {
        return ['floatingIp' => 'floating_ip', 'links' => 'links'];
    }
}