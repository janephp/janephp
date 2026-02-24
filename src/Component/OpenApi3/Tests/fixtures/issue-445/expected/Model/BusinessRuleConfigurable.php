<?php

namespace PicturePark\API\Model;

class BusinessRuleConfigurable extends BusinessRule
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
     * The condition that makes this rule trigger.
     *
     * @var mixed|null
     */
    protected $condition;
    /**
     * Optional transformations to apply.
     *
     * @var list<BusinessRuleTransformationGroup>|null
     */
    protected $transformationGroups;
    /**
     * The actions that are performed when this rule triggers.
     *
     * @var list<BusinessRuleAction>|null
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
    public function setCondition($condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
    /**
     * Optional transformations to apply.
     *
     * @return list<BusinessRuleTransformationGroup>|null
     */
    public function getTransformationGroups(): ?array
    {
        return $this->transformationGroups;
    }
    /**
     * Optional transformations to apply.
     *
     * @param list<BusinessRuleTransformationGroup>|null $transformationGroups
     *
     * @return self
     */
    public function setTransformationGroups(?array $transformationGroups): self
    {
        $this->initialized['transformationGroups'] = true;
        $this->transformationGroups = $transformationGroups;
        return $this;
    }
    /**
     * The actions that are performed when this rule triggers.
     *
     * @return list<BusinessRuleAction>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }
    /**
     * The actions that are performed when this rule triggers.
     *
     * @param list<BusinessRuleAction>|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions): self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
}