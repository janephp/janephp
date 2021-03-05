<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetSearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}