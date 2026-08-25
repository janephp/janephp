<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NumberCompareCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * JSON path to the field.
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
     * Mode to use for comparison.
     *
     * @var string
     */
    protected $mode;
    /**
     * Value to compare to.
     *
     * @var float
     */
    protected $value;
    /**
     * JSON path to the field.
     *
     * @return string|null
     */
    public function getFieldPath(): ?string
    {
        return $this->fieldPath;
    }
    /**
     * JSON path to the field.
     *
     * @param string|null $fieldPath
     *
     * @return self
     */
    public function setFieldPath(?string $fieldPath): self
    {
        $this->initialized['fieldPath'] = true;
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * Mode to use for comparison.
     *
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }
    /**
     * Mode to use for comparison.
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * Value to compare to.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Value to compare to.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['fieldPath' => ['fieldPath', 'getFieldPath', 'setFieldPath'], 'mode' => ['mode', 'getMode', 'setMode'], 'value' => ['value', 'getValue', 'setValue']];
    }
}