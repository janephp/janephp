<?php

namespace PicturePark\API\Exception;

class BusinessProcessWaitForLifeCyclesMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}