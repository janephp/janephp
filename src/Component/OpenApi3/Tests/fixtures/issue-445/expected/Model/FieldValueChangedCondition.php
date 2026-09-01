<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FieldValueChangedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    public ?string $fieldPath;
    /**
     * Expected value for the field to have to satisfy the condition
     *
     * @var mixed|null
     */
    public $expectedValue;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath', 'expectedValue' => 'expectedValue'];
    }
}