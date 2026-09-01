<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class PermissionSetOwnershipTransferItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the user to whom the permission set ownership should be transferred to.
     *
     * @var string
     */
    public string $transferUserId;
    /**
     * The permission set ID.
     *
     * @var string|null
     */
    public ?string $permissionSetId;
    public function definedProperties(): array
    {
        return ['transferUserId' => 'transferUserId', 'permissionSetId' => 'permissionSetId'];
    }
}