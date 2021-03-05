<?php

namespace PicturePark\API\Exception;

class TransferImportMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}