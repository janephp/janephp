<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserDetail implements AdditionalPropertiesInterface
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
     * @var list<UserRoleAssignment>|null
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
    /**
     * Owner tokens referencing the user.
     *
     * @var list<OwnerToken>|null
     */
    public ?array $ownerTokens;
    /**
     * Authorization state the user is currently in.
     *
     * @var string
     */
    public string $authorizationState;
    /**
     * Locked users are unable to log in and use the system.
     *
     * @var bool
     */
    public bool $isLocked;
    /**
     * Life cycle state the user is currently in.
     *
     * @var string
     */
    public string $lifeCycle;
    /**
     * The support user is a user created for Picturepark support personnel.
     *
     * @var bool
     */
    public bool $isSupportUser;
    /**
     * Read-only users can't be removed from the system, e.g. service user.
     *
     * @var bool
     */
    public bool $isReadOnly;
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @var bool
     */
    public bool $isFederated;
    /**
     * Audit information.
     *
     * @var UserAuditDetail|null
     */
    public ?UserAuditDetail $audit;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'firstName' => 'firstName', 'lastName' => 'lastName', 'emailAddress' => 'emailAddress', 'isDeleted' => 'isDeleted', 'userRoles' => 'userRoles', 'comment' => 'comment', 'languageCode' => 'languageCode', 'address' => 'address', 'identityProviderId' => 'identityProviderId', 'ownerTokens' => 'ownerTokens', 'authorizationState' => 'authorizationState', 'isLocked' => 'isLocked', 'lifeCycle' => 'lifeCycle', 'isSupportUser' => 'isSupportUser', 'isReadOnly' => 'isReadOnly', 'isFederated' => 'isFederated', 'audit' => 'audit'];
    }
}