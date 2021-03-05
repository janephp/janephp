<?php

namespace PicturePark\API\Exception;

class TransferGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}