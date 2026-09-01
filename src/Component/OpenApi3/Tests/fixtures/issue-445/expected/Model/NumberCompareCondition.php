<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NumberCompareCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * JSON path to the field.
     *
     * @var string|null
     */
    public ?string $fieldPath;
    /**
     * Mode to use for comparison.
     *
     * @var string
     */
    public string $mode;
    /**
     * Value to compare to.
     *
     * @var float
     */
    public float $value;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath', 'mode' => 'mode', 'value' => 'value'];
    }
}