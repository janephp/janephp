<?php

namespace PicturePark\API\Exception;

class ShareDeleteManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}