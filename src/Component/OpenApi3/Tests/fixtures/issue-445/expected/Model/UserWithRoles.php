<?php

namespace PicturePark\API\Model;

class UserWithRoles
{
    /**
     * IDs of user roles user is assigned to
     *
     * @var list<string>|null
     */
    public ?array $userRoleIds;
    /**
     * User's Picturepark ID.
     *
     * @var string
     */
    public string $id;
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
     * Authorization state the user is currently in.
     *
     * @var string
     */
    public string $authorizationState;
    /**
     * Life cycle state the user is currently in.
     *
     * @var string
     */
    public string $lifeCycle;
    /**
     * A locked user is not allowed to log in.
     *
     * @var bool
     */
    public bool $isLocked;
    /**
     * A support user is a user created for Picturepark support personnel.
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
}