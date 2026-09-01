<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NotCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Inner condition.
     *
     * @var BusinessRuleCondition|null
     */
    public ?BusinessRuleCondition $condition;
    public function definedProperties(): array
    {
        return ['condition' => 'condition'];
    }
}