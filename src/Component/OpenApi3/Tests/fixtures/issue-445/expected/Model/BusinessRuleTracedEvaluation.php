<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedEvaluation
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates if the rule was found to be executable.
     *
     * @var bool
     */
    protected $conditionSatisfied;
    /**
     * Detailed evaluation results for each condition.
     *
     * @var list<BusinessRuleTracedEvaluationCondition>|null
     */
    protected $conditions;
    /**
     * Detailed results for transformation groups.
     *
     * @var list<BusinessRuleTracedTransformationGroup>|null
     */
    protected $transformationGroups;
    /**
     * Detailed steps performed by actions.
     *
     * @var list<BusinessRuleTracedAction>|null
     */
    protected $actions;
    /**
     * State of variables after all transformation groups were ran.
     *
     * @var array<string, string>|null
     */
    protected $variables;
    /**
     * Indicates if the rule was found to be executable.
     *
     * @return bool
     */
    public function getConditionSatisfied() : bool
    {
        return $this->conditionSatisfied;
    }
    /**
     * Indicates if the rule was found to be executable.
     *
     * @param bool $conditionSatisfied
     *
     * @return self
     */
    public function setConditionSatisfied(bool $conditionSatisfied) : self
    {
        $this->initialized['conditionSatisfied'] = true;
        $this->conditionSatisfied = $conditionSatisfied;
        return $this;
    }
    /**
     * Detailed evaluation results for each condition.
     *
     * @return list<BusinessRuleTracedEvaluationCondition>|null
     */
    public function getConditions() : ?array
    {
        return $this->conditions;
    }
    /**
     * Detailed evaluation results for each condition.
     *
     * @param list<BusinessRuleTracedEvaluationCondition>|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions) : self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * Detailed results for transformation groups.
     *
     * @return list<BusinessRuleTracedTransformationGroup>|null
     */
    public function getTransformationGroups() : ?array
    {
        return $this->transformationGroups;
    }
    /**
     * Detailed results for transformation groups.
     *
     * @param list<BusinessRuleTracedTransformationGroup>|null $transformationGroups
     *
     * @return self
     */
    public function setTransformationGroups(?array $transformationGroups) : self
    {
        $this->initialized['transformationGroups'] = true;
        $this->transformationGroups = $transformationGroups;
        return $this;
    }
    /**
     * Detailed steps performed by actions.
     *
     * @return list<BusinessRuleTracedAction>|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Detailed steps performed by actions.
     *
     * @param list<BusinessRuleTracedAction>|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions) : self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
    /**
     * State of variables after all transformation groups were ran.
     *
     * @return array<string, string>|null
     */
    public function getVariables() : ?iterable
    {
        return $this->variables;
    }
    /**
     * State of variables after all transformation groups were ran.
     *
     * @param array<string, string>|null $variables
     *
     * @return self
     */
    public function setVariables(?iterable $variables) : self
    {
        $this->initialized['variables'] = true;
        $this->variables = $variables;
        return $this;
    }
}