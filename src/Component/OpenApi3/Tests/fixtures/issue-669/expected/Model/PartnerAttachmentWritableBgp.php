<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PartnerAttachmentWritableBgp implements AdditionalPropertiesInterface
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
     * IP of the DO router
     *
     * @var string
     */
    protected $localRouterIp;
    /**
     * IP of the Naas Provider router
     *
     * @var string
     */
    protected $peerRouterIp;
    /**
     * ASN of the peer router
     *
     * @var int
     */
    protected $peerRouterAsn;
    /**
     * BGP Auth Key
     *
     * @var string
     */
    protected $authKey;
    /**
     * IP of the DO router
     *
     * @return string
     */
    public function getLocalRouterIp(): string
    {
        return $this->localRouterIp;
    }
    /**
     * IP of the DO router
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
     * IP of the Naas Provider router
     *
     * @return string
     */
    public function getPeerRouterIp(): string
    {
        return $this->peerRouterIp;
    }
    /**
     * IP of the Naas Provider router
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
    /**
     * ASN of the peer router
     *
     * @return int
     */
    public function getPeerRouterAsn(): int
    {
        return $this->peerRouterAsn;
    }
    /**
     * ASN of the peer router
     *
     * @param int $peerRouterAsn
     *
     * @return self
     */
    public function setPeerRouterAsn(int $peerRouterAsn): self
    {
        $this->initialized['peerRouterAsn'] = true;
        $this->peerRouterAsn = $peerRouterAsn;
        return $this;
    }
    /**
     * BGP Auth Key
     *
     * @return string
     */
    public function getAuthKey(): string
    {
        return $this->authKey;
    }
    /**
     * BGP Auth Key
     *
     * @param string $authKey
     *
     * @return self
     */
    public function setAuthKey(string $authKey): self
    {
        $this->initialized['authKey'] = true;
        $this->authKey = $authKey;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['localRouterIp' => ['local_router_ip', 'getLocalRouterIp', 'setLocalRouterIp'], 'peerRouterIp' => ['peer_router_ip', 'getPeerRouterIp', 'setPeerRouterIp'], 'peerRouterAsn' => ['peer_router_asn', 'getPeerRouterAsn', 'setPeerRouterAsn'], 'authKey' => ['auth_key', 'getAuthKey', 'setAuthKey']];
    }
}