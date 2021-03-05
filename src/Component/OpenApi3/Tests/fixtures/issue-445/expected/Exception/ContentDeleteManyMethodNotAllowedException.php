<?php

namespace PicturePark\API\Exception;

class ContentDeleteManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}