<?php

namespace PicturePark\API\Exception;

class ListItemGetManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}