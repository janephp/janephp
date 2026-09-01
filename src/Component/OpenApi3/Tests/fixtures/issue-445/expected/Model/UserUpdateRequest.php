<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserUpdateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User's Picturepark ID.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * User's first name.
     *
     * @var string|null
     */
    public ?string $firstName;
    /**
     * User's last name.
     *
     * @var string|null
     */
    public ?string $lastName;
    /**
     * Email address of the user (doubles as username).
     *
     * @var string
     */
    public string $emailAddress;
    /**
     * Marks a user that was deleted from the system.
     *
     * @var bool
     */
    public bool $isDeleted;
    /**
     * User roles the user should be assigned to. Overwrites the original user roles.
     *
     * @var list<UserRole>|null
     */
    public ?array $userRoles;
    /**
     * Comment saved for the user.
     *
     * @var string|null
     */
    public ?string $comment;
    /**
     * Preferred language, e.g. for correspondence.
     *
     * @var string|null
     */
    public ?string $languageCode;
    /**
     * User's address.
     *
     * @var UserAddress|null
     */
    public ?UserAddress $address;
    /**
     * Identity provider that governs this user or null for Picturepark's own IdentityServer.
     *
     * @var string|null
     */
    public ?string $identityProviderId;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'firstName' => 'firstName', 'lastName' => 'lastName', 'emailAddress' => 'emailAddress', 'isDeleted' => 'isDeleted', 'userRoles' => 'userRoles', 'comment' => 'comment', 'languageCode' => 'languageCode', 'address' => 'address', 'identityProviderId' => 'identityProviderId'];
    }
}