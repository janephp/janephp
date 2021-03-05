<?php

namespace PicturePark\API\Exception;

class UserGetManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}