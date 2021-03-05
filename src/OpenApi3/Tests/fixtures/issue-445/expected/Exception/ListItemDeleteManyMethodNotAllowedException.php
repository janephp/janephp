<?php

namespace PicturePark\API\Exception;

class ListItemDeleteManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}