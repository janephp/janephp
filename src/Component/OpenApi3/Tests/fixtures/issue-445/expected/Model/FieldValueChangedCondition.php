<?php

namespace PicturePark\API\Model;

class FieldValueChangedCondition extends BusinessRuleCondition
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
     * JSON path to the field
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
     * Expected value for the field to have to satisfy the condition
     *
     * @var mixed|null
     */
    protected $expectedValue;
    /**
     * JSON path to the field
     *
     * @return string|null
     */
    public function getFieldPath() : ?string
    {
        return $this->fieldPath;
    }
    /**
     * JSON path to the field
     *
     * @param string|null $fieldPath
     *
     * @return self
     */
    public function setFieldPath(?string $fieldPath) : self
    {
        $this->initialized['fieldPath'] = true;
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * Expected value for the field to have to satisfy the condition
     *
     * @return mixed
     */
    public function getExpectedValue()
    {
        return $this->expectedValue;
    }
    /**
     * Expected value for the field to have to satisfy the condition
     *
     * @param mixed $expectedValue
     *
     * @return self
     */
    public function setExpectedValue($expectedValue) : self
    {
        $this->initialized['expectedValue'] = true;
        $this->expectedValue = $expectedValue;
        return $this;
    }
}