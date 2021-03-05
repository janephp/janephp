<?php

namespace PicturePark\API\Exception;

class ChannelDeleteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}