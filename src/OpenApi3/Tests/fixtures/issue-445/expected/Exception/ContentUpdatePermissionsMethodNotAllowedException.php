<?php

namespace PicturePark\API\Exception;

class ContentUpdatePermissionsMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}