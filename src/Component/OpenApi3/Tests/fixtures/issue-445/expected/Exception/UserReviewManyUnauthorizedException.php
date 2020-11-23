<?php

namespace PicturePark\API\Exception;

class UserReviewManyUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}