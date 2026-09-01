<?php

namespace PicturePark\API\Model;

class UserEmail
{
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
     * Email address
     *
     * @var string
     */
    public string $emailAddress;
}