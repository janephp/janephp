<?php

namespace PicturePark\API\Exception;

class UserRoleUpdateManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}