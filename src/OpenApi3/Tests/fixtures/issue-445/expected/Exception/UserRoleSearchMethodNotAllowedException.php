<?php

namespace PicturePark\API\Exception;

class UserRoleSearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}