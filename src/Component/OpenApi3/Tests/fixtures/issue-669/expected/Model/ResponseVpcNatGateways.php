<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseVpcNatGateways implements AdditionalPropertiesInterface
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
     * @var list<VpcNatGatewayGet>
     */
    protected $vpcNatGateways;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<VpcNatGatewayGet>
     */
    public function getVpcNatGateways(): array
    {
        return $this->vpcNatGateways;
    }
    /**
     * @param list<VpcNatGatewayGet> $vpcNatGateways
     *
     * @return self
     */
    public function setVpcNatGateways(array $vpcNatGateways): self
    {
        $this->initialized['vpcNatGateways'] = true;
        $this->vpcNatGateways = $vpcNatGateways;
        return $this;
    }
    /**
     * @return PageLinks
     */
    public function getLinks(): PageLinks
    {
        return $this->links;
    }
    /**
     * @param PageLinks $links
     *
     * @return self
     */
    public function setLinks(PageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return MetaMeta
     */
    public function getMeta(): MetaMeta
    {
        return $this->meta;
    }
    /**
     * @param MetaMeta $meta
     *
     * @return self
     */
    public function setMeta(MetaMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['vpcNatGateways' => ['vpc_nat_gateways', 'getVpcNatGateways', 'setVpcNatGateways'], 'links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}