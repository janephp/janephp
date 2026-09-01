<?php

namespace PicturePark\API\Model;

class UserRoleUpdateManyRequest
{
    /**
     * New value for user roles with specified IDs.
     *
     * @var list<UserRole>
     */
    public array $items;
}