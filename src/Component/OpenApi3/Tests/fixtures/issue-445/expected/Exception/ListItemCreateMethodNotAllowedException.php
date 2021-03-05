<?php

namespace PicturePark\API\Exception;

class ListItemCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}