<?php

namespace PicturePark\API\Model;

class UserRoleEditable
{
    /**
     * Language specific user role names.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * All user rights for this user role.
     *
     * @var list<string>
     */
    public array $userRights;
}