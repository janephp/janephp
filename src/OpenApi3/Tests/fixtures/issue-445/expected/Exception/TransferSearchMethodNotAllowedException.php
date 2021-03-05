<?php

namespace PicturePark\API\Exception;

class TransferSearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}