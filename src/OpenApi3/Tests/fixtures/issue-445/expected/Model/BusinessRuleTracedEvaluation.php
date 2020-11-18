<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedEvaluation
{
    /**
     * Indicates if the rule was found to be executable.
     *
     * @var bool
     */
    protected $conditionSatisfied;
    /**
     * Detailed evaluation results for each condition.
     *
     * @var BusinessRuleTracedEvaluationCondition[]|null
     */
    protected $conditions;
    /**
     * Detailed results for transformation groups.
     *
     * @var BusinessRuleTracedTransformationGroup[]|null
     */
    protected $transformationGroups;
    /**
     * Detailed steps performed by actions.
     *
     * @var BusinessRuleTracedAction[]|null
     */
    protected $actions;
    /**
     * State of variables after all transformation groups were ran.
     *
     * @var string[]|null
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
        $this->conditionSatisfied = $conditionSatisfied;
        return $this;
    }
    /**
     * Detailed evaluation results for each condition.
     *
     * @return BusinessRuleTracedEvaluationCondition[]|null
     */
    public function getConditions() : ?array
    {
        return $this->conditions;
    }
    /**
     * Detailed evaluation results for each condition.
     *
     * @param BusinessRuleTracedEvaluationCondition[]|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions) : self
    {
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * Detailed results for transformation groups.
     *
     * @return BusinessRuleTracedTransformationGroup[]|null
     */
    public function getTransformationGroups() : ?array
    {
        return $this->transformationGroups;
    }
    /**
     * Detailed results for transformation groups.
     *
     * @param BusinessRuleTracedTransformationGroup[]|null $transformationGroups
     *
     * @return self
     */
    public function setTransformationGroups(?array $transformationGroups) : self
    {
        $this->transformationGroups = $transformationGroups;
        return $this;
    }
    /**
     * Detailed steps performed by actions.
     *
     * @return BusinessRuleTracedAction[]|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Detailed steps performed by actions.
     *
     * @param BusinessRuleTracedAction[]|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * State of variables after all transformation groups were ran.
     *
     * @return string[]|null
     */
    public function getVariables() : ?iterable
    {
        return $this->variables;
    }
    /**
     * State of variables after all transformation groups were ran.
     *
     * @param string[]|null $variables
     *
     * @return self
     */
    public function setVariables(?iterable $variables) : self
    {
        $this->variables = $variables;
        return $this;
    }
}