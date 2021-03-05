<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetDeleteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}