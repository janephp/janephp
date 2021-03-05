<?php

namespace PicturePark\API\Exception;

class UserReviewUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}