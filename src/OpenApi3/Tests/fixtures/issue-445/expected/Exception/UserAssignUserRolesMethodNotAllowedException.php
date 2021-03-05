<?php

namespace PicturePark\API\Exception;

class UserAssignUserRolesMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}