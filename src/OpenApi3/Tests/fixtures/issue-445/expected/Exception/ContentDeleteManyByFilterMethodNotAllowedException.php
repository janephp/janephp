<?php

namespace PicturePark\API\Exception;

class ContentDeleteManyByFilterMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}