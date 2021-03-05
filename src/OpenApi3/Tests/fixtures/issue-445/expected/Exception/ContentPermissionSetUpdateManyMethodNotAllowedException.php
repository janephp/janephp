<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetUpdateManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}