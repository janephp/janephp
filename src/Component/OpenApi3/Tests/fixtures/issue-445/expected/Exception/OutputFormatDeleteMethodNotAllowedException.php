<?php

namespace PicturePark\API\Exception;

class OutputFormatDeleteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}