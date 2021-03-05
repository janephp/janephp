<?php

namespace PicturePark\API\Exception;

class UserRoleCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}