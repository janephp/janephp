<?php

namespace PicturePark\API\Exception;

class OutputFormatSetXmpWritebackStateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}