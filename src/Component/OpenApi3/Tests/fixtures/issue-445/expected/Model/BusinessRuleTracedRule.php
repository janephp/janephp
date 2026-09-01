<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedRule
{
    /**
     * Configuration of the rule as it was running. Enriched with trace ref IDs.
     *
     * @var BusinessRule|null
     */
    public ?BusinessRule $configuration;
    /**
     * Evaluations performed for this rule.
     *
     * @var list<BusinessRuleTracedEvaluation>|null
     */
    public ?array $evaluations;
}