<?php

namespace PicturePark\API\Exception;

class BusinessProcessWaitForStatesMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}