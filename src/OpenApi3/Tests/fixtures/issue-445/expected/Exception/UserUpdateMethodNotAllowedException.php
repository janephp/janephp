<?php

namespace PicturePark\API\Exception;

class UserUpdateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}