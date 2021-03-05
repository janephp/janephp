<?php

namespace PicturePark\API\Exception;

class ChannelCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}