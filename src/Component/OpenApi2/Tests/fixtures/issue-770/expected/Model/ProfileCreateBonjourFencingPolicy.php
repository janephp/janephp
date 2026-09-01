<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateBonjourFencingPolicy
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
     * Bonjour Fencing Rule List
     *
     * @var list<ProfileBonjourFencingRule>
     */
    public array $bonjourFencingRuleList;
    /**
     * Bonjour Fencing Rule Mapping List
     *
     * @var list<ProfileBonjourFencingRuleMapping>
     */
    public array $bonjourFencingRuleMappingList;
}