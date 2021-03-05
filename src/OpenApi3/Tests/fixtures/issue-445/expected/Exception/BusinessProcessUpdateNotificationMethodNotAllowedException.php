<?php

namespace PicturePark\API\Exception;

class BusinessProcessUpdateNotificationMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}