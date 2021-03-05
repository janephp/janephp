<?php

namespace PicturePark\API\Exception;

class ContentAggregateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}