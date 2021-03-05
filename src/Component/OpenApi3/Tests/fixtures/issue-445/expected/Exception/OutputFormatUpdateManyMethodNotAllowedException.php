<?php

namespace PicturePark\API\Exception;

class OutputFormatUpdateManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}