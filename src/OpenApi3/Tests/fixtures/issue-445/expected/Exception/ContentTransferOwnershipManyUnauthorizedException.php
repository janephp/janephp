<?php

namespace PicturePark\API\Exception;

class ContentTransferOwnershipManyUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Unauthorized');
    }
}