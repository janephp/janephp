<?php

namespace PicturePark\API\Model;

class User
{
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
}