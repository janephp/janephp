<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TagboxItemAssignedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    public ?string $fieldPath;
    /**
     * Ref Id of the list item that was assigned in the tagbox
     *
     * @var string|null
     */
    public ?string $refId;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath', 'refId' => 'refId'];
    }
}