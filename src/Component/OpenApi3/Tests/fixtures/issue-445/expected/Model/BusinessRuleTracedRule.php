<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedRule
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
     * Configuration of the rule as it was running. Enriched with trace ref IDs.
     *
     * @var BusinessRule|null
     */
    protected $configuration;
    /**
     * Evaluations performed for this rule.
     *
     * @var list<BusinessRuleTracedEvaluation>|null
     */
    protected $evaluations;
    /**
     * Configuration of the rule as it was running. Enriched with trace ref IDs.
     *
     * @return BusinessRule|null
     */
    public function getConfiguration(): ?BusinessRule
    {
        return $this->configuration;
    }
    /**
     * Configuration of the rule as it was running. Enriched with trace ref IDs.
     *
     * @param BusinessRule|null $configuration
     *
     * @return self
     */
    public function setConfiguration(?BusinessRule $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;
        return $this;
    }
    /**
     * Evaluations performed for this rule.
     *
     * @return list<BusinessRuleTracedEvaluation>|null
     */
    public function getEvaluations(): ?array
    {
        return $this->evaluations;
    }
    /**
     * Evaluations performed for this rule.
     *
     * @param list<BusinessRuleTracedEvaluation>|null $evaluations
     *
     * @return self
     */
    public function setEvaluations(?array $evaluations): self
    {
        $this->initialized['evaluations'] = true;
        $this->evaluations = $evaluations;
        return $this;
    }
}