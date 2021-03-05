<?php

namespace PicturePark\API\Exception;

class ShareRevokeMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}