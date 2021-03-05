<?php

namespace PicturePark\API\Exception;

class BusinessProcessWaitForLifeCyclesUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}