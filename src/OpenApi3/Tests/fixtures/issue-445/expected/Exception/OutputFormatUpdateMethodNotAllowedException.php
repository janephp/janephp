<?php

namespace PicturePark\API\Exception;

class OutputFormatUpdateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}