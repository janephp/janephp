<?php

namespace PicturePark\API\Model;

class UserProfileUpdateRequest
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
}