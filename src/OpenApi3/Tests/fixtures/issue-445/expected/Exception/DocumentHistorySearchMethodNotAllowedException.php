<?php

namespace PicturePark\API\Exception;

class DocumentHistorySearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}