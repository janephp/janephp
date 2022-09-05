<?php

namespace PicturePark\API\Model;

class BusinessRuleConfigurable extends BusinessRule
{
    /**
     * The condition that makes this rule trigger.
     *
     * @var mixed|null
     */
    protected $condition;
    /**
     * Optional transformations to apply.
     *
     * @var BusinessRuleTransformationGroup[]|null
     */
    protected $transformationGroups;
    /**
     * The actions that are performed when this rule triggers.
     *
     * @var BusinessRuleAction[]|null
     */
    protected $actions;
    /**
     * The condition that makes this rule trigger.
     *
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * The condition that makes this rule trigger.
     *
     * @param mixed $condition
     *
     * @return self
     */
    public function setCondition($condition) : self
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Optional transformations to apply.
     *
     * @return BusinessRuleTransformationGroup[]|null
     */
    public function getTransformationGroups() : ?array
    {
        return $this->transformationGroups;
    }
    /**
     * Optional transformations to apply.
     *
     * @param BusinessRuleTransformationGroup[]|null $transformationGroups
     *
     * @return self
     */
    public function setTransformationGroups(?array $transformationGroups) : self
    {
        $this->transformationGroups = $transformationGroups;
        return $this;
    }
    /**
     * The actions that are performed when this rule triggers.
     *
     * @return BusinessRuleAction[]|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * The actions that are performed when this rule triggers.
     *
     * @param BusinessRuleAction[]|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
}