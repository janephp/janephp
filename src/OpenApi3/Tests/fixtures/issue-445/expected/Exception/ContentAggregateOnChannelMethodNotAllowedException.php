<?php

namespace PicturePark\API\Exception;

class ContentAggregateOnChannelMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}