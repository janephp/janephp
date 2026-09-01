<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentPermissionsUpdateItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of content permission set IDs which control content permissions that will be updated on the content.
     * These permissions control content accessibility for the users that do not own the content.
     *
     * @var list<string>|null
     */
    public ?array $contentPermissionSetIds;
    /**
     * ID of the content.
     *
     * @var string
     */
    public string $contentId;
    public function definedProperties(): array
    {
        return ['contentPermissionSetIds' => 'contentPermissionSetIds', 'contentId' => 'contentId'];
    }
}