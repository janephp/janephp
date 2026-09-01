<?php

namespace PicturePark\API\Model;

class UserRoleAssignment
{
    /**
     * User role assigned.
     *
     * @var UserRole|null
     */
    public ?UserRole $userRole;
    /**
     * Marks user roles that were assigned automatically to a federated user based on group mapping of a federated identity provider.
     *
     * @var bool
     */
    public bool $isFederated;
}