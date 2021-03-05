<?php

namespace PicturePark\API\Exception;

class OutputFormatDeleteManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}