<?php

namespace PicturePark\API\Exception;

class UserRestoreMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}