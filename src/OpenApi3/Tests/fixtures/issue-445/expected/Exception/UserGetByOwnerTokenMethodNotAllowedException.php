<?php

namespace PicturePark\API\Exception;

class UserGetByOwnerTokenMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}