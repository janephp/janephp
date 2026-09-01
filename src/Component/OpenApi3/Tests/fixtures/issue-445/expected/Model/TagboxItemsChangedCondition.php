<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TagboxItemsChangedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    public ?string $fieldPath;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath'];
    }
}