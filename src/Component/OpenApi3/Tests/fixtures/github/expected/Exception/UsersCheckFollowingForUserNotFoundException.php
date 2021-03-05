<?php

namespace Github\Exception;

class UsersCheckFollowingForUserNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Response if the user does not follow the target user');
    }
}