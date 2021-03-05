<?php

namespace PicturePark\API\Exception;

class UserCancelDeletionRequestMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}