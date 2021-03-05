<?php

namespace PicturePark\API\Exception;

class UserSearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}