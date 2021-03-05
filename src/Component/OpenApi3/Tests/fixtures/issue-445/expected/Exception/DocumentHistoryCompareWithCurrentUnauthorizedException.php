<?php

namespace PicturePark\API\Exception;

class DocumentHistoryCompareWithCurrentUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}