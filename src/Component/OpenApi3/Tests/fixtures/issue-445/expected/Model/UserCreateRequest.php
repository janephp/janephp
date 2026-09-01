<?php

namespace PicturePark\API\Model;

class UserCreateRequest
{
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
     * Preferred language, e.g. for correspondence.
     *
     * @var string|null
     */
    public ?string $languageCode;
    /**
     * IDs of user roles the user is assigned to.
     *
     * @var list<string>|null
     */
    public ?array $userRoleIds;
    /**
     * User address.
     *
     * @var UserAddress|null
     */
    public ?UserAddress $address;
}