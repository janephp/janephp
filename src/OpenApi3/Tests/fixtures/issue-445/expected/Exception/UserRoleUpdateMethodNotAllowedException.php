<?php

namespace PicturePark\API\Exception;

class UserRoleUpdateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}