<?php

namespace PicturePark\API\Exception;

class UserCancelDeletionRequestUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}