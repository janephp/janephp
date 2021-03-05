<?php

namespace PicturePark\API\Exception;

class ListItemGetReferencesMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}