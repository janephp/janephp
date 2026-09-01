<?php

namespace PicturePark\API\Model;

class UserRoleRightsOfContentRight
{
    /**
     * The user role id.
     *
     * @var string|null
     */
    public ?string $userRoleId;
    /**
     * A permission container which can hold content, metadata or permission set rights.
     *
     * @var list<string>|null
     */
    public ?array $rights;
}