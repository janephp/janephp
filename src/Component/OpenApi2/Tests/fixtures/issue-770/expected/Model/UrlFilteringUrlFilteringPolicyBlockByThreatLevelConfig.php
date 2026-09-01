<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfig
{
    /**
     * User can set web reputation score as HIGH_RISK(20), SUSPICIOUS(40), MODERATE_RISK(60), LOW_RISK(80) or TRUSTWORTHY(100). When setting as HIGH_RISK, all the high risk will be blocked
     *
     * @var string
     */
    public string $webReputationScore;
}