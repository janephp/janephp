<?php

namespace PicturePark\API\Exception;

class UserReviewMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}