<?php

namespace PicturePark\API\Exception;

class UserInviteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}