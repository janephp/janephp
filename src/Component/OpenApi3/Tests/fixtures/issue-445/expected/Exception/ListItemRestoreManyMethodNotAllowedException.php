<?php

namespace PicturePark\API\Exception;

class ListItemRestoreManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}