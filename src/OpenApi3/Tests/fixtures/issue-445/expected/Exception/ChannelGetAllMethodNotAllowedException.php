<?php

namespace PicturePark\API\Exception;

class ChannelGetAllMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}