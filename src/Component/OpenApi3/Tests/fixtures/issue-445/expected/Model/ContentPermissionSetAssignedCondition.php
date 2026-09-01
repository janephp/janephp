<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentPermissionSetAssignedCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Permission set id to match on.
     *
     * @var string|null
     */
    public ?string $permissionSetId;
    public function definedProperties(): array
    {
        return ['permissionSetId' => 'permissionSetId'];
    }
}