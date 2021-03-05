<?php

namespace PicturePark\API\Exception;

class BusinessProcessWaitForStatesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}