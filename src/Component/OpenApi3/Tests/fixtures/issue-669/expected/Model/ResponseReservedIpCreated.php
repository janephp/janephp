<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpCreated implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ReservedIp
     */
    public ReservedIp $reservedIp;
    /**
     * @var ResponseReservedIpCreatedLinks
     */
    public ResponseReservedIpCreatedLinks $links;
    public function definedProperties(): array
    {
        return ['reservedIp' => 'reserved_ip', 'links' => 'links'];
    }
}