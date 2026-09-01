<?php

namespace PicturePark\API\Model;

class UserRoleDeleteManyRequest
{
    /**
     * IDs of the user roles to delete.
     *
     * @var list<string>
     */
    public array $ids;
}