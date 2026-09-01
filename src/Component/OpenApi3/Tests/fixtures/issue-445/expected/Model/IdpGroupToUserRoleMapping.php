<?php

namespace PicturePark\API\Model;

class IdpGroupToUserRoleMapping
{
    /**
     * Name of the group on external identity provider
     *
     * @var string|null
     */
    public ?string $group;
    /**
     * User role ID as defined in CP
     *
     * @var string|null
     */
    public ?string $userRoleId;
}