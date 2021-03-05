<?php

namespace PicturePark\API\Exception;

class OutputFormatSetXmpWritebackState2MethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}