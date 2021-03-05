<?php

namespace PicturePark\API\Exception;

class ListItemGetReferencesManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}