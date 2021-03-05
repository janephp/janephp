<?php

namespace PicturePark\API\Exception;

class ListItemDeleteManyByFilterMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}