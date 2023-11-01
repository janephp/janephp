<?php

namespace PicturePark\API\Model;

class BusinessRule
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
     */
    public function setId(?string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     */
    public function setTriggerPoint($triggerPoint)
    {
        $this->initialized['triggerPoint'] = true;
        $this->triggerPoint = $triggerPoint;
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
     */
    public function setIsEnabled(bool $isEnabled)
    {
        $this->initialized['isEnabled'] = true;
        $this->isEnabled = $isEnabled;
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
     */
    public function setNames($names)
    {
        $this->initialized['names'] = true;
        $this->names = $names;
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
     */
    public function setDescription($description)
    {
        $this->initialized['description'] = true;
        $this->description = $description;
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
     */
    public function setEnableTracing(bool $enableTracing)
    {
        $this->initialized['enableTracing'] = true;
        $this->enableTracing = $enableTracing;
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
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}