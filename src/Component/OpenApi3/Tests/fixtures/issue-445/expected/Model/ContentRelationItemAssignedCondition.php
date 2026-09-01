<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentRelationItemAssignedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Content id that should be matched against.
     *
     * @var string|null
     */
    public ?string $contentId;
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    public ?string $fieldPath;
    public function definedProperties(): array
    {
        return ['contentId' => 'contentId', 'fieldPath' => 'fieldPath'];
    }
}