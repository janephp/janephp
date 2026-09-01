<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentBgp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ASN of the local router.
     *
     * @var int
     */
    public int $localAsn;
    /**
     * ASN of the peer router
     *
     * @var int
     */
    public int $peerAsn;
    /**
     * IP of the DigitalOcean router
     *
     * @var string
     */
    public string $localRouterIp;
    /**
     * IP of the peer router
     *
     * @var string
     */
    public string $peerRouterIp;
    public function definedProperties(): array
    {
        return ['localAsn' => 'local_asn', 'peerAsn' => 'peer_asn', 'localRouterIp' => 'local_router_ip', 'peerRouterIp' => 'peer_router_ip'];
    }
}