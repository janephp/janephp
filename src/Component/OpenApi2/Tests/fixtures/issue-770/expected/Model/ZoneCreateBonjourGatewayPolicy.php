<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneCreateBonjourGatewayPolicy
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Bonjour policy rule list
     *
     * @var list<ZoneBonjourPolicyRule>
     */
    public array $bonjourPolicyRuleList;
}