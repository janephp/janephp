<?php

namespace PicturePark\API\Exception;

class UserLockManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}