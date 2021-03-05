<?php

namespace PicturePark\API\Exception;

class UserRoleGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}