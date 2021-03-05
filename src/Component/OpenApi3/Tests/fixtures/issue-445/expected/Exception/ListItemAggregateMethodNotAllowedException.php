<?php

namespace PicturePark\API\Exception;

class ListItemAggregateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}