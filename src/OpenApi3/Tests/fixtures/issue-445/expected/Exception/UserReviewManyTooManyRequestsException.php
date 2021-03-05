<?php

namespace PicturePark\API\Exception;

class UserReviewManyTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}