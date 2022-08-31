<?php

namespace PicturePark\API\Model;

class AssignValueAction extends BusinessRuleAction
{
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Path to the object the value should be inserted in.
     *
     * @var string|null
     */
    protected $path;
    /**
     * ID of the field, the value should be inserted in.
     *
     * @var string|null
     */
    protected $fieldId;
    /**
     * Value to assign.
     *
     * @var mixed|null
     */
    protected $value;
    /**
    * Indicates whether existing values should be replaced.
    Note: for multi fieldsets and relations, this setting controls, if the value is added
    to the already existing values or if the existing values shall be overwritten.
    *
    * @var bool
    */
    protected $replace;
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->traceRefId = $traceRefId;
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
     * Path to the object the value should be inserted in.
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * Path to the object the value should be inserted in.
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * ID of the field, the value should be inserted in.
     *
     * @return string|null
     */
    public function getFieldId() : ?string
    {
        return $this->fieldId;
    }
    /**
     * ID of the field, the value should be inserted in.
     *
     * @param string|null $fieldId
     *
     * @return self
     */
    public function setFieldId(?string $fieldId) : self
    {
        $this->fieldId = $fieldId;
        return $this;
    }
    /**
     * Value to assign.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Value to assign.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
    * Indicates whether existing values should be replaced.
    Note: for multi fieldsets and relations, this setting controls, if the value is added
    to the already existing values or if the existing values shall be overwritten.
    *
    * @return bool
    */
    public function getReplace() : bool
    {
        return $this->replace;
    }
    /**
    * Indicates whether existing values should be replaced.
    Note: for multi fieldsets and relations, this setting controls, if the value is added
    to the already existing values or if the existing values shall be overwritten.
    *
    * @param bool $replace
    *
    * @return self
    */
    public function setReplace(bool $replace) : self
    {
        $this->replace = $replace;
        return $this;
    }
}