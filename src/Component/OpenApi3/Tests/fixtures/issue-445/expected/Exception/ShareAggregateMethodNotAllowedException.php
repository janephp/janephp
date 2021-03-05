<?php

namespace PicturePark\API\Exception;

class ShareAggregateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}