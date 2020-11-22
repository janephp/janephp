<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedRule
{
    /**
     * Configuration of the rule as it was running. Enriched with trace ref IDs.
     *
     * @var mixed|null
     */
    protected $configuration;
    /**
     * Evaluations performed for this rule.
     *
     * @var BusinessRuleTracedEvaluation[]|null
     */
    protected $evaluations;
    /**
     * Configuration of the rule as it was running. Enriched with trace ref IDs.
     *
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
    /**
     * Configuration of the rule as it was running. Enriched with trace ref IDs.
     *
     * @param mixed $configuration
     *
     * @return self
     */
    public function setConfiguration($configuration) : self
    {
        $this->configuration = $configuration;
        return $this;
    }
    /**
     * Evaluations performed for this rule.
     *
     * @return BusinessRuleTracedEvaluation[]|null
     */
    public function getEvaluations() : ?array
    {
        return $this->evaluations;
    }
    /**
     * Evaluations performed for this rule.
     *
     * @param BusinessRuleTracedEvaluation[]|null $evaluations
     *
     * @return self
     */
    public function setEvaluations(?array $evaluations) : self
    {
        $this->evaluations = $evaluations;
        return $this;
    }
}