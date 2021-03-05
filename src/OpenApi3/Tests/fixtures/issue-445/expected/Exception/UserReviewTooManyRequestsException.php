<?php

namespace PicturePark\API\Exception;

class UserReviewTooManyRequestsException extends TooManyRequestsException
{
    public function __construct()
    {
        parent::__construct('Too many requests');
    }
}