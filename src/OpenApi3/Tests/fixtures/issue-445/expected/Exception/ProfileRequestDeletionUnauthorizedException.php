<?php

namespace PicturePark\API\Exception;

class ProfileRequestDeletionUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}