<?php

namespace PicturePark\API\Model;

class UserProfile
{
    /**
     * ID of the user.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Email address.
     *
     * @var string|null
     */
    public ?string $emailAddress;
    /**
     * First name.
     *
     * @var string|null
     */
    public ?string $firstName;
    /**
     * Last name.
     *
     * @var string|null
     */
    public ?string $lastName;
    /**
     * Language code.
     *
     * @var string|null
     */
    public ?string $languageCode;
    /**
     * Address.
     *
     * @var UserAddress|null
     */
    public ?UserAddress $address;
    /**
     * Authorization state.
     *
     * @var string
     */
    public string $authorizationState;
    /**
     * Indicates if the user is locked.
     *
     * @var bool
     */
    public bool $isLocked;
    /**
     * A list of user rights assigned to the user.
     *
     * @var list<string>|null
     */
    public ?array $userRights;
    /**
     * A list of user role IDs assigned to the user.
     *
     * @var list<string>|null
     */
    public ?array $userRoleIds;
    /**
     * Indicates if the user has not accepted the latest terms of consent.
     *
     * @var bool
     */
    public bool $termsConsentExpired;
    /**
     * A list of system user roles assigned to the user.
     *
     * @var list<string>|null
     */
    public ?array $systemUserRoles;
    /**
     * Indicates if the user has the developer flag set.
     *
     * @var bool
     */
    public bool $isDeveloper;
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @var bool
     */
    public bool $isFederated;
}