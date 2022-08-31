<?php

namespace PicturePark\API\Model;

class BusinessRuleConfigurable extends BusinessRule
{
    /**
     * User defined ID of the rule.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Trigger point.
     *
     * @var mixed|null
     */
    protected $triggerPoint;
    /**
     * Enable.
     *
     * @var bool
     */
    protected $isEnabled;
    /**
     * Language specific rule names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * Language specific rule description.
     *
     * @var mixed|null
     */
    protected $description;
    /**
     * Enable trace logs for this rule.
     *
     * @var bool
     */
    protected $enableTracing;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * User defined ID of the rule.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * User defined ID of the rule.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Trigger point.
     *
     * @return mixed
     */
    public function getTriggerPoint()
    {
        return $this->triggerPoint;
    }
    /**
     * Trigger point.
     *
     * @param mixed $triggerPoint
     *
     * @return self
     */
    public function setTriggerPoint($triggerPoint) : self
    {
        $this->triggerPoint = $triggerPoint;
        return $this;
    }
    /**
     * Enable.
     *
     * @return bool
     */
    public function getIsEnabled() : bool
    {
        return $this->isEnabled;
    }
    /**
     * Enable.
     *
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(bool $isEnabled) : self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }
    /**
     * Language specific rule names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific rule names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * Language specific rule description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Language specific rule description.
     *
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Enable trace logs for this rule.
     *
     * @return bool
     */
    public function getEnableTracing() : bool
    {
        return $this->enableTracing;
    }
    /**
     * Enable trace logs for this rule.
     *
     * @param bool $enableTracing
     *
     * @return self
     */
    public function setEnableTracing(bool $enableTracing) : self
    {
        $this->enableTracing = $enableTracing;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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