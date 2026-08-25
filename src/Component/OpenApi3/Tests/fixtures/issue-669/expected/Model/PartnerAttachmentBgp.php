<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentBgp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ASN of the local router.
     *
     * @var int
     */
    protected $localAsn;
    /**
     * ASN of the peer router
     *
     * @var int
     */
    protected $peerAsn;
    /**
     * IP of the DigitalOcean router
     *
     * @var string
     */
    protected $localRouterIp;
    /**
     * IP of the peer router
     *
     * @var string
     */
    protected $peerRouterIp;
    /**
     * ASN of the local router.
     *
     * @return int
     */
    public function getLocalAsn(): int
    {
        return $this->localAsn;
    }
    /**
     * ASN of the local router.
     *
     * @param int $localAsn
     *
     * @return self
     */
    public function setLocalAsn(int $localAsn): self
    {
        $this->initialized['localAsn'] = true;
        $this->localAsn = $localAsn;
        return $this;
    }
    /**
     * ASN of the peer router
     *
     * @return int
     */
    public function getPeerAsn(): int
    {
        return $this->peerAsn;
    }
    /**
     * ASN of the peer router
     *
     * @param int $peerAsn
     *
     * @return self
     */
    public function setPeerAsn(int $peerAsn): self
    {
        $this->initialized['peerAsn'] = true;
        $this->peerAsn = $peerAsn;
        return $this;
    }
    /**
     * IP of the DigitalOcean router
     *
     * @return string
     */
    public function getLocalRouterIp(): string
    {
        return $this->localRouterIp;
    }
    /**
     * IP of the DigitalOcean router
     *
     * @param string $localRouterIp
     *
     * @return self
     */
    public function setLocalRouterIp(string $localRouterIp): self
    {
        $this->initialized['localRouterIp'] = true;
        $this->localRouterIp = $localRouterIp;
        return $this;
    }
    /**
     * IP of the peer router
     *
     * @return string
     */
    public function getPeerRouterIp(): string
    {
        return $this->peerRouterIp;
    }
    /**
     * IP of the peer router
     *
     * @param string $peerRouterIp
     *
     * @return self
     */
    public function setPeerRouterIp(string $peerRouterIp): self
    {
        $this->initialized['peerRouterIp'] = true;
        $this->peerRouterIp = $peerRouterIp;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['localAsn' => ['local_asn', 'getLocalAsn', 'setLocalAsn'], 'peerAsn' => ['peer_asn', 'getPeerAsn', 'setPeerAsn'], 'localRouterIp' => ['local_router_ip', 'getLocalRouterIp', 'setLocalRouterIp'], 'peerRouterIp' => ['peer_router_ip', 'getPeerRouterIp', 'setPeerRouterIp']];
    }
}