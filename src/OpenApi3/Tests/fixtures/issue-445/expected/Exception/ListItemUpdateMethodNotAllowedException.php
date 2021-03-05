<?php

namespace PicturePark\API\Exception;

class ListItemUpdateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}