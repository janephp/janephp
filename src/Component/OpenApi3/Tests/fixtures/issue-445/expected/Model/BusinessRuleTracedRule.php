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
     * @var mixed|null
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
    public function setConfiguration($configuration): self
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