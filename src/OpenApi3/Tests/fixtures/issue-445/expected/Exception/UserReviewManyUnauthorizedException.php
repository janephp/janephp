<?php

namespace PicturePark\API\Exception;

class UserReviewManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}