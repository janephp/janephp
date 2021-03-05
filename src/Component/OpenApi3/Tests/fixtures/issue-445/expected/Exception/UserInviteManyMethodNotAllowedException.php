<?php

namespace PicturePark\API\Exception;

class UserInviteManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}