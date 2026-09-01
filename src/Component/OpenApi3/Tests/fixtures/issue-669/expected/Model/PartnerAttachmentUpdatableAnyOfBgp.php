<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentUpdatableAnyOfBgp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * IP of the DO router
     *
     * @var string
     */
    public string $localRouterIp;
    /**
     * IP of the NaaS provider router
     *
     * @var string
     */
    public string $peerRouterIp;
    /**
     * ASN of the peer router
     *
     * @var int
     */
    public int $peerRouterAsn;
    /**
     * BGP Auth Key
     *
     * @var string
     */
    public string $authKey;
    public function definedProperties(): array
    {
        return ['localRouterIp' => 'local_router_ip', 'peerRouterIp' => 'peer_router_ip', 'peerRouterAsn' => 'peer_router_asn', 'authKey' => 'auth_key'];
    }
}