<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfig
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * User can set web reputation score as HIGH_RISK(20), SUSPICIOUS(40), MODERATE_RISK(60), LOW_RISK(80) or TRUSTWORTHY(100). When setting as HIGH_RISK, all the high risk will be blocked
     *
     * @var string
     */
    protected $webReputationScore;
    /**
     * User can set web reputation score as HIGH_RISK(20), SUSPICIOUS(40), MODERATE_RISK(60), LOW_RISK(80) or TRUSTWORTHY(100). When setting as HIGH_RISK, all the high risk will be blocked
     *
     * @return string
     */
    public function getWebReputationScore(): string
    {
        return $this->webReputationScore;
    }
    /**
     * User can set web reputation score as HIGH_RISK(20), SUSPICIOUS(40), MODERATE_RISK(60), LOW_RISK(80) or TRUSTWORTHY(100). When setting as HIGH_RISK, all the high risk will be blocked
     *
     * @param string $webReputationScore
     *
     * @return self
     */
    public function setWebReputationScore(string $webReputationScore): self
    {
        $this->initialized['webReputationScore'] = true;
        $this->webReputationScore = $webReputationScore;
        return $this;
    }
}