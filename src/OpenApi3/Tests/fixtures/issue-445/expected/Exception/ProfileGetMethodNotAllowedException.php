<?php

namespace PicturePark\API\Exception;

class ProfileGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}