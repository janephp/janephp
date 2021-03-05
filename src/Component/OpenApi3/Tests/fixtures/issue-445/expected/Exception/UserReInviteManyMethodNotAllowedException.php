<?php

namespace PicturePark\API\Exception;

class UserReInviteManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}