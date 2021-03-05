<?php

namespace PicturePark\API\Exception;

class BusinessProcessCancelMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}