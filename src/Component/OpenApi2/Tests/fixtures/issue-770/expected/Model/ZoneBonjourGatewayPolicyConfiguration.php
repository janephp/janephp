<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneBonjourGatewayPolicyConfiguration
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
     * @var list<ZoneBonjourPolicyRuleConfiguration>
     */
    public array $bonjourPolicyRuleList;
}