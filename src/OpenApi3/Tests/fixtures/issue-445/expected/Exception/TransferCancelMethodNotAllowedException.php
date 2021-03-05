<?php

namespace PicturePark\API\Exception;

class TransferCancelMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}