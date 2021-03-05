<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}