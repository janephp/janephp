<?php

namespace PicturePark\API\Exception;

class ListItemSearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}