<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2FirewallsFirewallIdRulesPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<FirewallRulesInboundRulesItem>|null
     */
    public ?array $inboundRules;
    /**
     * @var list<FirewallRulesOutboundRulesItem>|null
     */
    public ?array $outboundRules;
    public function definedProperties(): array
    {
        return ['inboundRules' => 'inbound_rules', 'outboundRules' => 'outbound_rules'];
    }
}