<?php

namespace PicturePark\API\Exception;

class TransferSearchFilesMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}