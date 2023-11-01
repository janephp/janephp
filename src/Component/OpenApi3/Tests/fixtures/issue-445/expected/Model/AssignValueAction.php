<?php

namespace PicturePark\API\Model;

class AssignValueAction extends BusinessRuleAction
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
        $this->initialized['path'] = true;
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
        $this->initialized['fieldId'] = true;
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
        $this->initialized['value'] = true;
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
        $this->initialized['replace'] = true;
        $this->replace = $replace;
        return $this;
    }
}