<?php

namespace PicturePark\API\Exception;

class UserReinviteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}