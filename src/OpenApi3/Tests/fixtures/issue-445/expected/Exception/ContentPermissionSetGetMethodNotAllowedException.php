<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}